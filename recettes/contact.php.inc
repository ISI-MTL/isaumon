<?php
require_once("..common/mysql.php.inc");
$db = 'isaumon';

// Fonction insert categorie
function insert_categorie($categorie){
	global $bd;
	$table = 'categories';
	
	// extraire des variables a partir des clé-valeur
	// d'un tableau'
	extract($categorie);
	
	$req = "INSERT INTO $table(titre, abbr, type) 
	        VALUES ('$titre', '$abbr', '$type')";	
			
	$categorie = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($categorie);
}
// Fonction delete categorie
function delete_categorie($id){
	global $bd;
	$table = 'categories';
	
	// extraire des variables a partir des clé-valeur
	// d'un tableau'
	extract($categorie);
	
	$req = "DELETE FROM $table WHERE id ='$id'";	
			
	$categorie = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($categorie);
}
//fonction get titre, abbr categories
function get_titre_abbr_categorie(){
	global $bd;
	$table = 'categories';
	
	$req = "SELECT DISTINCT titre, abbr FROM $table";
	$categorie = readData($db, $q);
	
	return ($categorie);
}
//fonction get type categories
function get_type_categorie(){
	global $bd;
	$table = 'categories';
	
	$req = "SELECT DISTINCT type FROM $table";
	$categorie = readData($db, $q);
	
	return ($categorie);
}

//fonction get id categories
function get_id_categorie($titre, $abbr, $type){
	global $bd;
	$table = 'categories';
	
	$req = "SELECT DISTINCT id FROM $table WHERE titre='$titre' and abbr='$abbr' and type='$type'";
	$categorie = readData($db, $q);
	
	return ($categorie);
}
?>
