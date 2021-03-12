<!DOCTYPE html>
<html>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
	<table>
		<tr>
			<td colspan="2">
				<h3>Check date difference</h3>
			</td>
		</tr>
		<tr>
			<td style="width:50px;">
				<label>Date 1</label>
			</td>
			<td>
				<input type="date" id="dateFrom" name="dateFrom" value="">
			</td>
		</tr>
		<tr>
			<td>
				<label>Date 2</label>
			</td>
			<td>
				<input type="date" id="dateTo" name="dateTo" value="">
			</td>
		</tr>
		<tr>
			<td>
				&nbsp;
			</td>
			<td>
<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$dt1 = $_REQUEST['dateFrom'];
		$dt2 = $_REQUEST['dateTo'];
		//echo $dt1;
		if (!empty($dt1) && !empty($dt2)) {
			dateDiff($dt1, $dt2);
		}
		unset($_POST);
		unset($_REQUEST);
		//header('Location: ...');
	} 
	function dateDiff($dt1,$dt2){ 
		$date1 = date_create(strval($dt1));
		$date2 = date_create(strval($dt2));
		$difference = date_diff($date1, $date2);
		echo $difference->y . " year, " . $difference->m . " month, " . $difference->d . " days" ;
	}  
?>
			</td>
		</tr>		
		<tr>
			<td colspan="2">
					 <input type="submit" name="btnCheck" class="button" value="Check date difference" />
			</td>
		</tr>
	</table>
</form>
</body>
</html>