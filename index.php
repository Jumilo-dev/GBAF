
<?php
$title ="Connexion";
include 'entete.php';
?>
<body>
<!--formulaire de connexion a afficher sur la page d'accueil -->
<form action="index.php" method="post">
<label for="username">Nom d'utilisateur</label>
<input type="text" name="username" required>
<label for="password">mot de passe</label>
<input type="password" name="password" required>
<button type="submit">Se Connecter</button>
<a href ="newpassword.php">Mot de passe oublié </a>
</form>
<button  href="inscription.php"> Première connexion</button>

<a href ="inscription.php">inscription </a>
<a href ="test_base.php">Test </a>
</body>
<?php 


