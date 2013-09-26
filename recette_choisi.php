<?php 
	require_once("/recettes/recettes_manager.php.inc");
	if (isset($_GET['recette'])) {
		$recette=get_recette_by_id($_GET['recette']);
	}
?>
<div class="container">
<h2><?php echo($recette[0]['titre']); ?></h2>
<img src="assets/img/recettes/<?php echo($recette[0]["img"])?>">

<!-- la section Ingredient -->
<section id="ingredient">
<h3>Ingredients</h3>
<?php 
$ingredients = explode(";", ($recette[0]['ingredients']));
foreach($ingredients as $value){
echo ($value."<br/>");
}
?>
</section>

<!-- la section preparation -->
<section id ="preparation">
<h3>Preparation</h3>
<?php 
$preparation = explode(";", ($recette[0]['preparation']));
$prep_len = count($preparation);

for($i=0 ; $i < ($prep_len-1); $i++){

echo ("- ".$preparation[$i]."<br/>");
}
?>	
</section>
</div>