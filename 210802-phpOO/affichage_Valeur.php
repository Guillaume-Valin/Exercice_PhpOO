<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage orienté objet Valeur</title>
</head>
<body>
    <?php
    require_once("valeur.php");
    // $valeur1 = new Valeur("Microsoft", 150.5);
    // echo $valeur1->get_info();

    $action1 = new Action("Microsoft", 150.5, "Tokyo"); // déclaration de l'objet action
    echo $action1->get_info();

    $emprunt1 = new Emprunt("Apple", 250.8, 5.5, 2021); //déclaration de l'objet emprunt
    echo "<br>".$emprunt1->get_info();
    

    $objet1 = new C1("Amazon", 150, 5.5, "Congo");
    echo "<br>".$objet1->get_info();

    $tab_Valeur = get_class_methods($emprunt1); //chercher toutes les métodes de la classe emprunt sous forme de tableau
    echo "<br> Les méthodes de la classe Emprunt sont : <br>";
    
    print_r ($tab_Valeur);

    $tab_Emprunt = get_object_vars($emprunt1); 
    echo "<br> Les attributs de la classe Emprunt sont : <br>";
    
    foreach ($tab_Emprunt as $key => $value){
        echo "$key : $value <br>";
    }
    // function affiche_vars($objet)
    // {
    //     echo "<br> Variables Classe : ".get_class($objet);
    //     foreach(get_object_vars($objet) as $index=>$var)
    //     {
    //         echo "<br>$index  $var";
    //     }
    // }

    ?>
</body>
</html>