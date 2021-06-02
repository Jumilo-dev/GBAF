
<?php
//*Vérifier que le formulaire est envoyé, et que les champs sont completés
if(!empty($_POST)){

	if(isset($_POST["name"],$_POST["firstname"],$_POST["username"],$_POST["password"],$_POST["question"],$_POST["reponse"])
		&& !empty($_POST["name"]) && !empty ($_POST["firstname"])&& !empty ($_POST["username"])&& !empty ($_POST["password"])&& !empty ($_POST["question"])&& !empty ($_POST["reponse"])
	){ //*Recupérer et protéger les données, faire les contrôles
        
        $name= strip_tags($_POST["name"]);
        $firstname= strip_tags($_POST["firstname"]);
        $username= strip_tags($_POST["username"]);
        //*hasher le mot de passe (revoir l'algo utilisé)
		$password= password_hash($_POST["password"],PASSWORD_DEFAULT);
        //*trouver solution pour envoyer l'id_question au lieu de la question
        $question= strip_tags($_POST["question"]);
        $reponse= strip_tags($_POST["reponse"]);
    
    }
    
}    	
	//*Connexion à la base	
    include 'includes/connect_bdd.php'; 

//*Requete
$sql= "INSERT INTO users(``,`nom`,`prenom`,`username`,`password`,`question`,`reponse`) VALUES ('',:nom, :prenom, :username, '$password',:question,:reponse)";
//*Requete preparée
$query = $bd->prepare($sql);

$query->bindValue(":nom", $name, PDO::PARAM_STR);
$query->bindValue(":prenom", $firstname, PDO::PARAM_STR);
$query->bindValue(":username", $username, PDO::PARAM_STR);
$query->bindValue(":question", $question, PDO::PARAM_STR);
$query->bindValue(":reponse", $reponse, PDO::PARAM_STR);

$query->execute();
//*message d'erreur si le formulaire est incomplet (à compléter plus tard pour indiquer quel champ est incomplet)
/*}else{
    die("Le formulaire est incomplet")
*/

$title ="Inscription";
include 'entete.php';

?>




<body>
<h1>Inscription</h1>

<!--formulaire de création de compte -->
<form  method="post">
<div>
<label for="name">Nom </label>
<input type="text" name="name" required>
</div>
<div>
<label for="firstname">Prénom </label>
<input type="text" name="firstname" required>
</div>
<div>
<label for="username">Nom d'utilisateur</label>
<input type="text" name="username" required>
</div>
<div>
<label for="password">Choisissez un mot de passe</label>
<input type="password" name="password" required>
</div>
<div>
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
</div>
<div>
<label for="reponse">Votre réponse:</label>
<input type="text" name="reponse" required>
</div>
<div>
<button type="submit">Valider</button>
</div>


</form>
</body>
