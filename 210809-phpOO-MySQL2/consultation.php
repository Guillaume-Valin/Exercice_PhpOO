<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yomstyle.css">
    <title>Consultation liste des élèves</title>
</head>
<body>
<?php echo "<p class='connect'> Bienvenue ".$_SESSION['prenom']." ".$_SESSION['nom']; ?>
    <h1>La liste des élèves</h1>
    <div class="flex">
        <div class="lienConsult"><a href="accueil.php">Retour à l'accueil</a></div>
        <div class="lienConsult"><a href="formulaire.php">Retour insertion</a></div>
        <div class="lienConsult"><a href="deconnexion.php">Déconnexion</a></div>
    </div>
    <?php
    $connex = mysqli_connect("localhost","root","","db_personne");
    $requete = "SELECT * FROM eleves";
    $result = mysqli_query($connex,$requete);
    if($_SESSION['requete_reussie'] == true){
        echo "<script> alert ('Elève ajouté') </script>";
    }

    echo "<table>";
        echo"<tr>";
        echo "<th>idEleve</th>";
            echo"<th>Nom</th>";
            echo"<th>Prénom</th>";
            echo"<th>Age</th>";
            echo"<th>Date</th>";
            echo"<th>Mot de passe</th>";
            echo "<th>Modifier</th>";
            echo "<th>Supprimer</th>";
            echo "</tr>";
        echo "<tr>";
            while($donnees = mysqli_fetch_array($result)){
            echo "<td>".$donnees[0]."</td>";
            echo "<td>".$donnees[1]."</td>";
            echo "<td>".$donnees[2]."</td>";
            echo "<td>".$donnees[3]."</td>";
            echo "<td>".$donnees[4]."</td>";
            echo "<td>".$donnees[5]."</td>";
            echo "<td> <a href='modifier.php?id=".$donnees[0]."'><img src='modifier-le-fichier.svg' class='image'></a></td> ";
            echo "<td> <a href='supprimer.php?id=".$donnees[0]."'><img src='supprimer.svg' class='image'></a></td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($connex);
    ?>
    
</body>
</html>