<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des notes</title>
</head>
<body>
    <h1>Le résultat de l'étudiant</h1>

    <?php
    require_once("classEtudiant.php");
    $etudiant1 = new Etudiant ("Guigui",array(5,10,15,12,13,18,8,9,10,12));
    echo $etudiant1->affiche();
    $etudiant2 = new Etudiant ("Alexandre",array(7,8,9,5,6));
    echo $etudiant2->affiche();

    echo "<h2>Le nombre d'étudiant est de :".Etudiant::get_nombreEtudiant()."</h2>";

    require_once("classLicence.php");
    $tabObjet = array($etudiant1,$etudiant2);
    $licence1 = new Licence ("greta",2021,"Hilala",$tabObjet);
    echo $licence1->affiche();

    ?>
    
</body>
</html>