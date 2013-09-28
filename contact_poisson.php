<?php 
	
?>





<!-- ================================================================= -->
<div class="container">
	<h1>Gardez contact</h1>
	<img id="timbres" src="assets\img\timbres\timbres-poisson.png">
	<h2>Réagissez à notre blog ou faites-nous parvenir vos commentaires,<br>votre avis est important</h2>

	<form class= "ensemble" action = "traitement_contact.php.inc" method = "POST">
		<div class= "champsText">
			<h3>Vos coordonnées</h3>
			<label> Prénom : </label>
				<input  type="text" placeholder="p.ex. Jean-François"  name="prenom" pattern="^[a-zA-Z][a-zA-Z-_\.\s]{1,20}$" title="Veuillez introduire votre prénom s'il vous plaît" required="required" value=""/> 	
	    	<br>
	    	<br>
	    	<br>
	        
	        <label> Nom de famille : </label>
	    		<input type="text" placeholder="p.ex. Doubois" name="nom" pattern="^[a-zA-Z\][a-zA-Z0-9-_\.\s]{1,20}$" title="Veuillez introduire votre nom de famille s'il vous plaît" value=""/>
	    	<br>
	    	<br>
	    	<br>
	        <label> Email / courriel : </label>
	        	<input type="email" placeholder="p.ex. jf-doubois@courriel.com" name="email" title="Veuillez introduire votre email/courriel s'il vous plaît" value=""/>
	    </div>  
	    <div class= "champsText">
		    <h3>Votre avis : </h3>
			<label> Commentaires : </label>
				<br>
				<textarea name= "ecrireCommentaires" id="commentaires"></textarea>
			<br>
			<br>
			<label> Aimez-vous iSaumon? </label>
				<fieldset > 
				    <input type="radio" id="star5" name="rating" value="Extraordinaire!" /><label for="star5" title="Extraordinaire!"></label>
				    <input type="radio" id="star4" name="rating" value="J'aime" /><label for="star4" title="J'aime"></label>
				    <input type="radio" id="star3" name="rating" value="OK" /><label for="star3" title="OK"></label>
				    <input type="radio" id="star2" name="rating" value="Je n'aime pas" /><label for="star2" title="Je n'aime pas"></label>
				    <input type="radio" id="star1" name="rating" value="Je n'aime pas du tout" /><label for="star1" title="Je n'aime pas du tout"></label>
				</fieldset>
		</div>
		<button>Envoyer</button>
	</form>
	
</div>
