<?php
session_start();
$connex = mysqli_connect("localhost","root","","db_personne");

$nom = isset($_POST['nom']) ? trim(strtoupper($_POST['nom'])) : ['saisie incorrect'];
$mdp = md5($_POST['mdp']);

// echo "nom : ".$nom."<br>";
// echo  "password : ".$mdp."<br>";

$requete = "SELECT * FROM eleves WHERE nom='$nom' AND MDP='$mdp'";
$result = mysqli_query($connex,$requete);
$donnees = mysqli_fetch_array($result);

if (($nom == $donnees[1])&&($mdp == $donnees[5])){
    header('Location:accueil.php');
} else{
    echo "Le nom ou mot de passe est invalide";
}
session_start();
$_SESSION['nom'] = $donnees[1];
$_SESSION['prenom'] = $donnees[2];
$_SESSION['age'] = $donnees[3];
$_SESSION['date'] = $donnees[4];
mysqli_close($connex);

?>