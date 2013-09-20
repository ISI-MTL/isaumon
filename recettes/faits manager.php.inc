<?php
require_once(/*$root .*/ "include_isaumon/includBd.php.inc");
$db = 'isaumon';

// Fonction insert faits
function insert_fait($fait){
	global $bd;
	$table = 'faits';
	
	// extraire des variables a partir des clé-valeur
	// d'un tableau'
	extract($fait);
	
	$req ="INSERT INTO $table(titre, contenu, date) VALUES ('$titre', '$contenu', '$date')";	
	
	$fait = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($fait);
}
// Fonction supprimer faits par id
function delete_fait_by_id($id){
	global $bd;
	$table = 'faits';	
	
	$req ="DELETE FROM $table WHERE id = '$id'";	
	
	$fait = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($fait);
}

// Fonction supprimer faits par date
function delete_fait_by_date($date){
	global $bd;
	$table = 'faits';	
	
	$req ="DELETE FROM $table WHERE id = '$date'";	
	
	$fait = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($fait);
}

//fonction get id faits
function get_id_faits($titre,$contenu,$date){
	global $bd;
	$table = 'faits';
	
	$req = "SELECT id FROM $table WHERE titre = '$titre' and contenu = '$contenu' and date = '$date'";
	$fait = readData($db, $q);
	
	return ($fait);
}
//fonction get titre contenu, date by ID
function get_titre_contenu_by_id($id){
	global $bd;
	$table = 'faits';
	
	$req = "SELECT titre, contenu, date FROM $table WHERE id = '$id'";
	$fait = readData($db, $q);
	
	return ($fait);
}

//fonction get info faits by date
function get_titre_contenu_by_id($date){
	global $bd;
	$table = 'faits';
	
	$req = "SELECT * FROM $table WHERE date = '$date'";
	$fait = readData($db, $q);
	
	return ($fait);
}
?>
