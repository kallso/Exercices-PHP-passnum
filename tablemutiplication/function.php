<?php
			#les fonctions à utiliser
			
			#Impime la première ligne du tableau
			function premiere_ligne()
			{
				echo "<tr>
					  <td> x </td>";
				$i=0;
				while($i<10)
				{
					echo" <td> $i </td>";
					$i++;
				}
				echo"</tr>";
			}
			
			#Impime les lignes suivantes du tableau
			function ligne_tableau($ligne)     
			{
				if ($ligne == NULL )
				{
					$ligne = 0;
				}
				else if (is_numeric($ligne))
				{
					echo "<tr>";
					echo "<td> x $ligne </td>";
					$i=0;
					while($i<10)
					{	$k = $ligne*$i;
						echo" <td> $k </td>";
						$i++;
					}
					echo "</tr>";
				}
			}
			
			#Imprime le tableau jusqu'à "nbligne" lignes du tableau 
			function tableau_entier($nb_ligne)
			{
				for ($ligne = 0; $ligne <= $nb_ligne; $ligne++)
				{
					ligne_tableau($ligne);
				}
			}
						
			#Affiche le tableau de multiplication pour "nb_ligne"
			function Afficher_tableau($nb_ligne)
			{
				if ($nb_ligne < 0)
				{
					echo '<div style="text-align : center;">Veuillez entrer un nombre entier !</div>';
				}
				else
				{
				echo '<table border="1" width="50%"	style="text-align : center;">';
				premiere_ligne();
				tableau_entier($nb_ligne);
				echo "</table>";
				}
			}
			
			#Afficher le tableau pour une seule ligne
			function Afficher_tableau_ligne($ligne)
			{
				if ($ligne < 0)
				{
					echo '<div style="text-align : center;">Veuillez entrer un nombre entier !</div>';
				}
				else
				{
				echo '<table border="1" width="50%"	style="text-align : center;">';
				premiere_ligne();
				ligne_tableau($ligne);
				echo "</table>";
				}
			}
?>