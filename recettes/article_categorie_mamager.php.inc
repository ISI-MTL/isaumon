<?php
require_once(/*$root .*/ "include_isaumon/includBd.php.inc");
$db = 'isaumon';

// Fonction insert article_categorie 
function insert_article_categorie($artcatg){
	global $bd;
	$table = 'article_categorie';
	
	// extraire des variables a partir des clé-valeur
	// d'un tableau'
	extract($artcatg);
	
	$req ="INSERT INTO $table(catId, artId) VALUES ('$catId', '$artId')";	
	
	$artcatg = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($artcatg);
}
// Fonction supprimer article_categorie by id 
function delete_article_categorie($id){	
	global $bd;
	$table = 'article_categorie';
	
	$req ="DELETE FROM $table WHERE id = '$id'";	
	
	$artcatg = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($artcatg);
}

//fonction get id article_categorie
function get_id_article_categorie($catId,$artId){
	global $bd;
	$table = 'article_categorie';
	
	$req = "SELECT id FROM $table WHERE catId= '$catId' and $artId";
	$artcatg = readData($db, $q);
	
	return ($artcatg);
}
?>
