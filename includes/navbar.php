<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php if(isset($_SESSION["utilisateur"])):?>
        <li><a href ="principal.php">Accueil</a></li>
    
    <?php else: ?>
        <li><a href ="index.php">Accueil</a></li>
    <?php endif;?>
    <li><a href ="inscription.php">Inscription</a></li>
    <li><a ref="Déconnexion.php">Déconnexion</a></li>
    </ul>
</body>
</html>