<?php
class Technicien extends Employe{
    private static $Facteur_Unite=5.0;
    private $unites;

    public function __construct($nom,$prenom,$age,$date,$unites){
        parent::__construct($nom,$prenom,$age,$date);
        $this->unites=$unites;
    }
    public function get_Info(){
        echo "<h2> L'employé ".$this->get_Nom()." reçoit le salaire d'un montant de : ".$this->calculerSalaire()." euros </h2>";
    }
    public function get_Unites(){
        return $this->unites;
    }
    public function calculerSalaire(){
        $salaire = $this->get_Unites()*self::$Facteur_Unite;
        return $salaire;
    }
}
?>