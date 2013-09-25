	<?php
	require_once("/recettes/recettes_manager.php.inc");
	$table_recettes=get_all_recette();
	//var_dump($table_recettes);
	//	var_dump($table_recettes[0]["titre"]);	
	?>


<div class="container">
	<h1>Nos recettes rapide et facile!</h1>
	<h2><cite>"Cuisiner suppose une tête légère, un esprit généreux et un coeur large".</cite>par Paul Gauguin</h2>
	<p></p>
	<ul class="grid effect-7" id="grid">
				<?php foreach( $table_recettes as $reccettes){ ?>
				<li><img class="recette_image" src="assets/img/recettes/<?php echo($reccettes["img"]);?>">
				<h2><?php echo($reccettes["titre"]);?></h2>
				<p><?php echo($reccettes["commentaire"]);?></p>
				</li>
				<?php } ?>
				<li><a href="http://drbl.in/fWMM"><img src="assets/img/recettes/1.jpg"></a></li>
				<li><a href="http://drbl.in/fWPV"><img src="assets/img/recettes/3.jpg"></a></li>
				<li><a href="http://drbl.in/fWMT"><img src="assets/img/recettes/4.jpg"></a></li>
				<li><a href="http://drbl.in/gXMo"><img src="assets/img/recettes/10.png"></a></li>
				<li><a href="http://drbl.in/gXMn"><img src="assets/img/recettes/11.png"></a></li>
				<li><a href="http://drbl.in/fzYo"><img src="assets/img/recettes/2.jpg"></a></li>
				<li><a href="http://drbl.in/fARU"><img src="assets/img/recettes/14.png"></a></li>
				<li><a href="http://drbl.in/fWMM"><img src="assets/img/recettes/1.jpg"></a></li>
				<li><a href="http://drbl.in/fWPV"><img src="assets/img/recettes/3.jpg"></a></li>
				<li><a href="http://drbl.in/fWMT"><img src="assets/img/recettes/4.jpg"></a></li>
				<div id="light" class="white_content">
				<img class="recette_image" src="assets/img/recettes/<?php echo($reccettes["img"]);?>">
				This is the lightbox content. 
				</div>
				<div id="fadeblack" class="black_overlay"></div>
	</ul>
</div>

