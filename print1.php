<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Vidhan Sabha Arrear Bill</title>

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
	$PPF_NO= $test['PPF_NO'] ;
	$PPF_BANK= $test['PPF_BANK'] ;
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

<?php
/*require("db.php");
mysql_query ("set character_set_client='utf8'");
 mysql_query ("set character_set_results='utf8'");
 mysql_query ("set collation_connection='utf8_general_ci'");
$id =$_REQUEST['ID_NO'];
$result = mysql_query("SELECT * FROM calculations WHERE ID_NO  = '$id'");
$test = mysql_fetch_array($result);
if (!$result)
		{
		die("Error: Data not found..");
		}
		$ID_NO=$test['ID_NO'] ; //1
		$EMP_NM=$test['EMP_NM'] ; //2
		$DESIG=$test['DESIG'] ;  //3

		$BANK_NM= $test['BANK_NM'] ;
		$BANK_AC_NO= $test['BANK_AC_NO'] ;
		$GRAD_PAY= $test['GRAD_PAY'] ;
		//$SCALE= $test['SCALE'] ;
		$PF_NO= $test['PF_NO'] ;
		$BASIC_PAY= $test['BASIC_PAY'] ;
		$BP_CAL= $test['BP_CAL'] ;
		$PRAN_NO= $test['PRAN_NO'] ;

		$date1=$test['date1'] ; //4
		$date2=$test['date2'] ;  //5
		$days= $test['days'] ; //6
		$payband= $test['payband'] ; //7
		$gradepay= $test['gradepay'] ; //8
		$old_payband= $test['old_payband'] ; //7
		$old_gradepay= $test['old_gradepay'] ; //8
		$basic= $test['basic'] ; //9
		$da= $test['da'] ; //10
		$hra= $test['hra'] ; //11
		$cca= $test['cca'] ; //12
		$gis= $test['gis'] ; //13
		$pa= $test['pa'] ; //14
		$total= $test['total'] ; //15
		$old_basic= $test['old_basic'] ; //16
		$old_da= $test['old_da'] ; //16
		$old_hra= $test['old_hra'] ; //17
		$old_cca= $test['old_cca'] ; //18
		$old_gis= $test['old_gis'] ; //19
		$old_pa= $test['old_pa'] ; //20
		$old_total= $test['old_total'] ; //21
		$basic2= $test['basic2'] ; //22
		$basic1= $test['basic1'] ; //23
		$da2= $test['da2'] ; //24
		$da1= $test['da1'] ; //25
		$hra2= $test['hra2'] ; //26
		$hra1= $test['hra1'] ; //27
		$cca2= $test['cca2'] ; //28
		$cca1= $test['cca1'] ; //29
		$gis2= $test['gis2'] ; //30
		$gis1= $test['gis1'] ; //31
		$pa2= $test['pa2'] ; //32
		$pa1= $test['pa1'] ; //33
		$total10= $test['total10'] ; //34
		$total11= $test['total11'] ; //35
		$diff_basic= $test['diff_basic'] ; //36
		$diff_da= $test['diff_da'] ; //37
		$diff_hra= $test['diff_hra'] ; //38
		$diff_cca= $test['diff_cca'] ; //39
		$diff_gis= $test['diff_gis'] ; //40
		$diff_pa= $test['diff_pa'] ; //41
		$fftotal= $test['fftotal'] ; //42
/*
if(isset($_POST['save']))
{
	$Name_save = $_POST['Name'];
	$Designation_save = $_POST['Designation'];
	$Dob_save = $_POST['Dob'];
	$Employer_save = $_POST['Employer'];
	$Mobile_save = $_POST['Mobile'];
	$other_save = $_POST['other'];

	mysql_query("UPDATE form SET Name ='$Name_save', Designation ='$Designation_save', Dob ='$Dob_save', Employer='$Employer_save', Mobile='$Mobile_save', other='$other_save' WHERE UserId = '$id'")
				or die(mysql_error());
	echo "Saved!";
	header("Location: clients.php");
}
mysql_close($conn);*/
?>


	<div id="page-wrap">

		<div id="">

              </div>
							<center>
              <table style="border:hidden">
              <tr>
              <td>
										<p style="text-align:center; font-size:22px">विधान सभा सचिवालय <p>
									<p style="text-align:center">लेखा 4<p>
										<hr />
              <p>सातवें वेतन आयोग द्वारा पुनरीक्षित वेतन मैट्रिक्स में वेतन तथा महंगाई भत्ते के अंतर का आगणन पत्र :<p>
							</td>

              </tr></table>
							</center>
            </div>


		<div id="page-wrap">
		<div id="customer">
<hr/>
            <table id="items" style="width:100%">
                <tr>
                    <td class="meta-head">कर्मचारी संख्या </td>
                    <td><!--<textarea>--><h3><?php echo $ID_NO ?></h3><!--</textarea>--></td>

										<td class="meta-head"> नाम </td>
                    <td><h4><?php echo $EMP_NM ?></h4></td>

										<td class="meta-head"> पदनाम  </td>
                    <td><h4><?php echo $DESIG ?></h4></td>

                </tr>
                <tr>
										<td class="meta-head">बैंक विवरण     </td>
                    <td><h4><?php echo $BANK_NM ?>---<?php echo $BANK_AC_NO ?></h4></td>

                    <td class="meta-head">PRAN नम्बर  </td>
                    <td><h4><?php echo $PRAN_NO ?></h4></td>

										<td class="meta-head"> PPF नम्बर & बैंक नाम  </td>
                    <td><h4><?php echo $PPF_NO ?>::<?php echo $PPF_BANK ?></h4></td>
                </tr>
								<tr>
										<td class="meta-head"> वेतन बैंड </td>
										<td><h4><?php echo $SCALE ?></h4></td>

										<td class="meta-head">जी०पी०ऍफ़०  </td>
										<td><h4><?php echo $PF_NO ?></h4></td>

										<td class="meta-head">जी०पी०ऍफ़०/NPS </td>
										<?php
										if($PRAN_NO == null){
											$GPSorNPS = "GPF";
										}
										else{
											$GPSorNPS = "NPS";
										}
										?>
										<td><h4><?php echo $GPSorNPS ?></h4></td>

								</tr>

            </table>

		</div>

		<table id="items">

		  <tr border="1px">
		      <th style="width:12%">दिनांक से दिनांक तक </th>
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
		  <!--style="text-align:center"-->
			<?php

include("db.php");

mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");

$result=mysql_query("SELECT * FROM calculations WHERE ID_NO=$ID_NO ORDER BY `serial` ASC");
while($test = mysql_fetch_array($result, MYSQL_ASSOC))
{
$id = $test['ID_NO'];

echo "<tr align='left'>";
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
//echo"<td><font color='black'>". $test['fftotal']. "</font></td>";
//echo"<td widht='7%'> <a href ='view.php?unqid=$id'>Edit</a>";
//echo"<td width='7%'> <a href ='del.php?unqid=$id'><center>Delete</center></a>";

echo "</tr>";
}
mysql_close($conn);
?>
 </table>

<?php
include("db.php");

$query = "SELECT * FROM calculations WHERE ID_NO=$ID_NO";
$query_run = mysql_query($query);

$totalarrear= 0;
$ppf2019 = 0;
$incometax2019 = $num['incometax2019'];
$gpf2019 = $num['gpf2019'];
$pran_no = $num['PRAN_NO'];
//$ID_number = $num['ID_NO'];
while ($num = mysql_fetch_assoc ($query_run)) {
    $totalarrear += round($num['fftotal']);
		$incometax2019 = $num['incometax2019'];
		$incometax2020 = $num['incometax2020'];
		$gpf2019 = $num['gpf2019'];
		$gpf2020 = $num['gpf2020'];
		$arrear2019 = $totalarrear/2;
		$arrear2020 = $totalarrear/2;
		$PRAN_NO = $num['PRAN_NO'];
		//echo $gpf2019;
		/*echo "<table>";
		echo "<tr align='left'>";
		echo"<td><font color='black'>" .$totalarrear."</font></td>";
		echo "</tr>";
		echo "<table>";*/
}
//echo $totalarrear;
 ?>
 	            <br />
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
						<script>
								 function calculateincometax(){
									 var f1 = Number(document.getElementById("incometax2019").value);
									 //var f2 = document.getElementById("username_input2");
									 var arrear = document.getElementById("roundoff").value;
									 var gpf = Number(document.getElementById("gpf").value);
									 var nps = Number(document.getElementById("nps").value);
									 var payable = document.getElementById("payable");
									 console.log(arrear+" "+gpf+" "+nps);
									 var total = f1+gpf+nps;
									 payable.text = arrear-total;
								 }
							 </script>
						<p>वित्तीय वर्ष 2018-2019 में कुल देय धनराशि का आगणन (50%)</p>
						<table id="" width="600">

						  <tr border="1px">
						      <th>वेतन </th>
						      <th>महंगाई भत्ता</th>
						      <th>योग </th>
						      <th>पूर्णांकित</th>
									<th>GPF(80%)/PPF(70%)</th>
									<th>NPS(10%) </th>
									<th>आयकर</th>
									<th>देय धनराशि</th>
						  </tr>

            <?php

						$yog = $arrear2019;
						$roundoff2019= round($arrear2019);
						if($gpf2019 == 0){
							$newvar = $roundoff2019-$incometax2019;
						}
						else if ($PRAN_NO == null){
							$gpf2019 = round($roundoff2019*80/100);
							$newvar = ($roundoff2019-$incometax2019)-$gpf2019;
						}
						else {
							//$ppf2019full = round($roundoff2019*70/100);//54902
							//$ppf2019 = round($roundoff2019*70/10000);//549
							$gpf2019 = (floor($roundoff2019*.007))*100; //
							//$gpf2019 = ($gpfround)*100;//$ppf2019*100;
							$leftamount = round($roundoff2019*.7)-$gpf2019;
							//$gpf2019 = round($roundoff2019*70/100);
							$nps = round($roundoff2019*10/100);
							$newvar = round($roundoff2019-$gpf2019-$incometax2019-$nps);
						}

						if($newvar < 0){
							$newvar = 0;
							$gpf2019 = $roundoff2019-$incometax2019;
						}
						$finalpayable = round($newvar);


						echo "<tr align='left'>";
						echo"<td><font color='black'>" .$yog."</font></td>";
						echo"<td><font color='black'>0.00</font></td>";
						echo"<td><font color='black'>" .$yog."</font></td>";
						?>
						<td><font color="black"><span id="roundoff"><?php echo $roundoff2019 ?> </span></font></td>

						<form action="updateincometax.php?ID_NO=<?php echo $ID_NO ?>" method="POST" enctype="multipart/form-data">

						<td><font color="black"><input type='text' size="10" name ="gpf2019" style='border:none' value='<?php echo $gpf2019 ?>'></font></td>
						<td><font color="black"><span id="nps"><?php echo $nps ?></span></font></td>
						<!--echo"<td><font color='black'><span id='roundoff'>" .$roundoff."</span></font></td>";
						echo"<td><font color='black'><span id='gpf'>". $gpf. "</span></font></td>";
						echo"<td><font color='black'><span id='nps'>". $nps. "</span></font></td>";
						?>-->
				  	<td><input size="6" type="text" color="black" style='border:none' value ="<?php echo $incometax2019 ?>" name="incometax2019"></td>
						<td><font color="black"><input type='text' size='10' style='border:none' value='<?php echo $finalpayable ?>'></td>
						</tr>

					</table>
					<!--<script>
					function incometax(){
						var valueOfIncomeTax = number(document.getElementById("incometax2019").value);
					}
				</script>
					<script>
							 function calculateincometax1(){
								 var f1 = document.getElementById("iiii");
								 var f2 = document.getElementById("iiiii");
								 f2.value = f1.value;
							 }
						 </script>-->


<br />
<br />
<p>वित्तीय वर्ष 2019-2020 में कुल देय धनराशि का आगणन (50%)</p>
<table id="" width="600">
	<tr border="1px">
			<th>वेतन </th>
			<th>महंगाई भत्ता</th>
			<th>योग </th>
			<th>पूर्णांकित</th>
			<th>GPF(80%)/PPF(70%)</th>
			<th>NPS(10%) </th>
			<th>आयकर</th>
			<th>देय धनराशि</th>
	</tr>
<?php

$yog = $arrear2020;
$roundoff2020= $totalarrear-$roundoff2019;

if ($PRAN_NO==null){
	$gpf = round($roundoff2020*80/100);
}
else {
	$gpf = round($roundoff2020*70/100);
	$nps = round($roundoff2020*10/100);
}
//$gpf = round($roundoff*80/100);
$payable = round($roundoff2020-($gpf+$nps));
$finalpayable2020 = round($payable-$incometax2020);

echo "<tr align='left'>";
echo"<td><font color='black'>" .$yog."</font></td>";
echo"<td><font color='black'>0.00</font></td>";
echo"<td><font color='black'>" .$yog."</font></td>";
?>
<td><font color="black"><span id="roundoff"><?php echo $roundoff2020 ?> </span></font></td>
<td><font color="black"><input type='text' size='10' name="gpf2020" style='border:none' value='<?php echo $gpf2020 ?>'></font></td>
<td><font color="black"><span id="nps"><?php echo $nps ?></span></font></td>

<td><input size="6" type="text" color="black" style="border:none" value ="<?php echo $incometax2020 ?>" name="incometax2020"></td>
<td><font color="black"><input type="text" size="10" style="border:none" value="<?php echo $finalpayable2020 ?>"></font></td></tr>
<tr>
<td><button type="submit" class="btn btn-success" name="save" >Add Tax</button>
</form></td></tr>
</tr>
</table>

	 <!--<input type="text" name="usermame" id="iiii" value="1" onblur="calculateincometax1()"><br /><br />
	 <input type="text" name="username2" id="iiiii" value="">

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
</table>-->


	</div>

</body>
<script>

</script>

</html>
<?php ob_end_flush(); ?>
