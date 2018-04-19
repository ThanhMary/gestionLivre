<!doctype html>
<html lang="fr">
      <HEAD>
		<meta charset="utf-8">
		<TITLE>traitement Formulaire  </TITLE>
		<link href="Monstyle.css" rel="stylesheet" type="text/css"> 
     </HEAD>
     <BODY>
		<H1> Traitement formulaire  </H1>
		<?PHP
		/************************************************************
		Nom du script : traitement_formulaire.php
		Description : reçois les données de "formulaire.html" et les affiche
		Date de création :09/03/2017
		********************************************************************/
		
		/* on stocke dans des variables locales les éléments reçus par la
		methode POST */
		$Le_Nom    =$_POST['Nom'];
		$Le_Prenom =$_POST['Prenom'];
		
		//on affiche : on incorpore à la page HTML
		echo "Bonjour $Le_Prenom <B>$Le_Nom</B>";
		?>
	 
	 </BODY>
</HTML>