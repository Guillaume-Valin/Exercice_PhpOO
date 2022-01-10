<?php

require_once("valeurCompte.php");

class CompteRemunere extends Compte{
    private $jourPasses;
    private $taux;
    function __construct($compte,$nom,$taux,$solde=0,$joursPasses){
        parent::__construct($compte,$nom,$solde);
        $this->joursPasses=$joursPasses;
        $this->taux=$taux;
    }
    function get_solde(){
        $this->recalculeSolde();
        return parent::get_solde();
    }

    function passJours($jour){
        $this->jourPasses += $jour;
    }

    function recalculeSolde(){
        $nouveauSolde = parent::get_solde();
        $nouveauSolde *=(1+($this->taux * $this->jourPasses)/36500);
        $this->set_solde($nouveauSolde);
        $this->jourPasses =0;
    }

    function depot($montant){
        $this->recalculeSolde();
        parent::depot($montant);
    }
    function retrait($montant){
        $this->recalculeSolde();
        parent::retrait($montant);
    }

    

}
?>