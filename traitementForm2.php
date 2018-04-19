<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>traitement formulaire</title>
  <link rel="stylesheet" type="text/css" href="Monstyle.css"> 
</head>
<body>
	<h1>Données reçues du formulaire d'inscription   </h1>
	<?php
		// obtenir les éléments postés
		print_r($_POST);
		$Civilite = $_POST['Civilite']; // variable
		$Date_Naissance = $_POST['Naissance'];
		$NomPrenom = $_POST['NomPrenom'];
		$Adresse = $_POST ['adresse'];
		$CodeP = $_POST['CodeP'];
		$Ville = $_POST['Ville'];
		$Pays = $_POST['Pays'];
		$Plateforme = $_POST['OS'];
		$Application = $_POST['Application']; //un tableau
		
		echo " Bonjour $Civilite $NomPrenom vous êtes né(e) le $Date_Naissance <BR>";
		echo " Voici nos renseignements sur vous : <BR>";
		echo " Adresse : $Adresse - Code postal : $CodeP, Ville : $Ville, Pays :$Pays <BR>";
		echo " Plateformes : $Plateforme <BR>";
		foreach($Application as $valeur)
		{
			echo "$valeur ";
		}
		
	
	?>
	
  
</body>
</html>