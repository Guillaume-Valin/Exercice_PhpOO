<?php
require_once("classEmploye.php");
abstract class Commercial extends Employe{
    private $chiffreAffaire;

    function __construct($nom,$prenom,$age,$date,$chiffreAffaire){
        parent::__construct($nom,$prenom,$age,$date);
        $this->chiffreAffaire=$chiffreAffaire;
    }
    public function get_ChiffreAffaire(){
        return $this->chiffreAffaire;
    }
}
?>