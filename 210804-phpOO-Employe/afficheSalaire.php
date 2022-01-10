<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage du salaire</title>
</head>
<body>
    <h1>Les informations sur le salaire</h1>
    <?php

    require_once("classVendeur.php");
    $salaire1 = new Vendeur("Valin","Guigui",40,2021,10000);
    echo $salaire1->get_Info();

    require_once("classRepresentant.php");
    $salaire2 = new Representant("Hilala","Sami",22,2021,5000);
    echo $salaire2->get_Info();

    require_once("classTech.php");
    $salaire3 = new Technicien("Bello", "Alexandre", 12,2021,30000);
    echo $salaire3->get_Info();

    require_once("classManut.php");
    $salaire4 = new Manut("Abbaci","Yanis",22,2021,200);
    echo $salaire4->get_Info();
    ?>
    
</body>
</html>