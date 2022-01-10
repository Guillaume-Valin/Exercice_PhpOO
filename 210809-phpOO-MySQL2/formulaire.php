<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yomstyle.css">
    <title>Formulaire</title>
</head>
<body>
    <main>
    <?php echo "<p class='connect'> Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom']; ?>
        <h1>Formulaire à saisir</h1>
        <div class="flex">
            <div class="lienConsult"><a href="accueil.php">Retour à l'accueil</a></div>
            <div class="lienConsult"><a href="consultation.php">Consultation élèves</a></div>
            <div class="lienConsult"><a href="deconnexion.php">Déconnexion</a></div>
        </div>
        <form action="traitement.php" method="POST" id="formulaire" name="formulaire">
            <div class="flex2">
                <label for="nom">Nom :</label>
                <input type="text" placeholder="Votre nom" name="nom" id="nom" size="30" pattern="[Aa-Zz\ -']{2,20}">
            </div>
            <div class="flex2">
                <label for="prenom">Prénom : </label>
                <input type="text" placeholder="Votre prénom" name="prenom" id="prenom" size="30" pattern="[Aa-Zz\ -']{2,20}">
            </div>
            <div class="flex2">
                <label for="age">Age : </label>
                <input type="text" placeholder="Votre age" name="age" id="age" size="30">
            </div>
            <div class="flex2">
                <label for="date">Date : </label>
                <input type="text" placeholder="La date du jour" name="date" id="date" size="30">
            </div>
            <div class="flex2">
                <label for="mdp">Mot de passe : </label>
                <input type="password" placeholder="Mot de passe" name="mdp" id="mdp" size="30">
            </div>
            <div class="flex3">
                <input type="submit" value="Envoyer" id="envoi" class="bouton">
                <input type="reset" value="Reset" id="reset" class="bouton">
            </div>
        </form>
    </main>

</body>
</html>