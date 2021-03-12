<?php
$num = 0;
$total = 0;
//loop from 0 to 10
while($num <= 10) {
	//check if $num is even number
	if($num % 2 == 0){ 
		//sum if num is an even number
        $total = $total + $num;  
    }   
	//increment num value
	$num++;
}
echo "The sum is: $total <br>";
?>