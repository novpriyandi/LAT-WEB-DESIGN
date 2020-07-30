<?php

class animal{
	public $name;
	public $leg;
	public $cold_blooded;
	public $yell;
	public $jump;
}

$sheep = new animal;

echo "Namanya " . $sheep->name . "<br>";
echo "Kakinya " . $sheep->leg ."<br>";
echo "Berdarah Dingin " . $sheep->cold_blooded;

?>