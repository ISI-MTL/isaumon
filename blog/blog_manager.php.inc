<?php
require_once("common/mysql.php.inc");

$db = "isaumon";

function getNbArticles()
{
	global $db;

	$q = "SELECT count(*) AS 'nb' FROM commentaires WHERE commid IS NULL";
	$res = readData($db, $q);
	return $res[0]['nb'];
}

function getArticlesFromPage($pageNb, $articlessPerPage)
{
	global $db;

	$start = ($pageNb-1) * $articlessPerPage;

	$q = "SELECT * from commentaires WHERE commid IS NULL ORDER BY date DESC LIMIT $start, $articlessPerPage";
	return readData($db, $q);
}

function getArticleById($id)
{
	global $db;

	$q = "SELECT * FROM commentaires WHERE id = $id AND commid IS NULL"; 
	return readData($db, $q);
}

function getCommentairesByArticleId($id)
{
	global $db;

	$q = "SELECT contenu, date, auteur FROM commentaires WHERE commid = $id"; 
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
}*/


?>