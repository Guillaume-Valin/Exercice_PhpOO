<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage orienté objet</title>
</head>
<body>
    <?php
    require_once("visiteur.php");
    $visiteur = new Visiteur("Valin", "gelge"); //défini les paramètre à récupérer
    echo $visiteur->get_derniereVisite(); // affiche la date de la dernière connection
    echo "<br> Bonjour Mr : ".$visiteur->get_nom(); // Affiche le nom du visiteur
    $visiteur->set_nom("Hilala"); // Change le nom du visiteur
    echo "<br> Rebonjour Mr : ".$visiteur->get_nom(); // Affiche le nom modifié
    $visiteur2 = new Visiteur("Bello", "ggg");
    echo "<br> Vous êtes le 2eme visiteur : ".$visiteur2->get_nom();
    $visiteur3 = new Visiteur("Sarkissian", "ooo");
    echo "<br> Vous êtes le 3eme visiteur : ".$visiteur3->get_nom();
    echo "<br> Il y a : ".Visiteur::get_nb()." visiteurs";
    ?>
</body>
</html>