
<?php
$title ="Inscription";
include 'entete.php';

?>

<body>

<!--formulaire de création de compte -->
<form action="inscription.php" method="post">
<label for="name">Nom </label>
<input type="text" name="name" required>
<label for="firstname">Prénom </label>
<input type="text" name="firstname" required>
<label for="username">Nom d'utilisateur</label>
<input type="text" name="username" required>
<label for="password">Choisissez un mot de passe</label>
<input type="password" name="password" required>
<label for="passwordconfirm">Confirmer le mot de passe</label>
<input type="password" name="passwordconfirm" required>
<label for="question">Question secrète utilisée pour réinitialiser votre mot de passe</label>
<select name="question">
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
<option value=""></option>
</select>
<label for="reponse">Votre réponse:</label>
<input type="text" name="reponse" required>

<button type="submit">Valider</button>


</form>
<?php


$nom= $_POST["name"];
$prenom= $_POST["firstname"];
$username= $_POST["username"];
$password= $_POST["firstnamepasswordconfirm"];
$question= $_POST["question"];
$reponse= $_POST["reponse"];

try
{
	$bdd = new PDO('mysql:host=localhost;port=3307;dbname=gbaf;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$enregistrement =$bdd->prepare('INSERT INTO users(nom, prenom, username,password,question,reponse) VALUES [?,?,?,?,?,?]);

header("Location:index.php");
?>
</body>
