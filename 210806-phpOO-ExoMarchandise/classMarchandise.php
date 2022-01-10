<?php
abstract class Marchandise{
    private $encombrement;
    private $distance;
    private $cargaison = array();

    public function __construct($poids,$volume,$cargaison){
        $this->poids=$poids;
        $this->volume=$volume;
        $this->cargaison=$cargaison;
    }

    public function get_encombrement(){
        return $this->poids;
    }

    public function get_Distance(){
        return $this->volume;
    }
    public function get_Cargaison(){
        return $this->cargaison;
    }
}
?>