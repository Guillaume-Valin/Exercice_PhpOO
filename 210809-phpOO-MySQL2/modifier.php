<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yomstyle.css">
    <title>Modifier</title>
</head>
<body>
    <?php
    $connex = mysqli_connect("localhost","root","","db_personne");
    $requete = "SELECT * FROM eleves WHERE idEleve=".$_GET['id'];
    $result = mysqli_query($connex,$requete);
    if ($result)
    { 
        $donnees = mysqli_fetch_array($result);
        // echo "id = ".$donnees[0]."<br>";
        // echo "nom = ".$donnees[1]."<br>";
        // echo "prénom = ".$donnees[2]."<br>";
        // echo "Age = ".$donnees[3]."<br>";
    }
    else 
    {
        echo "Pas de données <br>";
    }
    
    mysqli_close($connex);
    ?>
    <?php echo "<p class='connect'> Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom']; ?>
<main>
        <h1>Formulaire à modifier</h1>
        <div class="flex">
            <div class="lienConsult"><a href="index.php">Retour à l'index</a></div>
            <div class="lienConsult"><a href="consultation.php">Consultation élèves</a></div>
        </div>
        <form action="modifierTraitement.php" method="POST" id="formulaire" name="formulaire" value=<?= $donnees[0] ?>>
            <div class="flex2">
                <label for="nom">Nom :</label>
                <input type="text" placeholder="Votre nom" name="nom" id="nom" size="30" pattern="[Aa-Zz\ -']{2,20}" value=<?= $donnees[1] ?>>
            </div>
            <div class="flex2">
                <label for="prenom">Prénom : </label>
                <input type="text" placeholder="Votre prénom" name="prenom" id="prenom" size="30" pattern="[Aa-Zz\ -']{2,20}" value=<?= $donnees[2] ?>>
            </div>
            <div class="flex2">
                <label for="age">Age : </label>
                <input type="text" placeholder="Votra age" name="age" id="age" size="30" value=<?= $donnees[3] ?>>
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
            <input type="hidden" name="id" value=<?= $donnees[0] ?>>
        </form>
    </main>
    
    
</body>
</html>