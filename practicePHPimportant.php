<?php 


	$float = 15.45234;
	$int = (int)$float;  // typecasting float to int
	echo $int;
	echo "</br>";

	 
	$sring = "12";
	$stringTOint = (int)$sring;
	echo $stringTOint;


	//find absoulute value 
	echo "</br>";
	$value = -9.5;
	echo abs($value);
	echo "</br>";


	//find squre root value
	$squre = 100;
	echo sqrt($squre);
	echo "</br>";


	// round a digit 
	$num1 = 0.70;
	$num2 = 0.49999;
	echo round($num1);
	echo "</br>";
	echo round($num2);
	echo "</br>";

	//to generate random value
	$randvalue = rand();
	echo $randvalue;

?>