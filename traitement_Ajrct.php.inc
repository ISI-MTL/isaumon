<?php
session_start();
require_once("recettes/recettes_manager.php.inc");
mysql_query("SET NAMES UTF8");
$recette = array();
// mettre les donn�es en session
if(isset($_POST['titre'])){
	$_SESSION['titre'] = $_POST['titre'];
}
if(isset($_POST['commt'])){
	$_SESSION['commentaire'] = $_POST['commt'];
}
if(isset($_POST['ingrd'])){
	$_SESSION['ingredients'] = $_POST['ingrd'];
}
if(isset($_POST['portion'])){
	$_SESSION['portion'] = $_POST['portion'];
}
if(isset($_POST['tpspre'])){
	$_SESSION['tpspreparation'] = $_POST['tpspre'];
}
if(isset($_POST['tpscuis'])){
	$_SESSION['tpscuisson'] = $_POST['tpscuis'];
}
if(isset($_POST['mdcuis'])){
	$_SESSION['mdcuisson'] = $_POST['mdcuis'];
}
if(isset($_POST['preparat'])){
	$_SESSION['preparation'] = $_POST['preparat'];
}
if(isset($_POST['evalue'])){
	$_SESSION['evaluation'] = $_POST['evalue'];
}
if(isset($_POST['img'])){
	$_SESSION['img'] = $_POST['img'];
}


// recupperation et insertion des donn�es
if(is_numeric($_POST['portion']) && is_numeric($_POST['tpspre']) 
   && is_numeric($_POST['tpscuis']) && is_numeric($_POST['evalue'])){
	
   if(isset($_POST['titre']) &&isset($_POST['commt']) 
   &&isset($_POST['ingrd']) &&isset($_POST['portion']) 
   &&isset($_POST['mdcuis']) &&isset($_POST['tpspre'])
   &&isset($_POST['tpscuis']) &&isset($_POST['preparat']) 
   &&isset($_POST['evalue']) &&isset($_POST['img'])
   ){
   	$recette['titre'] = $_POST['titre'];
	$recette['commentaire'] = addslashes($_POST['commt']);
	$recette['ingredients']= addslashes($_POST['ingrd']) ;
	$recette['portion'] = $_POST['portion']+0;
	$recette['tpspreparation'] = $_POST['tpspre']+0;
	$recette['tpscuisson'] = $_POST['tpscuis']+0;
	$recette['mdcuisson'] = $_POST['mdcuis'];
	$recette['preparation'] = addslashes($_POST['preparat']);
	/*$recette['date'] = $_POST['date'];*/
	$recette['evaluation'] = $_POST['evalue']+0;
	$recette['img'] = $_POST['img'] ;	
	}
	//var_dump($recette);
	$insert = FALSE;
	if(insert_recettes($recette)){
		$insert = TRUE;
	}
	else{
		$insert = FALSE;
	}
	//var_dump($insert);
	if($insert == TRUE){		
	?>
		<form action="ajouter_recette.php">
			<h3>Une ligne inser�e</h3>
			<input type="submit" value="Ok" />
		</form>
	<?php
		session_destroy();	
	}
	else{
	?>
		<form action="ajouter_recette.php">
			<h3>Erreur d'insertion</h3>
			<input type="submit" value="Ok" />
		</form>
	<?php
	}
}
else{
?>
	<form action="ajouter_recette.php">
		<h3>les champs portion, temps de cuisson, temps de preparation et �valuation sont de type numerique</h3>
		<input type="submit" value="Ok" />
	</form>
<?php
}


?>
<!--<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Contact</title>
		<meta name="" content=""/>		
	</head>
	<body>
		
	</body>
</html>-->