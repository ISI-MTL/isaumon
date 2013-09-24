<?php
session_start();

// mettre les données en session
$titre = ""; $commt = ""; $ingrd = ""; $portion = ""; $tpspre = ""; $tpscuis = ""; $mdcuis = "";
$preparat = ""; $evalue = ""; $img = "";

if(isset($_SESSION['titre'])){
	$titre = $_SESSION['titre'];
	unset($_SESSION['titre']);
}
if(isset($_SESSION['commentaire'])){
	$commt = $_SESSION['commentaire'];
	unset($_SESSION['commentaire']);
}
if(isset($_SESSION['ingredients'])){
	$ingrd = $_SESSION['ingredients'];
	unset($_SESSION['ingredients']);
}
if(isset($_SESSION['portion'])){
	$portion = $_SESSION['portion'];
	unset($_SESSION['portion']);
}
if(isset($_SESSION['tpspreparation'])){
	$tpspre = $_SESSION['tpspreparation'];
	unset($_SESSION['tpspreparation']);
}
if(isset($_SESSION['tpscuisson'])){
	$tpscuis = $_SESSION['tpscuisson'];
	unset($_SESSION['tpscuisson']);
}
if(isset($_SESSION['mdcuisson'])){
	$mdcuis = $_SESSION['mdcuisson'];
	unset($_SESSION['mdcuisson']);
}
if(isset($_SESSION['preparation'])){
	$preparat = $_SESSION['preparation'];
	unset($_SESSION['preparation']);
}
if(isset($_SESSION['evaluation'])){
	$evalue = $_SESSION['evaluation'];
	unset($_SESSION['evaluation']);
}
if(isset($_SESSION['img'])){
	$img = $_SESSION['img'];
	unset($_SESSION['img']);
}



?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ajouter recette</title>
		<meta name="" content=""/>
		<style>
			.label{
				padding-right: 50px;
				text-align: right;		
			}
			.input{
				margin-right: 20px;
			}
			
		</style>		
	</head>
	<body>
		<form action="traitement_Ajrct.php.inc" method="POST">
			<p>
				<label for="titre"> <strong class="label"> Titre: </strong></label>
				<input class="input" id="titre" type="text" name="titre" value="<?php echo($titre);?>"/>
			</p>
			<p>
				<label for="commt"> <strong class="label">Description: </strong></label>
				<textarea class="input" id="commt" rows="5" cols="50" name="commt" ><?php echo($commt);?></textarea>
			</p>
			<p>
				<label for="ingrd"> <strong class="label">Ingredients: </strong></label>
				<textarea class="input" id="ingrd" rows="5" cols="50" name="ingrd"><?php echo($ingrd);?></textarea>
			</p>
			<p>
				<label for="portion"> <strong class="label">Portion: </strong></label>
				<input class="input" id="portion" type="text" name="portion" value="<?php echo($portion);?>"/>			
				<label for="mdcuis"> <strong class="label">Mode de cuisson: </strong></label>
				<select class="input" id="mdcuis" name="mdcuis" value="<?php echo($mdcuis);?>">
						<option value="Four">Four</option>
						<option value="Pôle">Pôle</option>
						<option value="Microonde">Microonde</option>
						<option value="Plaque">Plaque</option>
				</select>
			</p>
			<p>
				<label for="tpspre"> <strong class="label">Temps de preparation: </strong></label>
				<input class="input" id="tpspre" type="text" name="tpspre" value="<?php echo($tpspre);?>"/>			
				<label for="tpscuis"> <strong class="label">Temps de cuisson: </strong></label>
				<input class="input" id="tpscuis" type="text" name="tpscuis" value="<?php echo($tpscuis);?>"/>
			</p>
			<p>
				<label for="preparat"> <strong>Preparation: </strong></label>
				<textarea class="input" id="preparat" rows="6" cols="50" name="preparat"><?php echo($preparat);?></textarea>
			</p>
			<p>
				<label for="evalue"> <strong class="label">Evaluation: </strong></label>
				<input class="input" id="evalue" type="text" name="evalue" value="<?php echo($evalue);?>"/>
			</p>
			<!--<p>
				<label for="date"> <strong class="label">Date de publication: </strong></label>
				<input class="input" id="date" type="date" name="date" />
			</p>-->
			<p>
				<label for="img"> <strong class="label">Nom de l'image du recette: </strong></label>
				<input class="input" id="img" type="text" name="img" value="<?php echo($img);?>"/>
			</p>
			<input class="bouton" type="reset" value="Effacer"/>		
			<input class="bouton" type="submit" value="Enregistrer" />
		</form>
	</body>
</html>