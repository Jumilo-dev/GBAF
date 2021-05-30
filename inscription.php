
<?php
$title ="Inscription";
include 'entete.php';

?>

<body>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;port=3307;dbname=gbaf;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>

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
<?php
$choice_question=$bdd->query('SELECT question FROM questions');
while ($choice = $choice_question->fetch())
{
    ?>
    <option value="<?php echo $choice ['question'];?>"><?php echo $choice ['question'];?></option>
<?php
}
?>
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
?>
</body>
