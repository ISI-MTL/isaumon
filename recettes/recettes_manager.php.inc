<?php
//$root = $_SERVER['DOCUMENT_ROOT'] . "/public_html/";
require_once(/*$root .*/ "common/mysql.php.inc");

$db = "isaumon" ;

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



/*
// Fonction de suppression
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
}


?>

*/