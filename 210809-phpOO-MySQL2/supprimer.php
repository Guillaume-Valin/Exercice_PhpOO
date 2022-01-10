<!DOCTYPE html>
<?php
session_start();
// echo "<script>
// if (!confirm('Voulez-vous vraiment supprimer')){
//     document.location = 'consultation.php';
// }
// </script>";
// echo "suite...";

$connex = mysqli_connect("localhost","root","","db_personne");
$id = $_GET['id'];
// echo "id : ".$_GET['id'];

$requete = "DELETE FROM eleves WHERE idEleve='$id'";
$result = mysqli_query($connex,$requete); 
mysqli_close($connex);
header('Location:consultation.php');
?>