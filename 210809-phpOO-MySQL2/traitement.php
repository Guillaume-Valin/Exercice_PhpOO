<?php
session_start();
    $connex = mysqli_connect("localhost","root","","db_personne");
    

    $nom = isset($_POST['nom']) ? trim(strtoupper($_POST['nom'])) : ['saisie incorrect'];
    $prenom = isset($_POST['prenom']) ? ucfirst(trim($_POST['prenom'])) : ['saisie incorrect'];
    $age = isset($_POST['age']) ? $_POST['age'] : ['saisie incorrect'];
    $date = $_POST['date'];
    $mdp = md5($_POST['mdp']);


    $requete = "INSERT INTO eleves (Nom, Prenom, Age, Dte, MDP) VALUE ('$nom','$prenom','$age','$date','$mdp')";
    $result = mysqli_query ($connex, $requete);
    if ($result) { 
        // Si la requête est effectuée on met la variable $_SESSION['requete_reussie'] à true
        $_SESSION['requete_reussie'] = true;
      } else {
        $_SESSION['requete_reussie'] = false;
      }
    mysqli_close($connex);
    header('Location:consultation.php');
    ?>