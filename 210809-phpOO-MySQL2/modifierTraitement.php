<?php
session_start();
    $connex = mysqli_connect("localhost","root","","db_personne");
    
    $id = $_POST['id'];
    $nom = isset($_POST['nom']) ? trim(strtoupper($_POST['nom'])) : ['saisie incorrect'];
    $prenom = isset($_POST['prenom']) ? ucfirst(trim($_POST['prenom'])) : ['saisie incorrect'];
    $age = isset($_POST['age']) ? $_POST['age'] : ['saisie incorrect'];
    $date = $_POST['date'];
    $mdp = isset($_POST['mdp']) ? md5($_POST['mdp']) : ['saisie incorrect'];
    // echo "id : ".$id."<br>";
    // echo "nom : ".$nom."<br>";
    // echo "prenom : ".$prenom."<br>";
    // echo "age : ".$age."<br>";
    $requete = "UPDATE eleves SET Nom='$nom',Prenom='$prenom',Age='$age',Dte='$date',MDP='$mdp' WHERE idEleve='$id'";
    $result = mysqli_query($connex, $requete);
    mysqli_close($connex);
    header('Location:consultation.php');
    ?>