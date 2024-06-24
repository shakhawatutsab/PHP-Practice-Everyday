<?php

// PHP Variables
$name = "Shakhawat Hossain Utsab";
$age = 23;
$profession = "Developer";

echo "My name is $name and my age is $age and my profession is $profession" ;

echo "</br>";
echo "</br>";

// Variable Scope

$x =  100;
$y = 200;

function myTest(){
	global $x,$y;

	$y = $x + $y;
}



myTest();
echo $y;
