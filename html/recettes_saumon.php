<div class="container">
	<h1>Yay recettes!</h1>
	<?php
	$recettes = getPostsFromPage(1, 5);

	foreach($recettes as $recette)
	{
		echo "<h2>" . $recette['title'] . "</h2>";
		echo "<p>" . $recette['content'] . "</p>";
	}
	?>
</div>