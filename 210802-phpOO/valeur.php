<?php
class Valeur
{
protected $nom;
protected $prix;
function __construct($nom,$prix)
{ 
    $this->nom=$nom;
    $this->prix=$prix;
}
protected function get_info()
{ 
    $info="<h4>Le prix de $this->nom est de $this->prix $ </h4>";
    return $info;
}
function get_Nom(){ //faire un getteur pour obtenir le nom
    return $this->nom;
}

function set_Nom($nom){ // faire un setteur pour modifier le nom
    $this->nom=$nom;
}

function get_Prix(){ //faire un getteur pour obtenir le prix
    return $this->prix;
}

function set_Prix($nom){ // faire un setteur pour modifier le prix
    $this->prix=$prix;
}

} 

class Action extends Valeur
{
public $bourse;
function __construct($nom,$prix,$bourse="Paris")
{
parent::__construct($nom,$prix);
$this->bourse=$bourse;
}
public function get_info()
{
$info="<h3>Action $this->nom cotée à la bourse de $this->bourse </h3>";
$info.=parent::get_info();
return $info;
}
} 

class Emprunt extends Valeur
{
public $taux; 
public $fin;

function __construct($nom,$prix,$taux,$fin)
{
parent::__construct($nom,$prix);
$this->taux=$taux;
$this->fin=mktime(24,0,0,12,31,$fin);
}
public function get_info()
{
$reste=round( ($this->fin - time() ) /86400);
$info="<h3>Emprunt $this->nom au taux de $this->taux % </h3>";
$info.=parent::get_info();
$info.="<h4>Echéance : dans $reste jours</h4>";
return $info;
}
}

class C1 extends Action
{
   public $pays;
function __construct($nom,$prix,$bourse, $pays)
{
parent::__construct($nom,$prix,$bourse);
$this->pays=$pays;
}
public function get_info()
{
$info=parent::get_info();
$info.= "<h5> Le pays est : ".$this->pays;
return $info;
}
}
?>