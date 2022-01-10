<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des valeurs du compte</title>
</head>
<body>
    <h1>Les informations sur le compte</h1>
    <?php

    require_once("valeurCompte.php");
    
    $affiche1 = new Compte(1234, "Durand", 565);
    echo "<br>" .$affiche1->get_Affiche();
    $affiche1 -> depot(200);
    echo "<br>" .$affiche1->get_Affiche();
    $affiche1 -> retrait(500);
    echo "<br>" .$affiche1->get_Affiche();

    require_once("compteAnonyme.php");

    $affiche2 = new CompteAnonyme(3456,550);
    echo "<br>".$affiche2->get_Affiche();

    $affiche2 -> depot(200);
    echo "<br>" .$affiche2->get_Affiche();
    $affiche2 -> retrait(500);
    echo "<br>" .$affiche2->get_Affiche();

    require_once("compteRemunere.php");
    $compte1 = new CompteRemunere(3456,"Guigui",1000,2021,5);
    echo "<br>".$compte1->jourPasses();
    
    ?>
</body>
</html>