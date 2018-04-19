<?php
/*********************************************************************************************************************************	
	Nom du script     : Affiche_emprunt.php (page dynamique générée par 
						script PHP)
	description       : Script qui se connecte au Serveur Mysql en utilisant 
						l'extension "Mysqli", pour interroger la BD sur les emprunts,
					    récupère les résultats et les affichent dans un tableau 
						HTML
	version           : 1.0
	Auteur		      : M. SALL
	Date              : 29/02/2016
	codage de la page : UTF8-8-BOM
	lien pour Mysqli  :
**********************************************************************************************************************************/
?>
<!-- page en HTML5 -->
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
  <head>
    <title>Liste des livres</title>
	<!-- incorporer la feuille de style-->  
	<link href="Monstyle.css" rel="stylesheet" type="text/css">
	</head>
   <body>
     <!-- Contenu de la page respectant la syntaxe XML. -->
	 <h1 align="center">Les emprunts de la bibliothèque</h1>
	 <BR>
	 <BR>
	<BR>	 
	<?php
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
		// ici : connexion ok, on envoie une requête SQL pour interroger la table via la fonction "Mysqli_query"
		$requete =  "SELECT titre, auteur,nom, prenom, sortie, retour
					 FROM livre L,personne P, emprunt E
					 WHERE E.NumLivre= L.NumLivre AND
					 E.NumPersonne = P.NumPersonne";
		if ($result = mysqli_query($link,$requete, MYSQLI_USE_RESULT)) 
		{
			//ici : requête OK il faut extraire les résultats sous forme de tableau associatif avec "Mysqli_fetch_assoc"
			echo "<table><tr><th>Titre</th><th>Auteur</th><th>Nom</th><th>Prenom</th><th>Date sortie</th><th>Date retour</th></tr>";
			/* Récupère un tableau associatif */
			while ($row = mysqli_fetch_assoc($result)) 
			{
				/* tant qu'il y a des lignes à traiter on récupére les champs de l'enregistrement par leur nom et on les stockent
				   dans des variables */
				$Titre= utf8_encode($row["titre"]);   //la page HTML est codée en UTF8 donc on code tout en UTF8 avec "utf8_encode"
				$Auteur= utf8_encode($row["auteur"]);
				$Nom= utf8_encode($row["nom"]);
				$Prenom= utf8_encode($row["prenom"]);
				$DateSortie=utf8_encode($row["sortie"]);
				$DateRouteur=utf8_encode($row["retour"]);
				
				// on affiche les champs(colonne) de l'enregistrementligne) en cours
				echo  "<tr><td>$Titre</td><td>$Auteur</td><td>$Nom</td><td>$Prenom</td><td>$DateSortie</td><td>$DateRouteur</td> </tr>";
			}
			echo "</table>";
			mysqli_free_result($result); // on libére le résultat, sinon on ne pourra pas interroger à nouveau le serveur 
		}
		mysqli_close($link);
	?>
	<div>
	 <a href="index.php"> Retour  </a>
	 </div>
	</body>
</html>