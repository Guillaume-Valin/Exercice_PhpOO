<?php
require_once("classCommercial.php");

class Representant extends Commercial{
    private static $pourcent_Representant=0.2;
    private static $bonus_Representant=150;

    public function __construct($nom,$prenom,$age,$date,$chiffreAffaire){
        parent::__construct($nom,$prenom,$age,$date,$chiffreAffaire);
    }
    public function get_Info(){
        echo "<h2> L'employé ".$this->get_Nom()." reçoit le salaire d'un montant de : ".$this->calculerSalaire()."euros </h2>";
    }
    public function calculerSalaire(){
        $salaire = $this->get_ChiffreAffaire()*self::$pourcent_Representant+self::$bonus_Representant;
        return $salaire;
    }
    
}
?>