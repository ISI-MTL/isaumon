<?php
$titre 			= "iSaumon.com: Bienfaits et bénéfices du saumon";
$keywords 		= "informations, recette, cuisine, saumon, poisson, benefices, peche, cholesterol, omega3, immunodepresseur, produits naturels, elevage, informations, repas";
$description	= "Site informationnel sur les avantages et bénéfices de la consommation. Visitez nos pages de recettes ou informez-vous sur les avantages nutrionnels du poisson.";

// nombre d'articles à afficher par page
$articlesParPage = 5;

// détermine le nombre de pages pour la pagination
$nbPages = 1;
$nbArticles = getNbArticles();
if( $nbArticles != -1 )
	$nbPages = ceil( $nbArticles / $articlesParPage );
?>