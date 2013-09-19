<?php
require_once(/*$root .*/ "include_isaumon/includBd.php.inc");
$db = 'isaumon';

// function get liste recette 
function get_list_recette(){
	global $db ;
	$table = 'recettes';
	$req = "SELECT DISTINCT titre FROM $table";
	$titre = readData($db, $q);
	return $titre;
}

// function get recette by nom
function get_recette_by_nom($nom){
	global $db ;
	$table = 'recettes';
	$req = "SELECT * FROM $table WHERE titre='$nom'";
	$recette = readData($db, $q);
	return $recette;
}

// function get id recette
function get_id_recette($titre,$commt,$ingrdt,$portion ){
	global $db ;
	$table = 'recettes';
	
	$req = "SELECT id FROM $table 
	        WHERE titre='$titre' and  commentaire='$commt' and ingredients='$ingrdt' and portion='$portion'";
	$id_recette = readData($db, $q);
	return $id_recette;
}


?>


