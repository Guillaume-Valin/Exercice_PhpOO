<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yomstyle.css">
    <title>Index consulation et formulaire</title>
</head>
<body>
<?php echo "<p class='connect'> Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom']; ?>
    <h1>Veuillez sélectionner une option</h1>
    <div class="flex">
    <div class="lienConsult"><a href="consultation.php">Consultation</a></div>

    <div class="lienConsult"><a href="formulaire.php">Insérer un élève</a></div>
    <div class="lienConsult"><a href="deconnexion.php">Déconnexion</a></div>
    </div>
    
</body>
</html>