<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<?php
			/*
			 *	Le titre, les keywords et la description de la page se trouve dans le fichier config 
			 *	associé avec la page. Par exemple quand la variable GET page est égale à "contact", le fichier 
			 *	"config/contact.config.php.inc" est inclus et celui-ci contient les variables nécessaires.
			 */
			if( isset($_GET['page']) )
			{
				if( file_exists("config/" . $_GET['page'] . ".config.php.inc") )
				include("config/" . $_GET['page'] . ".config.php.inc");
			}
			else
			{
				include("config/accueil.config.php.inc");
			}
		?>

		<title><?php if( isset($titre) ) echo $titre; else echo "iSaumon.com"; ?></title>
		<meta name="keywords" content="<?php if(isset($keywords)) echo $keywords; ?>">
		<meta name="description" content="<?php if(isset($description)) echo $description; ?>">

		<!-- jQuery 1.10..2 -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<!-- Style de base -->
		<link rel="stylesheet" type="text/css" href="assets/css/base.css" />
		<link rel="stylesheet" type="text/css" href="assets/police/fontello/fontello.css"/>
		<!--[if IE 7]>
    		<link rel="stylesheet" href="assets/police/fontello/fontello-ie7.css">
    	<![endif]-->

		<!-- Script de base -->
		<script type="text/javascript" src="assets/js/base.js">Vous devez activer JavaScript</script>
		
		<!-- Script nivo slider page accueil -->
		<script type="text/javascript" src="assets/plugins/nivo-slider/jquery.nivo.slider.pack.js"></script>
		
		<!-- link nivo slider page accueil -->
    	<link rel="stylesheet" type="text/css" href="assets/plugins/nivo-slider/nivo-slider.css" />
    	<link rel="stylesheet" type="text/css" href="assets/plugins/nivo-slider/themes/default/default.css" />

		<!-- CSS et JS spécifique à la page -->
		<?php
		if( isset($_GET['page']) )
		{
			if( file_exists("assets/css/" . $_GET['page'] . ".css") )
				echo('<link rel="stylesheet" href="assets/css/' . $_GET["page"] . '.css">');
			if( file_exists("assets/js/" . $_GET['page'] . ".js") )
				echo('<script src="assets/js/' . $_GET["page"] . '.js"></script>');
		}
		else
		{
			if( file_exists("assets/css/accueil.css") )
				echo('<link rel="stylesheet" type="text/css" href="assets/css/accueil.css">');
			if( file_exists("assets/js/accueil.js") )
				echo('<script src="assets/js/accueil.js"></script>');
		}
		?>
	</head>
	<body>
		<!-- Header -->
		<?php include("includes/header.php.inc"); ?>

		<!-- Contenu -->
		<div id="contenu">
			<?php
			if( isset($_GET['page']) )
			{
				$filename = $_GET['page'] . ".php";
				if( file_exists($filename) )
					include($filename);
				else
				{
					// le fichier n'existe pas
					// inclus la page d'accueil
					include("accueil.php");
				}
			}
			else
			{
				// la variable GET "page" n'est pas initialisée
				// inclus la page d'accueil
				include("accueil.php");
			}
			?>
		</div>

		<!-- Footer -->
		<?php include("includes/footer.php.inc") ?>
	</body>
</html>
