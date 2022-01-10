<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yomstyle.css">
    <title>Identification</title>
</head>
<body>
    <form action="traitementPassword.php" method="POST" name="formulaire" id="formulaire">
    <div class="flex2">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" size="30">
    </div>
    <div class="flex2">
        <label for="mdp">Mot de Passe : </label>
        <input type="password" name="mdp" id="mdp" size="30">
    </div>
    <div class="flex3">
        <input type="submit" value="Envoyez" class="bouton">
        <input type="reset" value="Annuler" class="bouton">
    </div>
    </form>
    
</body>
</html>