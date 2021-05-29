
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;port=3307;dbname=gbaf;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT question FROM questions');

while ($donnees = $reponse->fetch())
{
	echo $donnees['question'] . '<br />';
}

$reponse->closeCursor();

?>
