<?php 
	require_once("/recettes/recettes_manager.php.inc");

	if (isset($_GET['recette'])) {

		$recette=get_recette_by_id($_GET['recette']);
	}
	var_dump($recette);

?>
<div class="container">
Recette choisi
</div>
