 <html>
	 <head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />	 
	 
	 </head>
	 <body>
			<?php
				require ("function.php");
			?>
			
			<?php
				require ("entete.html");
								
			?>
			
			<?php
			extract($_GET);
				if($choixtable == "")
				{
					Afficher_tableau_ligne("");
				}				
				else if($choixtable == "2")
				{
					Afficher_tableau($nb);		
				}
				else if($choixtable == "1")
				{
					Afficher_tableau_ligne($nb);
				}
			?>
			
			<!-- <?php
			require ("pied.html");
			?> -->
	 </body>
 </html>