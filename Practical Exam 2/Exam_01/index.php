<!DOCTYPE html>
<html>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
	<table>
		<tr>
			<td colspan="2">
				<h3>Palindrome Checker</h3>
			</td>
		</tr>
		<tr>
			<td>
				<label>Palindrome</label>
			</td>
			<td>
				<input type="text" id="PalindromeText" name="PalindromeText" value="">
			</td>
		</tr>
		<tr>
			<td>
				&nbsp;
			</td>
			<td>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  $str = $_REQUEST['PalindromeText'];
	  if (!empty($str)) {
		PalindromeCheck($str);	  
	  }
	} 	
	$check = "";
	function PalindromeCheck($val){ 
		$string = str_replace(' ', '', $val);
		$strlen = strlen($string);	
		$check = "Palindrome";
		if($strlen > 1){
			for( $i = 0; $i <= floor($strlen/2); $i++ ) {		
				$char1 = substr($string, $i, 1 );
				$char2 = substr($string,-($i+1), 1);
				if($char1 != $char2){		
					$check = "Not Palindrome";
				}
			}
		}
		else{
			$check = "Not Palindrome";
		}
		echo $check;
	}  
?>
			</td>
		</tr>		
		<tr>
			<td colspan="2">
					 <input type="submit" name="btnCheck" class="button" value="Check" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>