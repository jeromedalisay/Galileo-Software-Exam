<!DOCTYPE html>
<html>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
	<table>
		<tr>
			<td colspan="2">
				<h3>Reverse Word</h3>
			</td>
		</tr>
		<tr>
			<td>
				<label>Word</label>
			</td>
			<td>
				<input type="text" id="reverseData" name="reverseData" value="">
			</td>
		</tr>
		<tr>
			<td>
				&nbsp;
			</td>
			<td>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $str = $_REQUEST['reverseData'];
	  if (!empty($str)) {
		ReverseWord($str);	  
	  }
	} 	
	function ReverseWord($val){ 
		$string = str_replace(' ', '', $val);
		$strlen = strlen($string);	
		for( $i = 1; $i <= floor($strlen); $i++) {		
			$char = substr($string,-($i), 1);
			echo $char;
			
		}
	}  
?>
			</td>
		</tr>		
		<tr>
			<td colspan="2">
					 <input type="submit" name="btnCheck" class="button" value="Reverse" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>