<?php
$fiboNo = "";
$numA = 0;
$numB = 1;
//loop from 0 to 10
for ($cnt = 0; $cnt <= 10; $cnt++) {
	//display current value of numA
	$fiboNo .= "$numA,"; 
	//add numB to numA and pass it to numC
	$numC = $numB + $numA;
	//pass the value of numB to numA
	$numA = $numB;
	//pass the value of numC to numB
	$numB = $numC;
}
	echo "The number is: $fiboNo <br>";
?>