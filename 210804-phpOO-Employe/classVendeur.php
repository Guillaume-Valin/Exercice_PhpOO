<?php
require_once("classCommercial.php");

class Vendeur extends Commercial{
    private static $pourcent_Vendeur=0.2;
    private static $bonus_Vendeur=100;

    public function __construct($nom,$prenom,$age,$date,$chiffreAffaire){
        parent::__construct($nom,$prenom,$age,$date,$chiffreAffaire);
    }
    public function get_Info(){
        echo "<h2> L'employé ".$this->get_Nom()." reçoit le salaire d'un montant de : ".$this->calculerSalaire()."euros </h2>";
    }
    public function calculerSalaire(){
        $salaire = $this->get_chiffreAffaire()*self::$pourcent_Vendeur+self::$bonus_Vendeur;
        return $salaire;
    }
    
}
?>
