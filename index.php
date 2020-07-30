<?php

class animal {
	public $name;
	public $leg;
	public $cold_blooded;
	public $yell;
	public $jump;
}

public function set_name($name){
	$this->name = $name;
}

public function get_name($name){
	return $this->name;
}

public function set_leg($leg){
	$this->leg = $leg;
}

public function get_leg($leg){
	return $this->leg;
}

public function set_cold_blooded($cold_blooded){
	$this->cold_blooded = $cold_blooded;
}

public function get_cold_blooded($cold_blooded){
	return $this->cold_blooded;
}

public function set_yell($yell){
	$this->yell = $yell;
}

public function get_yell($yell){
	return $this->yell;
}

public function set_jump($jump){
	$this->jump = $jump;
}

public function get_jump($jump){
	return $this->jump;
}


?>