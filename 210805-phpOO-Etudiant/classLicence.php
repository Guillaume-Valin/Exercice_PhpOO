<?php

class Licence{
    private $nom;
    private $annee;
    private $responsable;
    private $listeEtudiant = array();

    function __construct($nom,$annee,$responsable,$listeEtudiant){
        $this->nom = $nom;
        $this->annee = $annee;
        $this->responsable = $responsable;
        $this->listeEtudiant = $listeEtudiant;
    }

    public function get_Responsable(){
        return $this->responsable;
    }
    public function get_Nom(){
        return $this->nom;
    }
    public function get_Annee(){
        return $this->annee;
    }

    public function affiche(){
        $info = "<h2> La licence ".$this->get_Nom()." de l'année ".$this->get_Annee()." avec le responsable ".$this->get_Responsable()
        ."</h2>";
        $info .= "<h3> Liste des étudiants : ";
        $etudiants = (object)$this->listeEtudiant; //ou directement foreach($this->listeEtudiant as $value)
        foreach($etudiants as $value){
            $info .= $value->affiche();
        }
        return $info;
    }
}
?>