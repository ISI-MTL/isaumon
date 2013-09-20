 <?php
require_once("common/mysql.php.inc");
$db = 'isaumon';


// Fonction insert commentaires
function insert_commentaire($commt){
	global $bd;
	$table = 'commentaires';
	
	// extraire des variables a partir des clé-valeur
	// d'un tableau'
	extract($commt);
	
	$req ="INSERT INTO $table(titre, contenu, commid, artid, date, auteur, img, recette_id) 
	VALUES ('$titre', '$contenu', '$commid', '$artid', '$date', '$auteur', '$img', '$recette_id')";
	
	$commt = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($commt);
}

// Fonction supprimer recette par id
function delete_comment_by_id($id){
	global $bd;
	$table = 'commentaires';	
	
	$req ="DELETE FROM $table WHERE id = '$id'";	
	
	$recette = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($recette);
}

// fonction get id commentaires
function get_id_commentaire(){
	global $db ;
	$table = 'commentaires';
	
	$req = "SELECT id FROM $table WHERE commid is null";
	$id_commt = readData($db, $q);
	return $id_commt;
}

//fonction get info commentaires by date
function get_info_commt_date($date){
	global $bd;
	$table = 'commentaires';
	
	$req = "SELECT * FROM $table WHERE date = '$date'";
	$fait = readData($db, $q);
	
	return ($fait);
}

//fonction get info commentaires by recette_id
function get_info_commt_rectt($recette){
	global $bd;
	$table = 'commentaires';
	
	$req = "SELECT * FROM $table WHERE recette_id = '$recette'";
	$fait = readData($db, $q);
	
	return ($fait);
}

//fonction update commid

function update_commid($id){
	global $db ;
	$table = 'commentaires';
	
	$req = "UPDATE commentaires SET commid= '$id' WHERE id = '$id' ";
	$commtid = insert_update_data($bd,$req);
	
	// retourne le resultat de la function (true ou false)
	return ($commtid);
}


?>
