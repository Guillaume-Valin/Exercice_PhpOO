<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yomstyle.css">
    <title>Exo PHP MySQL</title>
</head>
<body>
    

<?php
// Vérification de la connexion

$connex = mysqli_connect("localhost","root","","db_personne");

    if(!$connex){ //vérifie si connex existe
        echo "<script type=text/javascript>";
        echo "alert('Connexion impossible à la base de donnée')</script>";//si $connex n'existe pas
    } else {
        echo "<script type=text/javascript>";
        echo "alert('Connexion réussi à la base de donnée')</script>"; //si $connex existe

        $requete = "SELECT * FROM eleves"; //appel la table élève dans mysql
        $resultat = mysqli_query($connex,$requete); 
        //$nb = mysqli_num_rows($resultat); //regarde le nombre de ligne existante dans la table mysql

        //echo "Il y a ".$nb." eleves";
        //echo "<br> Il y a $nb élèves"; // autre méthode d'affichage
        //printf("<br> Il y a %d élèves",$nb); //3eme méthode d'affichage

        //**********************En appellant le nom de chaque colonne de la table *********************************** */

        // echo "<h1 align=center> Listes des Elèves </h1> <table align=center width=50% <tr><th>Nom</th><th>Prénom</th><th>Age</th>";

        // while($donnees = mysqli_fetch_assoc($resultat)){
        //     echo "<tr><td>".$donnees['Nom']."</td>";
        //     echo "<td>".$donnees['Prenom']."</td>";
        //     echo "<td>".$donnees['Age']." ans</td></tr>";
        // }

        
        // **************************En appellant l'index du tableau ****************************
        echo "<h1 align=center> Listes des Elèves </h1> <table align=center width=50% <tr><th>N°</th><th>Nom</th><th>Prénom</th><th>Age</th>";
            $i=1;
        while($donnees = mysqli_fetch_array($resultat)){
            echo"<tr><td>".$i."</td>";
            echo "<td>".$donnees[1]."</td>";
            echo "<td>".$donnees[2]."</td>";
            echo "<td>".$donnees[3]." ans</td></tr>";
            $i += 1;
        }
        
        
        $Nom = "BRUNDU";
        $Prenom = "Sem";
        $Age = 76;
        $requete = "INSERT INTO eleves (Nom, Prenom, Age) VALUES ('$Nom','$Prenom', '$Age')";
        $result = mysqli_query($connex, $requete);

        if (!$result){
            echo "Insertion impossible";
        } else {
            echo "Insertion réussie";
        }


mysqli_close($connex);
    }


?>
</body>
</html>