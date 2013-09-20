<?php include("blog/blog_manager.php.inc"); ?>

<div class="container">
	<h1>Nos chroniques</h1>

<?php
// Affiche $postsDisplayed posts en fonction de la $page courrante
foreach($posts as $post)
{ ?>

	<article class="chronique">
		<img src="assets/img/bouchees-saumon-roti_a_la_francaise.jpg" alt="" />
		<div>
			<h2>Les saumons contre-attaque</h2>
			<p class="chroniqueur">Par Ricardo Seedo | 19 septembre 2013</p>
			<p class="chronique-contenu">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<a href="#" class="lire-tout">LIRE LA SUITE</a>
		</div>
	</article>

<?php
}

if( !isset($_GET['id']) )
{
	// détermine le nombre de pages pour la pagination
	$nbPages = 1;
	$nbPosts = getNumberOfPosts();
	if( $nbPosts != -1 )
	{
		$nbPages = ceil( $nbPosts / $postsDisplayed );
	}

	// Pagination 
	echo '<ul id="pagination">';
	for($i=1; $i<=$nbPages; $i++)
	{
		// si t est absent et que $i = 1, alors la première page est active
		// si t est présent, alors le $i ème élément est actif
		if( (!isset($_GET['t']) && $i == 1) || (isset($_GET['t']) && $i == $_GET['t']) )
			echo '<li class="active">';
		else
			echo '<li>';
		echo '<a href="?t='.$i.'">'.$i.'</a>';
		echo '</li>';
	}
	echo '</ul>';
}
else
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


	<nav>
		<ul>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
		</ul>
	</nav>
	
</div>