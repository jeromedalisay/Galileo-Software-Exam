<?php 
$num = 10;
function CheckIfFibonacci($n) 
{ 
    return CheckPerfectSquare(5 * $n * $n + 4) || CheckPerfectSquare(5 * $n * $n - 4); 
} 
function CheckPerfectSquare($n) 
{ 
    $result = (int)(sqrt($n)); 
    return ($result * $result == $n); 
} 
for ($x = 1; $x <= $num; $x++) 
if(CheckIfFibonacci($x)){
	echo "$x is a Fibonacci Number <br />"; 
} 
else{
	echo "$x is a not Fibonacci Number <br />" ; 
}
?> 