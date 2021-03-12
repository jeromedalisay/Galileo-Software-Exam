<?php
$arr = array(9863,7127,2020,80,131,55,100);
$arr_sorted = array();
foreach ($arr as $val) {
	if($val % 2 != 0){ 
		//display the odd number
		$val_rnd = round($val, -1);
		array_push($arr_sorted,$val_rnd);
    }   
	else{
		array_push($arr_sorted,$val);
	}
}
sort($arr_sorted);
print_r($arr_sorted);
?>