<?php
class Visiteur {
    private $nom;
    private $motdepasse;
    public $derniereVisite;
    private static $nb=0;

    function __construct($nom, $motdepasse){ //fonction construction qui permet de définir les paramètres
        $this->nom = $nom; //paramètre du nom
        $this->motdepasse = $motdepasse; //paramètre du mot de passe
        $this->derniereVisite = time(); // paramètre de date avec attribut time
        self::$nb ++;
    }
    function get_derniereVisite(){
        return (date("M d Y", $this->derniereVisite));
    }
    function set_nom($nom){
        $this->nom = $nom;
    }
    function get_nom(){
        return $this->nom;
    }
    static function get_nb(){
        return self::$nb;
    }
}
?>