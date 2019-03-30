 <html>
	 <head>
		<title> Gérer mes clients</title>
	 </head>
	 <body>
		<?php
		#require "require.html";
		require "function_bdd.php";
		
		
		
		#Etablir une connexion avec la BDD
		$bdd = connect();
		
		if($bdd != null)
		{
			echo 'Connexion réussi';
			listesociete($bdd);
		}
		
		#Couper la connexion avec la BDD
		deconnect($bdd);
		?>
	 </body>
 </html>