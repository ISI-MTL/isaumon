<?php include("blog/blog_manager.php.inc"); ?>

<div class="container">
	<h1>Nos chroniques</h1>

<?php
$page = 1;

if( isset($_GET['p']) )
	$page = $_GET['p'];

// articlesParPage se trouve dans le fichier de config config/blog.config.php.inc
$articles = getArticlesFromPage($page, $articlesParPage);

// Affiche $articlesParPage posts en fonction de la $page courrante
foreach($articles as $article)
{ ?>

	<article class="chronique">
		<?php
		// si l'image n'existe pas, afficher une image par défaut
		$image = "missing.png";
		if( isset($article['img']) && file_exists("assets/img/blog/" . $article['img']) )
			$image = $article['img'];
		?>
		<img src="assets/img/blog/<?php echo $image; ?>" alt="" />
		<div>
			<h2><?php echo $article['titre']; ?></h2>
			<p class="chroniqueur">Par <?php echo $article['auteur']; ?> à <?php echo date_format( date_create($article['date']), 'G:i, d-m-Y'); ?></p>
			<p class="chronique-contenu">
				<?php echo $article['contenu']; ?>
			</p>
			<a href="?page=blog&id=<?php echo $article['id'] ?>" class="lire-tout">LIRE LA SUITE</a>
		</div>
	</article>

<?php
}

// si c'est la liste des articles
if( !isset($_GET['id']) )
{
	// Pagination 
	echo '<nav>';
	echo '<ul>';
	for($i=1; $i<=$nbPages; $i++)
	{
		// si t est absent et que $i = 1, alors la première page est active
		// si t est présent, alors le $i ème élément est actif
		if( (!isset($_GET['p']) && $i == 1) || (isset($_GET['p']) && $i == $_GET['p']) )
			echo '<li class="active">';
		else
			echo '<li>';
		echo '<a href="?page=blog&p='.$i.'">'.$i.'</a>';
		echo '</li>';
	}
	echo '</ul>';
	echo '</nav>';
}
else // si c'est un article en particulier on affiche la section commentaires
{
	// Si $_SESSION['user'] est setté, afficher le formulaire pour ajotuer un comment
	/*if( isset($_SESSION['user']) )
	{
		include("form_comments.php");
	}*/

	// Afficher la liste des commentaires
	//$comments = 
}

?>	
</div>

