<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Liste des livres</title>
  <link rel="stylesheet" type="text/css" href="Monstyle.css"> 
</head>
<body>
	<?php
	/*********************************************************************************************************************************	
	Nom du script     : Affiche_livre.php (page dynamique générée par script PHP)
	description       : Script qui se connecte au Serveur Mysql en utilisant 
						l'extension "Mysql", pour interroger la table livre,
					    récupère les résultats et les affichent dans un tableau
						HTML
	version           : 1.0
	Auteur		      : M. SALL
	Date              : 04/04/2017
	codage de la page : UTF8
	**********************************************************************************************************************************/

	// se connecter au SGBD mysql
	if($id=mysql_connect("localhost","etudiant1","sio@sio2016")) 
	{
		// connexion ok
		// on séléctionne la base de donnée de travail
		if(mysql_select_db("etudiant1")) 
		{
			echo "Succès de connexion, on peurt envoyer des reqêtes";
		/*ici le reste du  code du script … */
					
		} 
		else 
		{
			die("Echec de connexion à la base.");
		}
		mysql_close($id);
	} 
	else 
	{
		// la connexion à échouée
		die("Echec de connexion au serveur de base de données.");
	}

	
	
	
	
	
	
?>




	

</body>
</html>