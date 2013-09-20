<?php
require_once(/*$root .*/ "include_isaumon/includBd.php.inc");
$db = 'isaumon';

// Fonction insert chroniqueur
function insert_chroniqueur($chroniq){
	global $bd;
	$table = 'chroniqueurs';
	
	// extraire des variables a partir des clé-valeur
	// d'un tableau'
	extract($chroniq);
	
	$req = "INSERT INTO $table( nom, prenom, user, password, description) 
	        VALUES ('$nom', '$prenom', '$user', '$password', '$description')";	
			
	$chroniq = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($chroniq);
}
// Fonction delete chroniqueur
function delete_chroniqueur($id){
	global $bd;
	$table = 'chroniqueurs';
		
	$req = "DELETE FROM $table WHERE id = '$id'";	
			
	$chroniq = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($chroniq);
}

//fonction update description chronoque  by user
function update_description_chroniq_by_user($desc, $id){
	global $bd;
	$table = 'chroniqueurs';
	
	$req = "UPDATE $table SET description ='$desc' WHERE user = '$id'";
	$chroniq = insert_update_data($db, $q);
	
	return ($chroniq);
}
//fonction get nom prenom chronique by user
function get_nom_chroniq_by_user($user){
	global $bd;
	$table = 'chroniqueurs';
	
	$req = "SELECT DISTINCT nom, prenom FROM $table WHERE user = '$user'";
	$chroniq = readData($db, $q);
	
	return ($chroniq);
}

//fonction get info chronoque  by id
function get_info_chroniq_by_user($id){
	global $bd;
	$table = 'chroniqueurs';
	
	$req = "SELECT id, nom, prenom, description FROM $table WHERE user = '$id'";
	$chroniq = readData($db, $q);
	
	return ($chroniq);
}


?>
