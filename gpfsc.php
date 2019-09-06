<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Schedule GPF: Vidhan Sabha Arrear Bill</title>

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
										<p style="text-align:center; font-size:32px">उत्तर प्रदेश विधान सभा सचिवालय, लखनऊ।		<br /><p>
							</td>

              </tr>
						</table>
						<table>
						<tr style="border:hidden">
							<td style="width:20%; border-left:hidden">


लेखा शीर्षक
की मोहर
						</td>
						<td style="width:80%">
							<p style="text-align:right; padding-right:50px; font-size:22px" >बिल की कुल धनराशि रू0-				<input type="text" style="border:none; text-align:right; font-size:22px" size="10" text-align="right"><br />
							बिल की शुद्ध धनराशि रू0-				<input type="text" style="border:none; text-align:right; font-size:22px" size="10" text-align="right"><br /></p><br/>
							<br />
							<p style="font-size:22px">माह 01.01.2016 से 31.12.2016 के सातवें वेतन का अंतर, जिसका भुगतान जुलाई, 2018
									को देय है, से की गयी जी० पी० एफ० से सम्बंधित कटौतियों का शिड्यूल</p><br />

									<p style="text-align:justify; font-size:22px">प्रमाणित किया जाता है कि इस शिड्यूल में अंकित विवण के अनुसार
									रू0-...................................... (रू0.........................) मात्र
									की धनराशि पाश्र्वांकित लेखा र्शीर्षक में चालान संख्या-.........................
									दिनांक ........................... जिसको कुल धनराशि रू0.....................
									(रू0.......................................) मात्र है, द्वारा राज्य कोषागार, लखनऊ
									में जमा कर दी गयी है।</p><br />
									<br />
									<br />
													<span style="float:right; font-size:22px">विशेष सचिव एवं वित्त नियन्त्रक</span>


						</td>
						</tr></table>
							</center>
            </div>
						<center>


		<div id="page-wrap">

		<table id="myTable">

		  <tr border="1px">
				<th style="width:10%">Employee ID</th>
					<th style="width:10%">GPF Number</th>
		      <th style="width:20%">Name</th>
					<th style="width:20%">DESIG</th>
		      <th style="width:15%">Amount Received</th>
					<th style="width:15%">Amount/Interest</th>
					<th style="width:20%">Tippani</th>

		  </tr>

				<!--<td><form name="form" action="" method="GET"><input type="text" name="ID_NO" id="ID_NO" placeholder="enter the ID No"><input type="submit" value="add"></form></td>
		  style="text-align:center"-->
			<?php
			$callA = $_REQUEST['ID_NO'];
			//echo $callA;
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


			if($gpf2019 == 0){
				$newvar = $roundoff2019-$incometax2019;
			}
			else if ($PRAN_NO==null){
				$gpf2019 = round($roundoff2019*80/100);
				$newvar = ($roundoff2019-$incometax2019)-$gpf2019;
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


			echo "<tr align='left'>";
			echo"<td><font color='black'>" .$ID_number."</font></td>";
			echo"<td><font color='black'>" .$pf_no."</font></td>";
			echo"<td><font color='black'>" .$name."</font></td>";
			echo"<td><font color='black'>" .$designation."</font></td>";
			echo"<td bgcolor='#DFF5DD'>" .$gpf2019."</font></td>";
			echo"<td><font color='black'></font></td>";
			echo"<td><font color='black'></font></td>";
			echo "</tr>";
	}

mysql_close($conn);
?>
<?php
echo "<tr align='left' style='font-weight:bold'>";
echo"<td style='border-right:none'><font color='black'></font></td>";
echo"<td style='border-left:none; border-right:none'><font color='black'></font></td>";
echo"<td style='border-right:none; border-right:none'><font color='black'>कुल योग</font></td>";
echo"<td bgcolor='#D4DEEE'><font color='black'>" .$gpf2019all."</font></td>";
echo"<td><font color='black'></font></td>";
echo"<td><font color='black'></font></td>";
echo "</tr>";
?>
 </table>
 <br />
 शब्दों में रूपया- <span style="float:center"><input type="text" style="border:none; text-align:left" size="40" text-align="right"></span>
<br />
<br />
<br />
 <p style="float:right; padding-right:50px">
	 (अंजू अग्रवाल)<br />
	 उप सचिव एवं मुख्य लेखाधिकारी
 </p>



</center>
</body>
<script>

</script>

</html>
<?php ob_end_flush(); ?>
