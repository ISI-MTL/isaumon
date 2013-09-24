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

	$q = "SELECT contenu, date, auteur FROM commentaires WHERE commid = $id ORDER BY date DESC"; 
	return readData($db, $q);
}


function ajouterCommentaire($commentaire)
{
	global $db;
	
	// extraire des variables a partir des clé-valeur d'un array php
	extract($commentaire);
	
	$q = "INSERT INTO commentaires (auteur, contenu, commid) 
		  VALUES ('$auteur', '$contenu', '$articleId')";
	
	return insertUpdateData( $db, $q );
}

?>