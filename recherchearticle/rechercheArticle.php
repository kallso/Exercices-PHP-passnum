 <html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>

	<body>
		<form name="formAddition" 
			action="rechercheArticle.php" 
			method="get">
			Prix Min : <input type="text" name="prixMin">
			Prix Max : <input type="text" name="prixMax">
			Catégorie : 	
		<?php		
				#require "header.html";
				require "function_bdd.php";
				
				#Etablir une connexion avec la BDD
				$bdd = connect();
				listecategorie($bdd);

				#Couper la connexion avec la BDD
				deconnect($bdd);
		?>					
			<input type="submit" value = "Rechercher">
		</form>
		
		<?php
			extract($_GET);
			if(!empty($prixMin) && !empty($prixMax)){
				
				#Etablir une connexion avec la BDD
				$bdd = connect();
				
				if($bdd != null)
				{
					#echo 'Connexion réussi';
					#chercherClients($bdd);
					#listeSociete($bdd);
					rechercheArticle($bdd, $prixMin, $prixMax , $categorie);
				}
				
				#Couper la connexion avec la BDD
				deconnect($bdd);
			}
		?>
	
	</body>
</html>