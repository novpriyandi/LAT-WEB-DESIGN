<?php

require_once "index.php";

class Frog extends animal{
	public $jump;
	public function set_jump($jump){
		$this->jump = $jump;
	}
	public function get_jump(){
		return $this->jump;
	}
}

	$kodok = new Frog;
	$kodok->set_name("buduk");
	echo "Namanya " .$kodok->get_name(). "<br>";
	$kodok->set_jump("hop hop");
	echo "Lompatannya " . $kodok->get_jump();

?>

