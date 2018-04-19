<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>traitement formulaire</title>
  <link rel="stylesheet" type="text/css" href="Monstyle.css"> 
</head>
<body>
	<h1>Données reçues du formulaire    </h1>
	<?php
		// obtenir les éléments postés
		$Le_Prenom = $_POST['prenom'];
		echo "bonjour $Le_Prenom";
	
	?>
	
  
</body>
</html>