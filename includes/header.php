<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)){echo $title;} else {echo 'GBAF';} ?></title>
    
</head>
<body>
<p> Le header doit afficher le logo GBAF en haut à gauche</br>
    En haut à droite le nom  et prénom de la personne connectée recupéree dans la base de données</br>
    Ces noms sont un lien vers la page parametre du compte</br>
    un lien de déconnexion doit être présent sur ses noms</br>
    si l'utilisateur n'est pas connecté afficher "Bienvenue" à la place.</br>
    <p>
</body>
</html>