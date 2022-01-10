<?php

class Compte {
    protected $compte;
    protected $nom;
    protected $solde;

    public function __construct($compte, $nom, $solde=0){
        $this->compte=$compte;
        $this->nom=$nom;
        $this->solde=$solde;
    }
    function get_Compte(){
        return $this->compte;
    }
    function get_Nom(){
        return $this->nom;
    }
    function get_Solde(){
        return $this->solde;
    }
    public function get_Affiche(){
        $info="<h2>Compte n° $this->compte , du propriétaire M. $this->nom , a un solde de : $this->solde euros </h2>";
        return $info;
    }
    public function depot($depot){
        $this->solde += $depot;
    }
    public function retrait ($retrait){
        $this->solde -= $retrait;
    }
}





?>