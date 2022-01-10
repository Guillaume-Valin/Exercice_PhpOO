<?php

abstract class Employe{
    private $nom;
    private $prenom;
    private $age;
    private $date;

    public function __construct($nom,$prenom,$age,$date){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this ->age=$age;
        $this->date=$date;
    }
    public function get_Nom(){
        return $this->nom." ".$this->prenom;
    }
    public abstract function calculerSalaire();

    public function get_Info(){
        $info= "<h2> L'employé".$this->get_Nom()."</h2>";
        return $info;
    }
}
?>
