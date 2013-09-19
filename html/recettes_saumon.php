<div class="container">
	<h1>Yay recettes!</h1>
	<?php
	$recettes = getPostsFromPage(1, 5);

	foreach($recettes as $recette)
	{ ?>
		<article class="recette">
			<img src="../assets/img/bouchees-saumon-roti_a_la_francaise.jpg" alt="omnomnom" />
			<h2><?php echo $recette['title']; ?></h2>
			<p><?php echo $recette['content']; ?></p>
		</article>
	<?php } ?>
</div>