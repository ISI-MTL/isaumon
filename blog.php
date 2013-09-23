<?php include("blog/blog_manager.php.inc"); ?>

<div class="container">
	<h1>Nos chroniques</h1>

<?php
$page = 1;

if( isset($_GET['p']) )
	$page = $_GET['p'];

function afficherArticle($article)
{
	// si l'image n'existe pas, afficher une image par défaut
	$image = "missing.jpg";
	if( isset($article['img']) && file_exists("assets/img/blog/" . $article['img']) )
		$image = $article['img'];

	echo '<article class="chronique">';
	echo '	<img src="assets/img/blog/'. $image .'" alt="" />';
	echo '		<div>';
	echo '			<h2>';
	echo '				<a href="?page=blog&id='. $article['id'] .'">'. $article['titre'] .'</a>';
	echo '			</h2>';
	echo '			<p class="chroniqueur">Par '. $article['auteur'] .' à '. date_format( date_create($article['date']), 'G:i, d-m-Y') .'</p>';
	echo '			<p class="chronique-contenu">'. $article['contenu'] .'</p>';
	if( !isset($_GET['id']) )
		echo '			<a href="?page=blog&id='. $article['id'] .'" class="lire-tout">LIRE LA SUITE</a>';
	echo '		</div>';
	echo '</article>';
}
// si c'est la liste des articles
if( !isset($_GET['id']) )
{
	// articlesParPage se trouve dans le fichier de config config/blog.config.php.inc
	$articles = getArticlesFromPage($page, $articlesParPage);

	// Affiche $articlesParPage posts en fonction de la $page courrante
	foreach($articles as $article)
	{
		afficherArticle($article);
	}

	// détermine le nombre de pages pour la pagination
	$nbPages = 1;
	$nbArticles = getNbArticles();
	if( $nbArticles != -1 )
		$nbPages = ceil( $nbArticles / $articlesParPage );

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
	$article = getArticleById( $_GET['id'] );

	afficherArticle($article[0]);
}

?>	
</div>
