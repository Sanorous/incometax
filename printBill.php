<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Bill: Vidhan Sabha Arrear Bill</title>

	<link rel='stylesheet' type='text/css' href='css/style1.css' />
	<link rel='stylesheet' type='text/css' href='css/print1.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example1.js'></script>

	<link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Halant" rel="stylesheet">

</head>

<body>

	<?php
	require("db.php");
	mysql_query('SET character_set_results=utf8');
	mysql_query('SET names=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_results=utf8');
	mysql_query('SET collation_connection=utf8_general_ci');
	$id =$_REQUEST['ID_NO'];
	$result = mysql_query("SELECT * FROM employees WHERE ID_NO  = '$id'");
	$test = mysql_fetch_array($result);
	if (!$result)
	{
	die("Error: Data not found..");
	}
	$ID_NO=$test['ID_NO'];
	$EMP_NM=$test['EMP_NM'] ;
	$DESIG= $test['DESIG'] ;
	$BANK_NM= $test['BANK_NM'] ;
	$BANK_AC_NO= $test['BANK_AC_NO'] ;
	$GRAD_PAY= $test['GRAD_PAY'] ;
	$SCALE= $test['SCALE'] ;
	$PF_NO= $test['PF_NO'] ;
	$BASIC_PAY= $test['BASIC_PAY'] ;
	$BP_CAL= $test['BP_CAL'] ;
	$PRAN_NO= $test['PRAN_NO'] ;
	//$Follow_Up= $test['Follow_Up'] ;
	//$Extra_Work= $test['Extra_Work'] ;

	if(isset($_POST['save']))
	{
	//$Name_save = $_POST['Name'];
	$EMP_NM_save=$_POST['EMP_NM'] ;
	$DESIG_save= $_POST['DESIG'] ;
	$BANK_NM_save= $_POST['BANK_NM'] ;
	$BANK_AC_NM_save= $_POST['BANK_AC_NO'] ;
	$GRAD_PAY_save= $_POST['GRAD_PAY'] ;
	$SCALE_save= $_POST['SCALE'] ;
	$PF_NO_save= $_POST['PF_NO'] ;
	$BASIC_PAY_save= $_POST['BASIC_PAY'] ;
	$BP_CAL_save= $_POST['BP_CAL'] ;
	//$Others= $_POST['Others'] ;

	mysql_query("UPDATE Employee_Work1 SET $EMP_NM='$EMP_NM_save', Date='$Date_save' WHERE ID_NO = '$id'")
	or die(mysql_error());
	echo "Saved!";
	header("Location: arrear2018.php");
	}
	mysql_close($conn);
	?>
	<div id="page-wrap">

		<div id="">

              </div>
							<center>
              <table style="border:hidden">
              <tr>
              <td>
										<p style="text-align:center; font-size:22px">उत्तर प्रदेश विधान सभा सचिवालय, लखनऊ।		<br />
श्रेणी-वेतन अन्तर माह-01.01.2016 से 31.12.2016 तक  <p>
							</td>

              </tr></table>
							</center>
            </div>


		<div id="page-wrap">

		<table id="myTable">

		  <tr border="1px">

					<th style="width:12%">ID No</th>
		      <th style="width:12%">Name</th>
		      <!--<th style="width:8%">दिन</th>-->
		      <th style="width:8%">अनुमन्य वेतन दर </th>
		      <th style="width:8%">अनुमन्य वेतन</th>
					<th style="width:8%">अनुमन्य महंगाई भत्ता </th>
					<th style="width:8%">योग </th>
					<th style="width:8%">आहरित वेतन दर </th>
 				 <th style="width:8%">आहरित वेतन</th>
 				 <th style="width:8%">आहरित महंगाई भत्ता </th>
 				 <th style="width:8%">योग </th>
				 <th style="width:8%">अंतर  वेतन</th>
				 <th style="width:8%">अंतर  महंगाई भत्ता </th>
				 <th style="width:8%">अंतर योग </th>


		  </tr>
			<tr align='left'>
				<!--<td><form name="form" action="" method="GET"><input type="text" name="ID_NO" id="ID_NO" placeholder="enter the ID No"><input type="submit" value="add"></form></td>
		  style="text-align:center"-->
			<?php
include("db.php");
$id =$_REQUEST['ID_NO'];
mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
$result=mysql_query("SELECT * FROM calculations WHERE ID_NO=$id");
while($test = mysql_fetch_array($result, MYSQL_ASSOC))
{
$id = $test['ID_NO'];
echo"<td><font color='black'>" .$test['ID_NO']."</font></td>";
echo"<td width='100'><font color='black'>" .$test['date1']." to ".$test['date2']."</font></td>";
//echo"<td><font color='black'>" .$test['days']."</font></td>";
echo"<td><font color='black'>" .$test['basicSalary']."</font></td>";
echo"<td><font color='black'>" .$test['basicSalaryMonth']."</font></td>";
echo"<td><font color='black'>" .$test['totalda']."</font></td>";
echo"<td><font color='black'>". $test['total']. "</font></td>";
echo"<td><font color='black'>". $test['old_basic']. "</font></td>";
echo"<td><font color='black'>". $test['basicSalaryMonthOld']. "</font></td>";
echo"<td><font color='black'>". $test['totaloldda']. "</font></td>";
echo"<td><font color='black'>". $test['old_total']. "</font></td>";
echo"<td><font color='black'>" .$test['diff_basic']."</font></td>";
echo"<td><font color='black'>". $test['diff_da']. "</font></td>";
echo"<td><font color='black'>". $test['fftotal']. "</font></td>";
}
mysql_close($conn);
?>
</tr>
 </table>

<?php
/*include("db.php");
$query = "SELECT * FROM calculations WHERE ID_NO=$ID_NO";
$query_run = mysql_query($query);

$totalarrear= 0;
while ($num = mysql_fetch_assoc ($query_run)) {
    $totalarrear += round($num['fftotal']);
		$arrear2019 = $totalarrear/2;
		$arrear2020 = $totalarrear/2;
		echo "<table>";
		echo "<tr align='left'>";
		echo"<td><font color='black'>" .$totalarrear."</font></td>";
		echo "</tr>";
		echo "<table>";*/

 ?>
 	            <br />
							<button onclick="myFunction()">Add Row</button>

<script>
function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
		var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
		var cell9 = row.insertCell(8);
    var cell10 = row.insertCell(9);
		var cell11 = row.insertCell(10);
    var cell12 = row.insertCell(11);
		var cell13 = row.insertCell(12);
    cell1.innerHTML = "<input type='text' size='3'/>";
    cell2.innerHTML = "<input />";
}
</script>

		  <table id="meta">
                <tr>
                    <td class="meta-head">कुल पावना </td>
                    <td>Rs. <?php echo $totalarrear ?>/-</td>
                </tr>
                <!--<tr>
                    <td class="meta-head">Year 2018-2019</td>
                    <td>Rs. <?php echo $arrear2019 ?>/-</td>
                </tr>
                <tr>
                    <td class="meta-head">Year 2019-2020</td>
					<td><div class="due" style="font-weight:bold">Rs. <?php echo $arrear2020 ?>/-</div></td>
				</tr>-->

            </table>
            <br />
						<br />
						<br />
						<p>वित्तीय वर्ष 2018-2019 में कुल देय धनराशि का आगणन (50%)</p>
						<table id="" width="600">

						  <tr border="1px">
						      <th>वेतन </th>
						      <th>महंगाई भत्ता</th>
						      <th>योग </th>
						      <th>पूर्णांकित</th>
									<th>जी०पी०ऍफ़०(80%) </th>
									<th>आयकर</th>
									<th>देय धनराशि</th>
						  </tr>
            <?php

						$yog = $arrear2019;
						$roundoff= round($arrear2019);
						$gpf = round($roundoff*80/100);
						$payable = round($arrear2019-$gpf);

						echo "<tr align='left'>";
						echo"<td><font color='black'>" .$yog."</font></td>";
						echo"<td><font color='black'>0.00</font></td>";
						echo"<td><font color='black'>" .$yog."</font></td>";
						echo"<td><font color='black'>" .$roundoff."</font></td>";
						echo"<td><font color='black'>". $gpf. "</font></td>";
						echo"<td><input type='text' color='black' value ='".$incometax."'></td>";
						echo"<td><font color='black'>".$payable. "</font></td>";
						echo "</tr>";
						?>
					</table>
<br />
<br />
<p>वित्तीय वर्ष 2019-2020 में कुल देय धनराशि का आगणन (50%)</p>
<table id="" width="600">

	<tr border="1px">
			<th>वेतन </th>
			<th>महंगाई भत्ता</th>
			<th>योग </th>
			<th>पूर्णांकित</th>
			<th>जी०पी०ऍफ़०(80%)</th>
			<th>आयकर</th>
			<th>देय धनराशि</th>
	</tr>
<?php

$yog = $totalarrear-$roundoff;
$roundoff2020= round($yog);
$gpf = round($yog*80/100);
$payable = round($yog-$gpf);

echo "<tr align='left'>";
echo"<td><font color='black'>" .$yog."</font></td>";
echo"<td><font color='black'>0.00</font></td>";
echo"<td><font color='black'>" .$yog."</font></td>";
echo"<td><font color='black'>" .$roundoff2020."</font></td>";
echo"<td><font color='black'>". $gpf. "</font></td>";
echo"<td><input type='text' color='black' value ='".$incometax2020."'></td>";
echo"<td><font color='black'>". $payable. "</font></td>";
echo "</tr>";
?>
</table>


	</div>

</body>
<script>

</script>

</html>
<?php ob_end_flush(); ?>
