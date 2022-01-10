<?php
class Manut extends Employe{
    private static $heure = 15;
    private $nbHeure;

    public function __construct($nom,$prenom,$age,$date,$nbHeure){
        parent::__construct($nom,$prenom,$age,$date);
        $this->nbHeure=$nbHeure;
    }

    public function get_Info(){
        echo "<h2> L'employé ".$this->get_Nom()." reçois le montant de : ".$this->calculerSalaire()." euros </h2>";
    }

    public function calculerSalaire(){
        $salaire = $this->nbHeure*self::$heure;
        return $salaire;
    }
}
?>