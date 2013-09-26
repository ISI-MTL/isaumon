<?php 
	require_once("/recettes/recettes_manager.php.inc");
	if (isset($_GET['recette'])) {
		$recette=get_recette_by_id($_GET['recette']);
	}
//	var_dump($recette);
?>
<div class="container">
<h2><?php echo($recette[0]['titre']); ?></h2>
<img src="<?php echo($recette[0]['img']); ?>">

<!-- la section Ingredient -->
<section>
<?php 
$ingredients =explode(";", ($recette[0]['ingredients']));
foreach($ingredients as $value){
echo ($value."<br/>");
}
?>
</section>

<!-- la section preparation -->
<section>
<?php echo($recette[0]['preparation']); ?>	
</section>
</div>