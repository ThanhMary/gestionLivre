<!doctype html>
<html lang="fr">
      <HEAD>
		<meta charset="utf-8">
		<TITLE>Site gestion des livres   </TITLE>
		<link href="Monstyle.css" rel="stylesheet" type="text/css"> 

     </HEAD>
     <BODY>
			<H1> Gestion des livres   </H1>
				<BR>
				Site dynamique en PHP
				<BR>
			<?php
		 // on affecte à la variable $aujourdhui la date système
				$aujourdhui = date("d/m/Y");  
				$heure = date("H:i");
				$prenom="Thanh Nguyen";
				echo "Nous sommes le $aujourdhui il est $heure";
				echo $prenom;
			?>
			<BR><A href="formulaire2.html"> vers le formulaire</A> <BR>
			
			<BR><A href="affiche_livre_exemple.php">afficher les livres de la bibliothèque</A> <BR>
			<BR><A href="affiche_personne.php">afficher les personnes de la BD</A> <BR>
			<BR><A href="affiche_emprunt.php">afficher les emprunts complets (titre, nom des personnes)</A> <BR>
			<BR><A href="Ajouter_livre.html">Formulaire d'ajout de livre à la bibliothéque</A> <BR>
		
   </BODY>	

</HTML>