<?php 
$num = 0;
do {
	//check if $num is odd number
	if($num % 2 != 0){ 
		//display the odd number
		echo "The odd number is: $num <br>";
    }   
	//increment num value
	$num++;
	//check if num is lessthan or equal 10
} while ($num <= 10);

?>