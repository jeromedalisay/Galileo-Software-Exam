<?php
$arr = array('Marvin','Marco','Marvin','Marco','Marco','Marvin','Christian');

$data1 = array ();
//get the count of same value
foreach (array_unique($arr) as $val1) {
	$cnt = 0;
	foreach ($arr as $val2) {
	  if($val1 == $val2){
		  $cnt++;
	  }
	}
	array_push($data1,array($cnt,$val1));
}
//get the highest value from multi dimenstion array
$max = 0;
foreach ($data1 as $val)
{
    foreach($val as $key=>$val1)
    {
        if ($val1 > $max)
        {
        $max = $val1;
        }
    }       
}
//get the data with highest common value
$data2 = array ();
foreach ($data1 as $val3) {
	if($val3[0] == $max)
	{
		array_push($data2,$val3[1]);
	}
}
//sort by ascending order
sort($data2);
echo $data2[0];
?>