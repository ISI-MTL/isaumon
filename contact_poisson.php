
<div class="container">
	<h1>Gardez Contact</h1>

	<h2>Réagissez à notre blog ou faites-nous parvenir vos commentaires, votre avis est important</h2>

	<h3>Vos coordonés</h3>
		
		<label>Prénom
			<input  type="text" placeholder="Prénom"  name="prenom" pattern="^[a-zA-Z][a-zA-Z-_\.\s]{1,20}$" title="Veuillez introduire votre prénom s'il vous plaît" required="required" value="p.ex. Jean-François"/>
    	</label>
        
        <label>Nom de famille
    		<input type="text" placeholder="Nom de famille" name="nom" pattern="^[a-zA-Z\][a-zA-Z0-9-_\.\s]{1,20}$" title="Veuillez introduire votre nom de famille s'il vous plaît" value="p.e. Doubois"/>
    	</label>
        
        <label>Email / courriel
        	<input type="email" placeholder="Courriel" name="email" title="Veuillez introduire votre email/courriel s'il vous plaît" value="jf-doubois@courriel.com"/>
        </label>

	<label>Commentaires</label>
		<textarea name= "ecrireCommentaires" id="commentaires"></textarea>

	<label> Aimez-vous ce site?
		<fieldset > 
		    <input type="radio" id="star5" name="rating[]" value="5" />
		    <label for="star5" title="Extraordinaire!">5 stars</label>
		    
		    <input type="radio" id="star4" name="rating[]" value="4" /><label for="star4" title="J'aime">4 stars</label>
		    <input type="radio" id="star3" name="rating[]" value="3" /><label for="star3" title="OK">3 stars</label>
		    <input type="radio" id="star2" name="rating[]" value="2" /><label for="star2" title="Je n'aime pas">2 stars</label>
		    <input type="radio" id="star1" name="rating[]" value="1" /><label for="star1" title="Je n'aime pas du tout">1 star</label>
		</fieldset>
	</label>



</div>
