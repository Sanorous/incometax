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
					<th style="width:5%">ID No</th>
		      <th style="width:10%">Name</th>
					<th style="width:10%">DESIG</th>
		      <th style="width:8%">NPS No/GPF No</th>
					<th style="width:8%">PPF Details</th>
					<th style="width:8%">दिन</th>
		      <th style="width:8%">वेतन</th>
					<th style="width:8%">महंगाई भत्ता </th>
					<th style="width:8%">कुल पावना</th>
					<th style="width:8%">GPF/PPF </th>
					<th style="width:8%"> NPS</th>
					<th style="width:8%">Income Tax</th>
				 <th style="width:8%">Net Pay</th>
 				 <th style="width:8%">Other Deduction</th>
				 <th style="width:8%">Net pay Bank</th>
				 <th style="width:8%">Bank Name </th>
				 <th style="width:8%">Bank Account </th>
		  </tr>

				<!--<td><form name="form" action="" method="GET"><input type="text" name="ID_NO" id="ID_NO" placeholder="enter the ID No"><input type="submit" value="add"></form></td>
		  style="text-align:center"-->
			<?php
			$callA = array(15,
			30,
			50,
			51,
			52,
			54,
			56,
			57,
			58,
			76,
			104,
			105,
			106,
			107,
			109,
			110,
			112,
			113,
			115,
			116,
			118,
			125,
			127,
			128,
			178,
			193,
			203,
			207,
			210,
			211,
			213,
			214,
			219,
			221,
			222,
			223,
			225,
			231,
			233,
			235,
			236,
			237,
			238,
			239,
			241,
			242,
			243,
			244,
			246,
			247,
			248,
			249,
			250,
			252,
			254,
			255,
			258,
			259,
			260,
			262,
			263,
			264,
			265,
			267,
			269,
			271,
			274,
			275,
			276,
			277,
			279,
			280,
			284,
			289,
			293,
			295,
			299,
			303,
			304,
			305,
			308,
			309,
			310,
			311,
			312,
			315,
			317,
			318,
			321,
			323,
			324,
			326,
			327,
			329,
			330,
			331,
			333,
			335,
			341,
			356,
			357,
			358,
			359,
			360,
			361,
			365,
			366,
			367,
			369,
			370,
			371,
			372,
			373,
			374,
			375,
			377,
			380,
			381,
			385,
			389,
			391,
			392,
			393,
			398,
			400,
			402,
			406,
			418,
			436,
			437,
			438,
			439,
			440,
			441,
			442,
			445,
			446,
			448,
			456,
			461,
			468,
			470,
			471,
			473,
			474,
			475,
			476,
			485,
			487,
			490,
			492,
			493,
			494,
			495,
			496,
			498,
			500,
			502,
			505,
			507,
			513,
			515,
			516,
			517,
			518,
			519,
			521,
			522,
			523,
			524,
			525,
			526,
			528,
			530,
			531,
			533,
			534,
			537,
			540,
			541,
			544,
			546,
			547,
			549,
			550,
			553,
			554,
			557,
			560,
			567,
			568,
			569,
			572,
			574,
			575,
			576,
			577,
			578,
			579,
			580,
			581,
			583,
			584,
			586,
			592,
			593,
			594,
			595,
			596,
			597,
			598,
			599,
			600,
			601,
			603,
			604,
			605,
			606,
			607,
			608,
			609,
			611,
			612,
			614,
			623,
			633,
			634,
			637,
			644,
			648,
			649,
			652,
			653,
			654,
			656,
			657,
			658,
			660,
			661,
			662,
			663,
			664,
			665,
			666,
			667,
			668,
			670,
			676,
			677,
			678,
			679,
			680,
			682,
			684,
			685,
			686,
			687,
			688,
			689,
			690,
			691,
			692,
			693,
			695,
			696,
			699,
			700,
			701,
			702,
			703,
			704,
			705,
			706,
			707,
			708,
			712,
			713,
			715,
			716,
			717,
			718,
			719,
			720,
			723,
			724,
			725,
			726,
			727,
			728,
			729,
			730,
			731,
			732,
			734,
			735,
			736,
			738,
			739,
			740,
			741,
			742,
			743,
			744,
			745,
			746,
			747,
			748,
			749,
			750,
			751,
			752,
			753,
			754,
			755,
			756,
			757,
			758,
			759,
			760,
			761,
			762,
			763,
			764,
			765,
			766,
			768,
			769,
			771,
			773,
			774,
			775,
			776,
			779,
			780,
			782,
			783,
			784,
			785,
			786,
			787,
			788,
			789,
			790,
			791,
			792,
			793,
			794,
			795,
			796,
			797,
			798,
			800,
			801,
			802,
			803,
			804,
			805,
			806,
			807,
			808,
			809,
			810,
			811,
			813,
			814,
			815,
			816,
			817,
			818,
			819,
			820,
			821,
			822,
			823,
			824,
			826,
			827,
			828,
			829,
			830,
			831,
			832,
			833,
			834,
			835,
			836,
			838,
			839,
			840,
			841,
			842,
			843,
			844,
			846,
			849,
			850,
			851,
			852,
			853,
			854,
			855,
			856,
			857,
			858,
			859,
			860,
			861,
			862,
			863,
			864,
			865,
			867,
			868,
			869,
			870,
			871,
			872,
			873,
			874,
			875,
			876,
			877,
			878,
			879,
			880,
			881,
			882,
			883,
			884,
			885,
			886,
			887,
			888,
			889,
			890,
			891,
			892,
			893,
			894,
			895,
			896,
			897,
			898,
			900,
			902,
			903,
			904,
			905,
			906,
			907,
			908,
			909,
			910,
			912,
			913,
			914,
			915,
			916,
			917,
			918,
			919,
			920,
			921,
			922,
			923,
			924,
			925,
			926,
			927,
			928,
			929,
			930,
			931,
			932,
			933,
			934,
			935,
			936,
			937,
			938,
			939,
			940,
			941,
			942,
			943,
			944,
			945,
			946,
			947,
			948,
			949,
			950,
			951,
			952,
			954,
			955,
			956,
			957,
			958,
			959,
			960,
			961,
			962,
			963,
			964,
			965,
			966,
			967,
			968,
			969,
			970,
			971,
			972,
			973,
			974,
			975,
			976,
			977,
			978,
			979,
			980,
			981,
			982,
			983,
			984,
			985,
			986,
			987,
			988,
			989,
			990,
			991,
			992,
			993,
			994,
			995,
			996,
			997,
			998,
			999,
			1000,
			1001,
			1002,
			1003,
			1004,
			1005,
			1006,
			1007,
			1008,
			1009,
			1010,
			1011,
			1012,
			1013,
			1014,
			1015,
			1016,
			1017,
			1018,
			1019,
			1020,
			1021,
			1022,
			1023,
			1024,
			1025,
			1026,
			1027,
			1028,
			1029,
			1030,
			1031,
			1032,
			1033,
			1034,
			1035,
			1036,
			1037,
			1038,
			1039,
			1040,
			1041,
			1042,
			1043,
			1044,
			1045,
			1046,
			1047,
			1048,
			1049,
			1050,
			1051,
			1052,
			1054,
			1055,
			1056,
			1057,
			1058,
			1059,
			1060,
			1061,
			1062,
			1063,
			1064,
			1065,
			1066,
			1067,
			1068,
			1069,
			1070,
			1071,
			1072,
			1073,
			1074,
			1075,
			1076,
			1077,
			1078,
			1079,
			1080,
			1081,
			422,
			429,
			444,
			454,
			460,
			462,
			469,
			470,
			486,
			538,
			636,
			655,
			778,
			404,
			428,
			422,
			428,
			457,
			539,
			204,
			205,
			206,
			217,
			300,
			302,
			314,
			316,
			319,
			328,
			332,
			334,
			336,
			351,
			352,
			384,
			466,
			588,
			353,
			55,
			108,
			136,
			152,
			164,
			168,
			170,
			174,
			176,
			182,
			184,
			186,
			191,
			212,
			215,
			218,
			224,
			226,
			232,
			234,
			234,
			261,
			261,
			261,
			261,
			266,
			285,
			322,
			552,
			590,
			610,
			617,
			683,
			342,
			342,
			847,
			848,
			770,
			825,
			722,
			837,
			234,
			571,
			616,
			253,
			292,
			911,
			697,
			845);
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


			//$finalamount += $totalarrear;
}
/*if ($pran_no==null){
	$gpfcontribution = round($finalsalary*80/100);
}
else {
	$gpfcontribution = round($finalsalary*70/100);
	$npscontribution = round($finalsalary*10/100);
	//echo $gpfcontribution;
}
			//$finalamount += $totalarrear;
			$finalsalaryall += $finalsalary;
			$gpfcontributionall += $gpfcontribution;
			$npscontributionall += $npscontribution;
			$incometax2019all += $incometax2019;
			$vetanmoreall += $vetanmore;
			$finalarrearall += $finalarrear;
			$netpay= $finalsalary-($gpfcontribution+$npscontribution+$incometax2019);
			$netpayall += $netpay;*/

			$yog = $arrear2019;
			$roundoff2019= round($arrear2019);
			$vatanall += $roundoff2019;
			if($gpf2019 == 0){
				$newvar = $roundoff2019-$incometax2019;
			}
			else if ($PRAN_NO == null){
				$gpf2019 = round($roundoff2019*80/100);
				$newvar = ($roundoff2019-$incometax2019)-$gpf2019;
			}
			else {
				$gpf2019 = round($roundoff2019*70/100);
				$nps = round($roundoff2019*10/100);
				$newvar = round($roundoff2019-$gpf2019-$incometax2019-$nps);
			}
			//$gpf = round($roundoff*80/100);
			//$incometax2019 = number(document.getElementById('incometax2019').value);
			//echo $incometax2019;
			//$gpf2019 = round($roundoff2019-$incometax2019);

			//$deductions = $gpf2019+$nps;
			//$payable = round($gpf2019-$deductions);
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
			echo"<td><font color='black'>" .$name."</font></td>";
			echo"<td><font color='black'>" .$designation."</font></td>";
			echo"<td><font color='black'>" .$pran_no." ".$pf_no."</font></td>";
			echo"<td><font color='black'>" .$ppf_no."/bank:".$ppf_bank."</font></td>";
			echo"<td width='100'><font color='black'> 01.01.2016 से <br /> 31.12.2016</font></td>";
			echo"<td bgcolor='#D4DEEE'><font color='black'>" .$roundoff2019."</font></td>";
			echo"<td bgcolor='#D4DEEE'><font color='black'>0.00</font></td>";
			echo"<td bgcolor='#D4DEEE'><font color='black'>" .$roundoff2019."</font></td>";
			echo"<td><font color='black'>" .$gpf2019."</font></td>";
			echo"<td><font color='black'>" .$nps."</font></td>";
			//echo"<td bgcolor='#DFF5DD'><font color='black'>" .$totalsalaryold."</font></td>";
			echo"<td bgcolor='#DFF5DD'>" .$incometax2019."</font></td>";
			echo"<td bgcolor='#DFF5DD'>" .$finalpayable."</font></td>";
			//echo"<td bgcolor='#F6E1DE'><font color='black'>" .$diffsalary."</font></td>";
			echo"<td bgcolor='#F6E1DE'><font color='black'></font></td>";
			echo"<td bgcolor='#F6E1DE'><font color='black'>" .$finalpayable."</font></td>";
			echo"<td><font color='black'>" .$bank_name."</font></td>";
			echo"<td><font color='black'>" .$bankaccount."</font></td>";
			echo "</tr>";
	}

mysql_close($conn);
?>
<?php
echo "<tr align='left' style='font-weight:bold'>";
echo"<td style='border-right:none'><font color='black'></font></td>";
echo"<td style='border-left:none; border-right:none'><font color='black'></font></td>";
echo"<td style='border-left:none; border-right:none'><font color='black'></font></td>";
echo"<td style='border-left:none; border-right:none'><font color='black'></font></td>";
echo"<td style='border-left:none; border-right:none'><font color='black'></font></td>";
echo"<td style='border-right:none; border-right:none'><font color='black'>कुल योग</font></td>";
echo"<td bgcolor='#D4DEEE'><font color='black'>" .$vatanall."</font></td>";
echo"<td bgcolor='#D4DEEE'><font color='black'>0.00</font></td>";

echo"<td bgcolor='#D4DEEE'><font color='black' weight='900'>" .$vatanall."</font></td>";
echo"<td><font color='black'>" .$gpf2019all."</font></td>";
echo"<td><font color='black'>" .$nps2019all."</font></td>";
//echo"<td bgcolor='#DFF5DD'><font color='black'>" .$totalsalaryold."</font></td>";
echo"<td bgcolor='#DFF5DD'>" .$incometax2019all."</font></td>";
echo"<td bgcolor='#DFF5DD'>" .$finalpayableall."</font></td>";
//echo"<td bgcolor='#F6E1DE'><font color='black'>" .$diffsalary."</font></td>";
echo"<td bgcolor='#F6E1DE'><font color='black'></font></td>";
echo"<td bgcolor='#F6E1DE'><font color='black'>" .$finalpayableall."</font></td>";
echo"<td style='border-left:none; border-right:none'><font color='black'></font></td>";
echo"<td style='border-left:none'><font color='black'></font></td>";
echo "</tr>";
?>
 </table>

            <br />
						<br />

						<p style="text-align:justify">प्रमाणित किया जाता है कि वेतन बिल में दिखाये गये अल्पकालीन रिक्तियों मंे नियुक्त कर्मचारियों को छोड़कर समस्त कर्मचारियों/अधिकारियों के वेतन में सामूहिक
बीमा हेतु निर्धारित कटौती कर ली गयी है और कटौती की कुल धनराशि वेतन बिल में दिखा दी गयी है।
प्रमाणित किया जाता है कि (1) जिन राजकीय कर्मचारियों/अधिकारियों का मकान किराया भत्ता इस बिल में आहरित किया गया है वे अपने निजी आवास/किराये
पर निवास करते है।(2) जिन राजकीय कर्मचारियों/अधिकारियों का मकान किराया भत्ता इस बिल में आहरित किया गया है; से निर्धारित प्रमाण पत्र प्राप्त कर लिया
गया है और मैने समाधान कर लिया है कि क्लैम सरकारी आदेश के अनुरूप है।	</p><br />
<br />
<p style="page-break-after: always;">&nbsp;</p>
<p style="page-break-before: always;">&nbsp;</p>
<table cellpadding=0 cellspacing=0 border-collapse=collapse style="line-height:13px; border:hidden">
	<tr>
		<td width="50%"  valign="top" >
						<table width="100%" valign="top">
							<tr style="border:hidden"><td>कुल पावना (क)			रूपया		<span style="float:right"><h4><?php echo $vatanall ?></h4></span></td></tr>
							<tr style="border:hidden"><td>घटाइये-वेतन की अवतरित धनराशि</td></tr>
							<tr style="border:hidden"><td>जिसका विवरण नीचे अंकित है।(-)</td></tr>
							<tr style="border:hidden"><td>कटौतियां जो राज्य लेखा शीर्षक से सम्बन्धित है।<hr /></td></tr>
							<tr style="border:hidden"><td>जी0पी0एफ0/एन0पी0एस0					<span style="float:right"><h4><?php echo $gpf2019all ?></h4></span></td></tr>
							<tr style="border:hidden"><td>सामूहिक जीवन बीमा में अंशदान <hr /></td></tr>
							<tr style="border:hidden"><td>कटौतियों का योग (ख)					<hr /></td></tr>
							<tr style="border:hidden"><td>कटौतियों जो राज्य लेखा शीर्षक से संबंधित नहीं है। <span style="float:right"><h4><?php echo $incometax2019all ?></h4></span></td></tr>
							<tr style="border:hidden"><td>कटौतियों का योग (ग)					</td></tr>
							<tr style="border:hidden"><td><hr />शुद्ध देय धनराशि (क-ख-ग)					<span style="float:right"><h4><?php echo $finalpayableall ?></h4></span><hr /></td></tr>
							<tr style="border:hidden"><td>सोसाइटी</td></tr>
							<tr style="border:hidden"><td>PPF Contribution				<span style="float:right"><h4><?php echo $nps2019all ?></h4></td></tr>
							<tr style="border:hidden"><td>अवशेष देय धनराशि					<span style="float:right"><h4><?php echo $finalpayableall ?></td></tr>
							<tr style="border:hidden"><td>शब्दों में रूपया- <span style="float:right"><input type="text" style="border:none; text-align:right" size="40" text-align="right"></span></td></tr><br /><br />
							<tr style="border:hidden"><td>	लखनऊ।	<span style="padding-left:50%">आहरण एवं वितरण अधिकारी</span><br />दिनांक	<span style="padding-left:58%">(मुहर)</span></td></tr>
					</table>
				</td>
				<td width="50%" style="line-height:20px" valign="top">प्राप्ति स्वीकार<br />प्रमाणित किया जाता है कि इस देयक में प्रस्तुत गया दावा सही एवं नियमानुसार देय है तथा पूर्व में आहरित नहीं किया गया है। संगत नियमों तथा आदेशों की समस्त औपचारिकताएं पूुरी करने के बाद देयक प्रस्तुत किया जा रहा है। देयक के अवयवों की प्राप्ति स्वीकार की जाती है।
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<br />
					<center>आहरण एवं वितरण अधिकारी <br />
					(मुहर)</center>
				</td>
			</tr>
		</table>
<br />
<table width="100%" style="line-height:13px">
	<tr><td width="60%">
	वेतन की अवितरित धनराशि का विवरण<br />
	<table width="100%" style="line-height:13px">
		<tr width="100%"><td>पदनाम</td><td>धारक का नाम</td><td>अवधि</td><td>धनराशि रू0</td></tr>
		<tr><td><br /></td><td></td><td></td><td></td></tr>
		<tr><td><br /></td><td></td><td></td><td></td></tr>
	</table></td>
	<td width="40%"><center>भुगतान आदेश<br />पाश्र्वाकित विवरण के अनुसार<br />रूपया <br />का भुगतान स्वीकार<br /><br />इण्टरनल आडिटर&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp	अनुभाग अधिकारी		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	विशेष सचिव एवं वित्त नियंत्रक </center></td></tr>
</table>
<hr />
<center><p><h4>निम्न विवरण के अनुसार चेक निर्गत हुआ</h4></p></center>
<table style="line-height:13px">
	<tr><td width="15%">सब बाउचर संख्या	</td>
	<td width="15%">कटौतियां, वसूलियां जो संकलित विवरण रजिस्टर में चेक निर्गत करने हेतु अंकित की गई	</td>
<td width="70%">
	<table width="100%" style="line-height:13px">
		<center><p>निर्गत हुए चेक का विवरण</p></center>
<tr>
<td>चेक संख्या </td>
<td>दिनांक</td>
<td>धनराशि</td>
<td>	बैंक/कोषागार का नाम	</td>
<td>व्यक्ति/पाटी का नाम जिसके पक्ष में जारी हुआ</td>
</tr>
<tr>
<td><br /></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr></table></td></tr>
<tr><td width="15%">	<br /></td>
<td width="15%">	</td>
<td width="70%"></td>
</tr>
</table>
<br />
<p><span style="float:left">इण्टरनल आडिटर</span><span style="padding-left:35%">अनुभाग अधिकारी</span><span style="float:right">विशेष सचिव</span>

	<p style="page-break-after: always;">&nbsp;</p>
	<p style="page-break-before: always;">&nbsp;</p>
	<h2>महालेखाकार कार्यालय में प्रयुक्त हेत।</h2>
	<span>रूपया</span><span style="padding-left:25%"> पैसे के लिए स्वीकार</span><br />
	<span>रूपया</span><span style="padding-left:25%"> पैसे के लिए स्वीकार</span><br />
	<span>आडीटर</span><span style="padding-left:25%"> सेक्सन आफीसर</span>
	<hr />
	<table style="border:hidden" >
		<tr>
			<td width="50%">
<table width="100%" style="line-height:13px">
		<tr style="border:hidden"><td>विवरण					रू0     पैसे</td></tr>
		<tr style="border:hidden"><td>पावना</td></tr>
		<tr style="border:hidden"><td>वेतन का योग							<span style="float:right"><h4><?php echo $vatanall ?></h4></span></td></tr>
		<tr style="border:hidden"><td>मंहगाई वेतन का योग				<span style="float:right"><h4><?php echo "0.00" ?></h4></span>	</td></tr>
		<tr style="border:hidden">	<td>अन्य भत्ते												</td></tr>
		<tr style="border:hidden"><td>	नगर प्रतिकर भत्ता						</td></tr>
		<tr style="border:hidden"><td>विशेष भत्ता			</td></tr>
		<tr style="border:hidden"><td>मकान किराया भत्ता					</td></tr>
		<tr style="border:hidden"><td>अन्य भत्तों का योग-</td></tr>
		<tr style="border:hidden"><td><hr />कुल पावना (क)					<span style="float:right"><h4><?php echo $vatanall ?></h4><hr /></td></tr>
		<tr style="border:hidden"><td>कटौतिया जो राज्य लेखा शीर्षक से सम्बन्धित है:-</td></tr>
		<tr style="border:hidden"><td>जी0पी0एफ0/एन0पी0एस0					<span style="float:right"><h4><?php echo $gpf2019all ?></h4></td></tr>
		<tr style="border:hidden"><td>सामूहिक जीवन बीमा में अंशदान					</td></tr>
		<tr style="border:hidden"><td>कटौतियों का योग (ख)					</td></tr>
		<tr style="border:hidden"><td>कटौतियों जो राज्य लेखा शीर्षक से संबंधित नहीं है।</td></tr>
		<tr style="border:hidden"><td>आयकर <span style="float:right"><h4><?php echo $incometax2019all ?></td></tr>
		<tr style="border:hidden"><td>कटौतियों का योग (ग)					</td></tr>
		<tr style="border:hidden"><td><hr />शुद्ध देय धनराशि (क-ख-ग)<span style="float:right"><h4><?php echo $finalpayableall ?></h4><hr /></td></tr>
		<tr style="border:hidden"><td>अन्य कटौतियां </td></tr>
		<tr style="border:hidden"><td>PPF Contribution <span style="float:right"><h4><?php echo $nps2019all ?></h4></td></tr>
		<tr style="border:hidden"><td>सोसाइटी					</td></tr>
		<tr style="border:hidden"><td>अवशेष देय धनराशि					<span style="float:right"><h4><?php echo $finalpayableall ?></h4></td></tr>
		<tr style="border:hidden"><td>शब्दों में रूपया- <span style="float:right"><input type="text" style="border:none; text-align:right" size="40" text-align="right"></span></td></tr>
	</tr>
</table>
			</td>
			<td width="30%" valign="top">अनुदान संख्या 68 लेखा शीर्षक <br />2011 संसद/राज्य/संघ राज्य क्षेत्र विधान मण्डल-आयोजनेत्तर <br />02-राज्य/संघ राज्य क्षेत्र विधान मण्डल	<br />103-विधान मण्डल सचिवालय	<br />03-विधान सभा सचिवालय <br />01-वेतन-03-मंहगाई भत्ते-06-अन्य भत्ते</td>
			<td width="20%" valign="top">भुगतान की सूची का <br />बाउचर संख्या 	<br />वास्ते  <br />माह</td>
		</tr>
	</table> </p>

<!--<table id="" width="600">

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


<!--<input type="text" name="number" placeholder="Number OR Amount" onkeyup="word.innerHTML=convertNumberToWords(this.value)" />
<div id="word"></div>
<script>
function convertNumberToWords(amount) {
var words = new Array();
words[0] = '';
words[1] = 'एक ';
words[2] = 'दो ';
words[3] = 'तीन ';
words[4] = 'चार ';
words[5] = 'पांच ';
words[6] = 'छ: ';
words[7] = 'सात ';
words[8] = 'आठ ';
words[9] = 'नौ ';
words[10] = 'दस ';
words[11] = 'ग्यारह ';
words[12] = 'बारह ';
words[13] = 'तेरह ';
words[14] = 'चौदह ';
words[15] = 'पन्द्रह ';
words[16] = 'सोलह ';
words[17] = 'सत्रह ';
words[18] = 'अट्ठारह ';
words[19] = 'उन्नीस ';
words[20] = 'बीस ';
words[30] = 'तीस ';
words[40] = 'चालीस ';
words[50] = 'पचास ';
words[60] = 'साठ ';
words[70] = 'सत्तर ';
words[80] = 'अस्सी ';
words[90] = 'नब्बे ';
amount = amount.toString();
var atemp = amount.split(".");
var number = atemp[0].split(",").join("");
var n_length = number.length;
var words_string = "";
if (n_length <= 9) {
var n_array = new Array(0, 0, 0, 0, 0, 0, 0, 0, 0);
var received_n_array = new Array();
for (var i = 0; i < n_length; i++) {
	received_n_array[i] = number.substr(i, 1);
}
for (var i = 9 - n_length, j = 0; i < 9; i++, j++) {
	n_array[i] = received_n_array[j];
}
for (var i = 0, j = 1; i < 9; i++, j++) {
	if (i == 0 || i == 2 || i == 4 || i == 7) {
			if (n_array[i] == 1) {
					n_array[j] = 10 + parseInt(n_array[j]);
					n_array[i] = 0;
			}
	}
}
value = "";
for (var i = 0; i < 9; i++) {
	if (i == 0 || i == 2 || i == 4 || i == 7) {
			value = n_array[i] * 10;
	} else {
			value = n_array[i];
	}
	if (value != 0) {
			words_string += words[value] + " ";
	}
	if ((i == 1 && value != 0) || (i == 0 && value != 0 && n_array[i + 1] == 0)) {
			words_string += "करोड़  ";
	}
	if ((i == 3 && value != 0) || (i == 2 && value != 0 && n_array[i + 1] == 0)) {
			words_string += "लाख  ";
	}
	if ((i == 5 && value != 0) || (i == 4 && value != 0 && n_array[i + 1] == 0)) {
			words_string += "हज़ार  ";
	}
	if (i == 6 && value != 0 && (n_array[i + 1] != 0 && n_array[i + 2] != 0)) {
			words_string += "सौ और  ";
	} else if (i == 6 && value != 0) {
			words_string += "सौ  ";
	}
}
words_string = words_string.split("  ").join(" ");
}
return words_string;
}
</script>-->



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
 	            <!--<br />
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
</script>-->

<?php
/*include("db.php");
//$id =$_GET['ID_NO'];
mysql_query ("set character_set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
$result=mysql_query("SELECT * FROM calculations WHERE ID_NO=$id");
while($test = mysql_fetch_array($result, MYSQL_ASSOC))
{
$id = $test['ID_NO'];
echo	"<tr align='left'>";
echo"<td><font color='black'>" .$test['ID_NO']."</font></td>";
echo"<td><font color='black'>" .$test['EMP_NM']."</font></td>";
echo"<td><font color='black'>" .$test['DESIG']."</font></td>";
echo"<td width='100'><font color='black'> 01.01.2016 से <br /> 31.12.2016 तक </font></td>";
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
echo "</tr>";
//}
}
}*/
?>
