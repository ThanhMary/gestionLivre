<?php
/*********************************************************************************************************************************	
	Nom du script     : Ajouter_livre.php (page dynamique générée par 
						script PHP)
	description       : Script qui se connecte au Serveur Mysql en utilisant 
						l'extension "Mysqli", pour ajouter les informations reçu du formulaire
 						dans la table livre
	version           : 1.0
	Auteur		      : M. SALL
	Date              : 29/02/2016
	codage de la page : UTF8-8-BOM
	lien pour Mysqli  :
**********************************************************************************************************************************/
?>
<!-- page en HTML5 -->
<?xml version="1.0" encoding="UTF-8-BOM" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
  <head>
    <title>Ajout d'un livre</title>
	<!-- incorporer la feuille de style-->  
	<link href="Monstyle.css" rel="stylesheet" type="text/css">
	</head>
   <body>
		<!-- Contenu de la page respectant la syntaxe XML. -->
		<h1 align="center">Nouveau livre</h1>
		<BR>
		<BR>
		<BR>
		<?PHP
		// obtenir les éléments postés
		$Titre=utf8_decode($_POST['Titre']);
		$Auteur=utf8_decode($_POST['Auteur']);
		$Genre=utf8_decode($_POST['Genre']);
		$Prix=$_POST['Prix'];
		
		/* connexion au SGBD et envoie de la requête d'insertion de livre */
		$requete = "INSERT INTO livre(titre,auteur,genre,prix)
					VALUES ('$Titre','$Auteur','$Genre',$Prix)";
					
		/* connexion au SGBD MySql en précisant le serveur, l'utilisateur, le MdP et la base de données, 
		 si ok la connexion sera accessible à travers $link*/
		// préparation des informations de connexion	
		$Nom_Serveur = 'localhost';
		$Nom_utilisateur = 'user';
		$Mdp_utilisateur ='sio@sio2016';
		$Nom_BD_Travail  = 'biblio';
		
		$link = mysqli_connect($Nom_Serveur, $Nom_utilisateur, $Mdp_utilisateur, $Nom_BD_Travail);
		if (!$link) {
			//si erreur arrêt du script après affichage d'un massage d'erreur
			die('Erreur de connexion (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
		}
		// envoie requete d'insertion
		if ($result = mysqli_query($link,$requete, MYSQLI_USE_RESULT)) 
		{
			echo " insertion ok ";
			require_once('affiche_livre_exemple.php');
		}
		else
		{
			die('Erreur de requête insertion (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
		}
		
		
		
		
		?>
	</body>
</html>
	
