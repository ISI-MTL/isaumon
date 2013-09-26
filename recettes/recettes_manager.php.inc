<?php
require_once("common/mysql.php.inc");

$db = "isaumon";

function getNumberOfPosts()
{
	global $db;

	$q = "SELECT count(*) as 'nb' from recettes";
	$res = readData($db, $q);
	return $res;
}

function getPostsFromPage($pageNb, $postsPerPage)
{
	global $db;

	$start = ($pageNb-1) * $postsPerPage;

	$q = "SELECT * from posts ORDER BY posted DESC LIMIT $start, $postsPerPage";
	return readData($db, $q);
}

function getPostById($id)
{
	global $db;

	$q = "SELECT * from posts where id='$id'"; 
	return readData($db, $q);
}

function insertPost($post)
{
	global $db;
	
	// extraire des variables a partir des clé-valeur d'un array php
	extract($post);
	
	$q = "INSERT INTO posts (title, content, author, image) 
		  VALUES ('$title', '$content', '$author', '$image')";
	
	return insertUpdateData( $db, $q );
}

/*// Fonction de suppression
function delete_usager($auteur){
	global $bd;
	global $table;
	
	// extraire des variables a partir des clé-valeur
	// d'un tableau'
	extract($auteur);
	
	$req ="DELETE FROM posts WHERE pseudo = '$pseudo' OR password = '$password'";
	
	$pays = insert_update_data($bd,$req);
	
	// retourne le resultat bde l'operation (true ou false)
	return ($pays);
}*/

// Fonction insert commentaires
function insert_recettes($recette){
	global $db;
	$table = 'recettes';
	
	// extraire des variables a partir des clé-valeur
	// d'un tableau'
	extract($recette);	
	
	$q ="INSERT INTO $table(`titre`, `commentaire`, `ingredients`, `portion`, `tpspreparation`, `tpscuisson`, 
	                        `mdcuisson`, `preparation`, `evaluation`, `img`)
		 VALUES ('$titre', '$commentaire', '$ingredients', '$portion', '$tpspreparation', '$tpscuisson', 
		         '$mdcuisson','$preparation', '$evaluation', '$img')"; 		
	//var_dump($q);
	$recette = insertUpdateData($db,$q);
	//var_dump($recette);
	// retourne le resultat de la function (true ou false)
	return ($recette);
}

// Fonction supprimer recette par id
function delete_recette_by_id($id){
	global $db;
	$table = 'recettes';	
	
	$q ="DELETE FROM $table WHERE id = '$id'";	
	
	$recette = insertUpdateData($bd,$q);
	
	// retourne le resultat de la function (true ou false)
	return ($recette);
}

function get_list_recette(){
	global $db ;
	$table = 'recettes';
	$q = "SELECT DISTINCT titre FROM $table";
	$titre = readData($db, $q);
	return $titre;
}

// function get recette by nom
function get_recette_by_nom($nom){
	global $db ;
	$table = 'recettes';
	$q = "SELECT * FROM $table WHERE titre='$nom'";
	$recette = readData($db, $q);
	return $recette;
}

// function get recette by nom
function get_all_recette(){
	global $db ;
	$table = 'recettes';
	$q = "SELECT * FROM $table";
	$recette = readData($db, $q);
	return $recette;
}

// function get id recette
function get_id_recette($titre,$commt,$ingrdt,$portion ){
	global $db ;
	$table = 'recettes';
	
	$q = "SELECT id FROM $table 
	        WHERE titre='$titre' and  commentaire='$commt' and ingredients='$ingrdt' and portion='$portion'";
	$id_recette = readData($db, $q);
	return $id_recette;
}
// function get recette by nom
function get_recette_by_id($id){
	global $db ;
	$table = 'recettes';
	$q = "SELECT * FROM $table WHERE id='$id'";
	$recette = readData($db, $q);
	return $recette;
}

?>