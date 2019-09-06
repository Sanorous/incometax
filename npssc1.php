<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Schedule NPS : Vidhan Sabha Arrear Bill</title>

	<link rel='stylesheet' type='text/css' href='css/style1.css' />
	<link rel='stylesheet' type='text/css' href='css/print2.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example1.js'></script>

	<link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Halant" rel="stylesheet">

</head>

<body>

	<div id="page-wrap">

		<div id="">

              </div>
							<center>
              <table style="border:hidden">
              <tr>
								<td >
											<p style="text-align:center; font-size:26px">  UTTAR PRADESH LEGISLATIVE ASSEMBLY		<br /><p>
								</td>

	              </tr>
							</table>
							<table>
							<tr style="border:hidden">
								<td style="width:20%; border-left:hidden; font-size:18px ">


	लेखा शीर्षक
	की मोहर
							</td>
							<td style="width:80%">
								<p style="text-align:right; padding-right:50px; font-size:18px" >Gross Pay-			<input type="text"><br />
								Net Pay-	<input type="text"><br /></p><br/>
								<br />
								<p style="font-size:18px">Schedule of new Decentralized Contribution Pension Scheme (8342001170101) dedution made from  DA diff Arr. From 01-01-2016 to 31-12-2016</p><br />

										<p style="text-align:justify; font-size:18px">DDO : (4336) DY. SECRETARY & CHIEF ACCOUNT OFFICER <br />
										DEPARTMENT : VIDHAN SABH  , OFFICE : VIDHAN SABHA (04301) <br />
									HEAD OF ACCOUNT : (2071) --(02) <br />
									<span style="padding-left:125px">(103)</span><br />
									<span style="padding-left:125px">(0300)---0001</span><br />
								     	<br />
										<br />
													<span style="float:center"></span>


						</td>
						</tr></table>
							</center>
            </div>


		<div id="page-wrap">

		<table id="myTable" style="font-size:18px">

		  <tr border="1px">
					<th style="width:10%">Serial</th>
					<th style="width:10%">PRAN Number</th>
		      <th style="width:20%">Name</th>
					<th style="width:20%">DESIG</th>
		      <th style="width:15%">NPS Contribution</th>
					<th style="width:20%">Total</th>

		  </tr>

				<!--<td><form name="form" action="" method="GET"><input type="text" name="ID_NO" id="ID_NO" placeholder="enter the ID No"><input type="submit" value="add"></form></td>
		  style="text-align:center"-->
			<?php
			$callA = $_REQUEST['ID_NO'];
			//echo $callA;
			$counter = 0;
foreach ($callA as $id) {
	include("db.php");
	mysql_query ("set character_set_client='utf8'");
	mysql_query ("set character_set_results='utf8'");
	mysql_query ("set collation_connection='utf8_general_ci'");
	$query = "SELECT * FROM calculations WHERE ID_NO=$id";
	$query_run = mysql_query($query);

	$totalarrear= 0;
	$totalsalary= 0;
	$totalda= 0;
	$totalsalaryold= 0;
	$totaldaold= 0;
	$vetanmore = 0;
	$gpf2019 = 0;
	$gpf2020 = 0;
	$nps = 0;
	$counter++;
	while ($num = mysql_fetch_assoc ($query_run)) {
		$ID_number = $num['ID_NO'];
		$name = $num['EMP_NM'];
		$designation = $num['DESIG'];
		$pran_no = $num['PRAN_NO'];
		$ppf_no = $num['PPF_NO'];
		$ppf_bank = $num['PPF_BANK'];
		$pf_no = $num['PF_NO'];
			$totalsalary += round($num['basicSalaryMonth']);
			$totalsalary2019 = round($totalsalary/2);
			$totalda += round($num['totalda']);
			$finalsalary = $totalsalary2019 + $totalda;
			$totalsalaryold += round($num['basicSalaryMonthOld']);
			$totaldaold += round($num['totaloldda']);
			$finalsalaryold = $totalsalaryold + $totaldaold;
			$diffsalary = $totalsalary - $totalsalaryold;
			$diffda = $totalda - $totaldaold;
			$bank_name= $num['BANK_NM'];
			$bankaccount = $num['BANK_AC_NO'];
	    $totalarrear += round($num['fftotal']);
			$finalarrear = $totalarrear-$incometax2019;
			$incometax2019 = $num['incometax2019'];
			$incometax2020 = $num['incometax2020'];
			$gpf2019 = $num['gpf2019'];
			$gpf2020 = $num['gpf2020'];
			$arrear2019 = $totalarrear/2;
			$arrear2020 = $totalarrear/2;

}

			$yog = $arrear2019;
			$roundoff2019= round($arrear2019);
			$vatanall += $roundoff2019;


			if ($pran_no==null){
				$gpf2019 = round($roundoff2019*80/100);
				$newvar = ($roundoff2019-$incometax2019)-$gpf2019;
				//$nps = round($roundoff2019*10/100);
			}
			else {
				$gpf2019 = round($roundoff2019*70/100);
				$nps = round($roundoff2019*10/100);
				$newvar = round($roundoff2019-$gpf2019-$incometax2019-$nps);
			}
			if($newvar < 0){
				$newvar = 0;
				$gpf2019 = $roundoff2019-$incometax2019;
			}
			$finalpayable = round($newvar);
			$finalpayableall += $finalpayable;
			$incometax2019all += $incometax2019;
			$gpf2019all += $gpf2019;
			$nps2019all += $nps;
			$npsround = round($nps, 2);
			//echo round(7803, 2);
			$npsfinal = $nps-$npsround;
			//echo $nps;


			echo "<tr align='left'>";
			echo"<td><font color='black'>" .$counter."</font></td>";
			echo"<td><font color='black'>" .$pran_no."</font></td>";
			echo"<td><font color='black'>" .$name."</font></td>";
			echo"<td><font color='black'>" .$designation."</font></td>";
			echo"<td bgcolor='#DFF5DD'>" .$npsround."</font></td>";
			echo"<td bgcolor='#DFF5DD'><font color='black'>" .$npsround."</font></td>";
			echo "</tr>";
	}

mysql_close($conn);
?>
<?php
echo "<tr align='left' style='font-weight:bold'>";
echo"<td style='border-right:none'><font color='black'></font></td>";
echo"<td style='border-left:none; border-right:none'><font color='black'></font></td>";
echo"<td style='border-left:none; border-right:none'><font color='black'></font></td>";
echo"<td style='border-right:none; border-right:none'><font color='black'>कुल योग</font></td>";
echo"<td bgcolor='#D4DEEE'><font color='black'>" .$nps2019all."</font></td>";
echo"<td bgcolor='#D4DEEE'><font color='black'>" .$nps2019all."</font></td>";
//echo"<td><font color='black'></font></td>";
echo "</tr>";
?>
 </table>
 <br />
 <p style="font-size:18px"> शब्दों में रूपया- <span style="float:center"><input type="text" style="border:none; text-align:right; font-size:18px" size="40" text-align="right"></span>
 <br />
 <br />
 <br /></p>
  <p style="float:right; font-size:18px">
 	 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(अंजू अग्रवाल)<br />
 	 उप सचिव एवं मुख्य लेखाधिकारी
  </p>





</body>
<script>

</script>

</html>
<?php ob_end_flush(); ?>
