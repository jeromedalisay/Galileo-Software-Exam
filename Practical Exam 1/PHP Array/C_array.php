<?php
$arr = array('red','blue','black','red','blue','red','gold');
$arr_uniq = array_unique($arr);
$result = "";
foreach ($arr_uniq as $val) {
	if($result == ""){
		$result .= $val;
	}
	else{
		$result .= "," . $val;		
	}
}
echo $result;

?>