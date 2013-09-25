<?php session_start();

require_once("recettes/contact_manager.php.inc");
$contact = array( );

if (isset($_POST['prenom']) 
	&& isset($_POST['nom']) 
	&& isset($_POST['email'])
	&& isset($_POST['ecrireCommentaires'])
	&& isset($_POST['rating'])
	) {
	$contact['prenom'] = $_POST['prenom'];
	$contact['nom']=$_POST['nom'];
	$contact['courriel']=$_POST['email'];		
	$contact['commentaire']=$_POST['ecrireCommentaires'];
	$contact['avis']=$_POST['rating'];


	$contacts = insert_contact($contact);

}



var_dump($contacts);

?>