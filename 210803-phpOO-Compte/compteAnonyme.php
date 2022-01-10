<?php
require_once("valeurCompte.php");

class CompteAnonyme extends Compte{
    function __construct($compte,$solde=0){
        parent::__construct($compte,"",$solde);
    }
    function get_Affiche(){
        $info = "<br><h2>Compte anonyme n° $this->compte , solde = $this->solde euros</h2>";
        return $info;
    }
}

?>