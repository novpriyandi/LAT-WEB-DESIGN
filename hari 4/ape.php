<?php

require_once "index.php";

class Ape extends animal{
	public $yell;
	public function set_yell($yell){
		$this->yell = $yell;
	}
	public function get_yell(){
		return $this->yell;
	}
}

	$sungokong = new Ape;
	$sungokong->set_name("Kera sakti");
	echo "Namanya " .$sungokong->get_name(). "<br>";
	$sungokong->set_yell("Auoooo");
	echo "Bersuara dengan " . $sungokong->get_yell();

?>

