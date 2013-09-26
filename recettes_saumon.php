	<?php
	require_once("/recettes/recettes_manager.php.inc");
	$table_recettes=get_all_recette();
	?>
	<div class="container">
		<h1>Nos recettes rapide et facile!</h1>
		<h2><cite>"Cuisiner suppose une tête légère, un esprit généreux et un coeur large".</cite>par Paul Gauguin</h2>
		<ul class="grid effect-7" id="grid">
			<?php foreach( $table_recettes as $recette){ ?>
			<li><img class="recette_image" src="assets/img/recettes/<?php echo($recette["img"]);?>">
			<h2><?php echo($recette["titre"]);?></h2>
			<p><?php echo($recette["commentaire"]);?></p>
			<a href="recette_choisi.php?recette=<?php echo($recette["id"]) ?>">En savoir plus</a>
			</li>
			<?php } ?>
		</ul>
	</div>

