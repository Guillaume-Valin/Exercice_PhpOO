<?php

require_once("classTech.php");
require_once("classInterfaceRisk");

class TechnicienARisque extends Technicien implements Interface_ARisque
{
	private static $Prime = 100;
	


	function __construct($nom, $prenom, $age, $date, $unites)
	{
		parent::__construct($nom, $prenom, $age, $date, $unites);
	
	}

	 function get_Info() 
	{ 
		$info = parent::get_Info();
		$info .= "<h5> Ce Technicien est à Risque </h5>";
		return $info; 
	}

	function calculerSalaire()
	{
		$salaire = parent::calculerSalaire()+ self::$Prime;
		return $salaire;
	}



}
?>