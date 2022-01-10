<?php
class Etudiant{
    private $nom;
    private $notes=array();
    private $nombre;
    private static $nbEtudiant =0;

    function __construct($nom,$notes){

    $this->nom=$nom;
    $this->notes=$notes;
    self::$nbEtudiant++;
    $this->numero=self::$nbEtudiant;

}
    public function moyenne(){
        $somme=0;
        foreach($this->notes as $value){
            $somme += $value;
        }       
        return $somme/count($this->notes);
    }

    public function recu(){
        return $this->moyenne()>=10;
    }

    public function affiche(){
    $recu = $this->recu() ? " reçu " : " non reçu ";
    $info = "<h2> L'étudiant ".$this->get_Nom()." numero : ".$this->get_Numero()." a obtenu la moyenne de : ".$this->moyenne()
            ." et il est ".$recu.". Ses notes : </h2><ul>";
    foreach ($this->notes as $value){
        $info .= "<li> ".$value. " sur 20 </li>";
    }
    $info .= "</ul>";
    return $info;

    }
    public static function get_nombreEtudiant(){
        return self::$nbEtudiant;
    }

    public function get_Numero(){
        return $this->numero;
    }

    public function get_Nom(){
        return $this->nom;
    }
    public function get_Notes(){
        return $this->notes;
    }



}
?>