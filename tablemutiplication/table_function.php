 <html>
	 <head>
	 
	 
	 </head>
	 <body>			
		<?php
			extract($_GET);
			if($choisir == "OUI")
			{	
				?>
				<meta http-equiv="refresh" content="0; URL=table.php?nb=&choixtable=">	
				<?php
			}
			else
			{
				echo '<a href="choisirTableMultiplication.html">
				Suivre le lien pour faire un autre choix</a>';
			}
		?>
	 </body>
 </html>