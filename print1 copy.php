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

</head>

<body>

<?php
require("db.php");
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
}*/
mysql_close($conn);
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
<hr/><br />


            <table id="" style="width:100%">
                <tr>
                    <td class="meta-head">कर्मचारी संख्या </td>
                    <td><!--<textarea>--><?php echo $ID_NO ?><!--</textarea>--></td>

										<td class="meta-head"> नाम </td>
                    <td><?php echo $EMP_NM ?></td>

										<td class="meta-head"> पदनाम  </td>
                    <td><?php echo $DESIG ?></td>

                </tr>
                <tr>
										<td class="meta-head">Bank Details   </td>
                    <td><?php echo $BANK_NM ?>::<?php echo $BANK_AC_NO ?></td>

                    <td class="meta-head">PRAN No </td>
                    <td><?php echo $PRAN_NO ?></td>

										<td class="meta-head"> PPF No and Bank Name  </td>
                    <td><?php echo $PPF_NO ?>::<?php echo $PPF_BANK ?></td>
                </tr>

                <!--<tr>
                    <td class="meta-head">Amount Due</td>
					<td><div class="due">Rs.<?php echo $Balance ?>/-</div></td>
                </tr>-->

            </table>

		</div>

		<table id="items">

		  <tr border="1px">
		      <th style="width:7%">दिनांक से दिनांक तक </th>
		      <th style="width:7%">दिन</th>
		      <th style="width:7%">अनुमन्य वेतन दर </th>
		      <th style="width:7%">अनुमन्य वेतन</th>
					<th style="width:7%">अनुमन्य महंगाई भत्ता </th>
					<th style="width:7%">योग </th>
					<th style="width:7%">आहरित वेतन दर </th>
 				 <th style="width:7%">आहरित वेतन</th>
 				 <th style="width:7%">आहरित महंगाई भत्ता </th>
 				 <th style="width:7%">योग </th>
				 <th style="width:7%">अंतर  वेतन</th>
				 <th style="width:7%">अंतर  महंगाई भत्ता </th>
				 <th style="width:7%">अंतर योग </th>
		      <th style="width:9%">विधान</th>

		  </tr>
		  <!--style="text-align:center"-->


		  <tr class="item-row" style="text-align:center; border:1px">
		      <td><?php echo $date1 ?> से  <?php echo $date2 ?></td>
					<td><?php echo $days ?></td>
					<td><?php echo $basic ?></td>
					<td><?php echo $total1 ?></td>
					<td><?php echo $totalda ?></td>
					<td><?php echo $total ?></td>
					<td><?php echo $old_basic ?></td>
					<td><?php echo $total3 ?></td>
					<td><?php echo $totaloldda ?></td>
					<td><?php echo $old_total ?></td>
					<td><?php echo $diff_basic ?></td>
					<td><?php echo $diff_da ?></td>
					<td><?php echo $fftotal ?></td>
					<td><?php echo $Occasion_date1 ?></td>



		  </tr>


		  </table>
			            <br />

		  <table id="meta">
                <tr>
                    <td class="meta-head">Total</td>
                    <td><!--<textarea>-->Rs. <?php echo $Total ?>/-<!--</textarea>--></td>
                </tr>
                <tr>

                    <td class="meta-head">Advance</td>
                    <td>Rs. <?php echo $Advance ?>/-</td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
					<td><div class="due" style="font-weight:bold">Rs. <?php echo $Balance ?>/-</div></td>
                </tr>

            </table>
            <br />
            <br />
            <br />

            <br />
            <br />


	</div>

</body>

</html>
<?php ob_end_flush(); ?>
