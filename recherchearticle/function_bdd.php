<?php

	define('SERVEUR','mysql:host=localhost;dbname=plumier;charset=utf8');
	define('BASE','plumier');
	define('USER','root');
	define('MDP','');

	function connect()
	{
		try{
			$bdd = new PDO(SERVEUR, USER, MDP);
		}

		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
		
		return $bdd;
	}
	
	function deconnect ($bdd)
	{
		$bdd=null;
	}
	
	function listesociete($bdd)
	{
		try{
			$reponse = $bdd ->query('SELECT Societe FROM Clients');
			echo '<form><SELECT name="nom" size="1">';
				while($donnees = $reponse->fetch()) {
					echo '<OPTION>'.$donnees['Societe'];
				}
			echo '</form>';
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
	}
	
	function listecategorie($bdd)
	{
		try{
			$reponse = $bdd ->query('SELECT DISTINCT Nom FROM article');
			echo '<form><SELECT name="categorie" size="1">';
				while($donnees = $reponse->fetch()) {
					echo '<OPTION>'.$donnees['Nom'];
				}
			echo '</form>';
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}
	}
	
	function rechercheArticle($bdd, $prixMin, $prixMax, $categorie)
	{
		try{
			$reponse = $bdd ->prepare('SELECT * FROM article WHERE Prix>? AND Prix<? AND Nom=?');
			$reponse->bindParam(1,$prixMin, PDO::PARAM_STR,5);
			$reponse->bindParam(2,$prixMax, PDO::PARAM_STR,5);
			$reponse->bindParam(3,$categorie, PDO::PARAM_STR,30);
			$reponse->execute();
			
			$donnees = $reponse->fetch();
			echo '<table>';
			echo '<tr><th>'.$donnees['Nom'].'</th><th>'.$donnees['Categorie'].'</th><th>'.$donnees['Prix'].'</th></tr>';
			while($donnees = $reponse->fetch()) {
					echo '<tr><td>'.$donnees['Nom'].'</td><td>'.$donnees['Categorie'].'</td><td>'.$donnees['Prix'].'</td></tr>';
				}
			echo '</table>';
		}
		catch(Exception $e)
		{
			die('Erreur : ' . $e->getMessage().'<br/>');
		}	
	}
	
	function testconnexion($bdd)
	{
		$bdd=connect ();

				if($bdd !=null) {
					echo 'Connexion réussi';

					rechercheArticle ($bdd,$prixMin,$prixMax,$Categorie);
				}	
	}

?>