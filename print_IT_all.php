<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Vidhan Sabha Income Tax Form-16</title>

	<link rel='stylesheet' type='text/css' href='css/style1.css' />
	<link rel='stylesheet' type='text/css' href='css/print1.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example1.js'></script>

	<link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Halant" rel="stylesheet">


	<style type="text/css">
      table, th, td {
       border: 2px solid green;
      }
      tr.hide_right > td, td.hide_right{
        border-right-style:hidden;
      }
			tr.hide_left > td, td.hide_left{
        border-left-style:hidden;
      }
      tr.hide_all > td, td.hide_all{
        border-style:hidden;
      }
  }
</style>



</head>

<body>



	<div id="page-wrap">
		<div id="">


			<?php
			/*require("db.php");
			$id =$_REQUEST['C329'];
			$result = mysqli_query($conn, "SELECT * FROM fy2018_19");
			$test = mysqli_fetch_array($result);
			if (!$result)
			{
			die("Error: Data not found..");
			}
			$emp_id=$test['emp_id'];
			$name=$test['name'] ;
			$desig= $test['desig'] ;
			$pan= $test['pan'] ;
			$category= $test['category'] ;
			$sex= $test['sex'] ;
			$gpf_no= $test['gpf_no'] ;
			$pran_no= $test['pran_no'] ;
			$doj= $test['doj'] ;
			$dor= $test['dor'] ;
			$sd= $test['sd'] ;
			$mar= $test['mar'] ;
			$mar_all_noex= $test['mar_all_noex'] ;
			$mar_all_ex= $test['mar_all_ex'] ;
			$april= $test['april'] ;
			$april_all_noex= $test['april_all_noex'] ;
			$april_all_ex= $test['april_all_ex'] ;
			$may= $test['may'] ;
			$may_all_noex= $test['may_all_noex'] ;
			$may_all_ex= $test['may_all_ex'] ;
			$june= $test['june'] ;
			$june_all_noex= $test['june_all_noex'] ;
			$june_all_ex= $test['june_all_ex'] ;
			$july= $test['july'] ;
			$july_all_noex= $test['july_all_noex'] ;
			$july_all_ex= $test['july_all_ex'] ;
			$aug= $test['aug'] ;
			$aug_all_noex= $test['aug_all_noex'] ;
			$aug_all_ex= $test['aug_all_ex'] ;
			$sept= $test['sept'] ;
			$sept_all_noex= $test['sept_all_noex'] ;
			$sept_all_ex= $test['sept_all_ex'] ;
			$oct= $test['oct'] ;
			$oct_all_noex= $test['oct_all_noex'] ;
			$oct_all_ex= $test['oct_all_ex'] ;
			$nov= $test['nov'] ;
			$nov_all_noex= $test['nov_all_noex'] ;
			$nov_all_ex= $test['nov_all_ex'] ;
			$december= $test['december'] ;
			$dec_all_noex= $test['dec_all_noex'] ;
			$dec_all_ex= $test['dec_all_ex'] ;
			$jan= $test['jan'] ;
			$jan_all_noex= $test['jan_all_noex'] ;
			$jan_all_ex= $test['jan_all_ex'] ;
			$feb= $test['feb'] ;
			$feb_all_noex= $test['feb_all_noex'] ;
			$feb_all_ex= $test['feb_all_ex'] ;
			$da_arr= $test['da_arr'] ;
			$arr= $test['arr'] ;
			$bonus= $test['bonus'] ;
			$other_income= $test['other_income'] ;
			$hra= $test['hra'] ;
			$wash_all= $test['wash_all'] ;
			$hra= $test['hra'] ;
			$hon= $test['hon'] ;
			$hba_int= $test['hba_int'] ;
			$_80ccc= $test['80ccc'] ;
			$it_ded= $test['it_ded'] ;
			$da_gpf= $test['da_gpf'] ;
			$gpf= $test['gpf'] ;
			$gis= $test['gis'] ;
			$nsc_ppf= $test['nsc_ppf'] ;
			$nsc_int= $test['nsc_int'] ;
			$lic= $test['lic'] ;
			$ulip= $test['ulip'] ;
			$hba= $test['hba'] ;
			$education= $test['education'] ;
			$sec_89= $test['sec_89'] ;
			$cm_hon= $test['cm_hon'] ;
			$_80d= $test['80d'] ;
			$income_other= $test['income_other'] ;
			$mar_ded= $test['mar_ded'] ;
			$mar_dt= $test['mar_dt'] ;
			$apr_ded= $test['apr_ded'] ;
			$apr_dt= $test['apr_dt'] ;
			$may_ded= $test['may_ded'] ;
			$may_dt= $test['may_dt'] ;
			$june_ded= $test['june_ded'] ;
			$june_dt= $test['june_dt'] ;
			$july_ded= $test['july_ded'] ;
			$july_dt= $test['july_dt'] ;
			$aug_ded= $test['aug_ded'] ;
			$aug_dt= $test['aug_dt'] ;
			$sept_ded= $test['sept_ded'] ;
			$sept_dt= $test['sept_dt'] ;
			$oct_ded= $test['oct_ded'] ;
			$oct_dt= $test['oct_dt'] ;
			$nov_ded= $test['nov_ded'] ;
			$nov_dt= $test['nov_dt'] ;
			$dec_ded= $test['dec_ded'] ;
			$dec_dt= $test['dec_dt'] ;
			$jan_ded= $test['jan_ded'] ;
			$jan_dt= $test['jan_dt'] ;
			$feb_ded= $test['feb_ded'] ;
			$feb_dt= $test['feb_dt'] ;
			$other_ded= $test['other_ded'] ;
			$other_dt= $test['other_dt'] ;
			$other_ded1= $test['other_ded1'] ;
			$other_dt1= $test['other_dt1'] ;
			$med_rem= $test['med_rem'] ;
			$nps= $test['nps'] ;
			//$Follow_Up= $test['Follow_Up'] ;
			//$Extra_Work= $test['Extra_Work'] ;
			$sal_all = $mar+$april+$may+$june+$july+$aug+$sept+$oct+$nov+$december+$jan+$feb;

			/*if(isset($_POST['save']))
			{
			//$Name_save = $_POST['Name'];
			$name_save=$_POST['name'] ;
			$desig_save= $_POST['desig'] ;
			$BANK_NM_save= $_POST['BANK_NM'] ;
			$BANK_AC_NM_save= $_POST['BANK_AC_NO'] ;
			$GRAD_PAY_save= $_POST['GRAD_PAY'] ;
			$SCALE_save= $_POST['SCALE'] ;
			$PF_NO_save= $_POST['PF_NO'] ;
			$BASIC_PAY_save= $_POST['BASIC_PAY'] ;
			$BP_CAL_save= $_POST['BP_CAL'] ;
			//$Others= $_POST['Others'] ;

			mysqli_query("UPDATE fy2018-19 SET $name='$name_save', Date='$Date_save' WHERE sr = '$id'")
			or die(mysqli_error());
			echo "Saved!";
			header("Location: arrear2018.php");
			}
			mysqli_close($conn);*/
			?>

			<?php
			require("db.php");
			//$id =$_REQUEST['C329'];
			$result = mysqli_query($conn, "SELECT * FROM annexure2018_19 INNER JOIN fy2018_19 ON annexure2018_19.C329 = fy2018_19.emp_id");
			$value = mysqli_fetch_all($result,MYSQLI_ASSOC);
			//$value = mysqli_fetch_array($result);
			$length = count($value);
			for ($i = 0; $i < $length; $i++) {
  		//echo json_encode($value[$i]['C329']);
			//echo json_encode($value[$i]['C333']);

			$desig = $value[$i]['desig'];
			$C329=$value[$i]['C329'];

			$C333= $value[$i]['C333'];
			$C331= $value[$i]['C331'];
			$C330= $value[$i]['C330'];
			//$sex= $value[$i]['sex'];
			//$gpf_no= $value[$i]['gpf_no'];
			//$pran_no= $value[$i]['pran_no'];
			//$doj= $value[$i]['doj'];
			//$dor= $value[$i]['dor'];
			//$sd= $value[$i]['sd'];
			$C332= $value[$i]['C332'];
			$C333= $value[$i]['C333'];
			$C334= $value[$i]['C334'];
			$C334A= $value[$i]['C334A'];
			$C335= $value[$i]['C335'];
			$C336= $value[$i]['C336'];
			$C337= $value[$i]['C337'];
			$C338= (int) $value[$i]['C338'];
			$C339= $value[$i]['C339'];
			$C340= $value[$i]['C340'];
			$C341= $value[$i]['C341'];
			$C342= $value[$i]['C342'];
			$C343= $value[$i]['C343'];
			$C344= $value[$i]['C344'];
			$C345= $value[$i]['C345'];
			$C346= $value[$i]['C346'];
			$C347= (int) $value[$i]['C347'];
			$C348= $value[$i]['C348'];
			$C349= $value[$i]['C349'];
			$C350= $value[$i]['C350'];
			$C351= $value[$i]['C351'];
			$C352= $value[$i]['C352'];
			$C353= $value[$i]['C353'];
			$C354= $value[$i]['C354'];
			$C355= $value[$i]['C355'];
			$C356= $value[$i]['C356'];
			$C357= $value[$i]['C357'];
			$C358= $value[$i]['C358'];
			$C359= $value[$i]['C359'];
			$C360= $value[$i]['C360'];
			$C361= $value[$i]['C361'];
			$C362= $value[$i]['C362'];
			$C363= $value[$i]['C363'];
			$C364= $value[$i]['C364'];
			$C365= $value[$i]['C365'];
			$C366= $value[$i]['C366'];
			$C367= $value[$i]['C367'];
			$C368= $value[$i]['C368'];
			$C369= $value[$i]['C369'];
			$C370= $value[$i]['C370'];
			$C371= $value[$i]['C371'];
			$C372= $value[$i]['C372'];
			$C373= $value[$i]['C373'];
			$C374= $value[$i]['C374'];
			$C375= $value[$i]['C375'];
			$C376= $value[$i]['C376'];
			$C377= $value[$i]['C377'];
			$C400 = $C338-$C347;
			$C401 = str_replace("-", " ",$C348);
			$C402 = $C352+$C354;
			//echo "$C329"."$C333";

			/*echo "<center><table width='90%'>";
			echo "<tbody><tr>";
			echo "<td colspan='9' width='90%'>";
			echo "<p><span style='padding-left:5%'>";
			echo $C329;
			echo "</span><span style='padding-left:30%; font-size:30px'>Form No-16</span><span style='padding-left:35%'>Annexure-III-B</span></p>";
			echo "<p>&nbsp;</p></td></tr>";
			echo "<tr>";
			echo "<td colspan='9' width='90%'>";
			echo "<p><em>Certified that under section 203 of the Income-Tax Act, 1961 for tax deducted at source from income chargeable under the head 'Salaries'</em></p></td></tr>";
			echo "<tr><td colspan='2' width='227'>";
			echo "<p><em>Name and Address of the Employer</em></p><h4>PRINCIPAL SECRETARY,</h4> <p><strong>LEGISLATIVE ASSEMBLY,U.P.</strong></p>";
			echo "<p><strong>&nbsp;</strong></p></td>";
			echo "<td colspan='7' width='232'><p><em>Name and Designation of the Employee</em></p>";
			echo "<p><strong>". $C332 . "</strong></p>";
			//echo "<p><strong><". $desig ."</strong></p>";
			echo "<p><strong>Legislative Assembly, U.P.</strong></p>";
			echo "</td></tr>";
			echo " <tr><td colspan='2' width='227'><p><strong>TAN-LKNU00448A</strong></p></td>
			<td colspan='7' width='232'>
			<p><strong>PAN- ". $C331 ."</strong></p></td></tr>";
			echo "<tr>
			<td colspan='9' width='90%'>
			<p><strong>TDS Circle- Salary Ward2(1), Lucknow</strong></p>
			</td>
			</tr>";
			echo "<tr>
			<td colspan='3' width='230'>
			<p><strong>Period: 01/04/2018 to 31/03/2019</strong></p>
			</td>
			<td colspan='6' width='230'>
			<p><strong>&nbsp;Assessment Year: 2019-20</strong></p>
			</td></tr>";
			echo "<tr><td colspan='9' width='90%'>
			<p><strong>Details of Salary Paid and any other income and tax deducted</strong></p>
			</td>	</tr>";
			echo "<tr>
			<td width='29'>
			<p>1.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Gross Salary</p>
			</td>
			</tr>";
			echo "<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Salary as per provisions contained in section 17(1)</p>
			</td>
			<td width='51'><p>&nbsp;</p></td>
			<td width='51'>
			<p>Rs. <strong> ". $C335 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p></td></tr>";


			echo "<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Value of perquisites under section 17(2) (as per Form No. 12BA, wherever applicable)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C336 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Profits in lieu of salary under section 17(3) (as per Form No. 12BA, wherever applicable)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C337 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C338 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Reported total amount of salary received from other employer(s)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C339 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>2.</p>
			</td>
			<td colspan='8' width='431'>
			<p><em>Less: </em>Allowances to the extent exempt under section 10</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Travel concession or assistance under section 10(5)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C340 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Death-cum-retirement gratuity under section 10(10)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C341 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Commuted value of pension under section 10(10A)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C342 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Cash equivalent of leave salary encashment under section 10(10AA)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C343 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>House rent allowance under section 10(13A)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C344 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(f)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Amount of any other exemption under section 10</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>clause &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C346 ."</strong></p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>clause &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(g)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of any other exemption under section 10</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C347 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(h)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of exemption claimed under section 10 [2(a)+2(b)+2(c)+2(d)+2(e)+2(g)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C348 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>3.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of salary received from current employer [1(d)-2(h)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C349 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>4.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Less: Deductions under section 16</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Standard deduction under section 16(ia)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C348 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Entertainment allowance under section 16(ii)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C349 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax on employment under section 16(iii)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C350 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>5.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of deductions under section 16 [4(a)+4(b)+4(c)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C351 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>6.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income chargeable under the head 'Salaries' [(3+1(e)-5]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C352 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>7.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Add: Any other income reported by the employee under as per section 192 (2B)</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income (or admissible loss) from house property reported by employee offered for TDS</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C352 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income under the head Other Sources offered for TDS</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C352 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>8.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of other income reported by the employee [7(a)+7(b)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. ...</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>9.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Gross total income (6+8)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. ...</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>10.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Deductions under Chapter VI-A</p>
			</td>
			</tr>
			<tr>
			<td colspan='6' width='341'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Gross</p>
			<p>Amount</p>
			</td>
			<td width='68'>
			<p>Deductible</p>
			<p>Amount</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of life insurance premia, contributions to provident fund etc. under section 80C</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution to certain pension funds</p>
			<p>under section 80CCC</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution by taxpayer to pension</p>
			<p>scheme under section 80CCD (1)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C358 ."</strong></p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total deduction under section 80C, 80CCC and 80CCD(1)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deductions in respect of amount paid/deposited to notified</p>
			<p>pension scheme under section 80CCD (1B)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C359 ."</strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C359 ."</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(f)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution by Employer to pension</p>
			<p>scheme under section 80CCD (2)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C360 ."</strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C360 ."</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(g)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of health insurance premia under section 80D</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C361 ."</strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C361 ."</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(h)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of interest on loan taken for higher education</p>
			<p>under section 80E</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C362 ."</strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C362 ."</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='5' width='290'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Gross Amount</p>
			</td>
			<td width='51'>
			<p>Qualifying Amount</p>
			</td>
			<td width='68'>
			<p>Deductible Amount</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(i)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total Deduction in respect of donations to certain funds,</p>
			<p>charitable institutions, etc. under section 80G</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C363 ."</strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C363 ."</strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C353 ."</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(j)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of interest on deposits in savings account</p>
			<p>under section 80TTA</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C364 ."</strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C364 ."</strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C364 ."</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(k)</p>
			</td>
			<td colspan='7' width='430'>
			<p>Amount deductible under any other provision(s) of Chapter VI‐A</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>section &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ."</strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ."</strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C365 ."</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>section &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(l)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total of amount deductible under any other provision(s) of</p>
			<p>Chapter VI‐A</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ."</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ."</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C365 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>11.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Aggregate of deductible amount under Chapter VI-A [10(a)+10(b)+10(c)+10(d)+10(e)+10(f)+10(g)+10(h)+10(i)</p>
			<p>10(j)+10(l)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C366 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>12.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total taxable income (9-11)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C367 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>13.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax on total income</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C368 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>14.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Rebate under section 87A, if applicable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C369 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>15.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Surcharge, wherever applicable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C370 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>16.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Health and education cess</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C371 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>17.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax payable (13+15+16-14)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C372 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>18.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Less: Relief under section 89 (attach details)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C372 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>19.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Net tax payable (17-18)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C373 ."</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>20.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Less tax deducted at source</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p><strong> ". $C376 ."</p>
			</td>
			<td width='1'>
			<p></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>21.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax payable or refundable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p><strong> ". $C377 ."</p>
			</td>
			<td width='1'>
			<p></p>
			</td>
			</tr>
			<tr>
			<td colspan='8' width='90%'>
			<p><strong><em>Verification</em></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='8' width='90%'>
			<p>&nbsp;</p>
			<p>I, <strong>Anju Agarwal</strong>, son/daughter of <strong>Shri Hari Shankar Agarwal</strong>,working in the capacity of Deputy Secretary &amp; Chief</p>
			<p>&nbsp;</p>
			<p>Accounts Officer do hereby certify that the information given above is true, complete and correct and is based on the books</p>
			<p>&nbsp;</p>
			<p>of account, documents, TDS statements, and other available records.</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='4' width='276'>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>Place: <strong>Lucknow</strong>;</p>
			</td>
			<td colspan='4' width='183'>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>(Signature of person responsible for deduction of tax)</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='4' width='276'>
			<p>Date <strong> ". date('d-m-y') ."</p>
			</td>
			<td colspan='4' width='183'>
			<p>Full Name : <strong>Anju Agarwal</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>&nbsp;</td>
			<td width='198'>&nbsp;</td>
			<td width='2'>&nbsp;</td>
			<td width='46'>&nbsp;</td>
			<td width='14'>&nbsp;</td>
			<td width='51'>&nbsp;</td>
			<td width='51'>&nbsp;</td>
			<td width='68'>&nbsp;</td>
			<td width='1'>&nbsp;</td>
			</tr>
			</tbody>
			</table>
			<p>&nbsp;</p>";*/
			echo "<center>
											<table  id='' width='90%'>
			<tbody>
			<tr>
			<td colspan='9' width='90%'>
			<p> <span style='padding-left:5%'> ". $C329 ." </span><span style='padding-left:30%; font-size:30px'>Form No-16</span><span style='padding-left:35%'>Annexure-III-B</span></p>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='9' width='90%'>
			<p><em>Certified that under section 203 of the Income-Tax Act, 1961 for tax deducted at source from income chargeable under the head 'Salaries'</em></p>
			</td>
			</tr>
			<tr>
			<td colspan='2' width='227'>
			<p><em>Name and Address of the Employer</em></p>
			<h4>PRINCIPAL SECRETARY,</h4>
			<p><strong>LEGISLATIVE ASSEMBLY,U.P.</strong></p>
			<p><strong>&nbsp;</strong></p>
			</td>
			<td colspan='7' width='232'>
			<p><em>Name and Designation of the Employee</em></p>
			<p><strong>". $C332 ."</strong></p>
			<p><strong>". $desig ."</strong></p>


			<p><strong>Legislative Assembly, U.P.</strong></p>

			</td>
			</tr>
			<tr>
			<td colspan='2' width='227'>
			<p><strong>TAN-LKNU00448A</strong></p>
			</td>
			<td colspan='7' width='232'>
			<p><strong>PAN- ". $C331 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td colspan='9' width='90%'>
			<p><strong>TDS Circle- Salary Ward2(1), Lucknow</strong></p>
			</td>
			</tr>
			<tr>
			<td colspan='3' width='230'>
			<p><strong>Period: 01/04/2018 to 31/03/2019</strong></p>
			</td>
			<td colspan='6' width='230'>
			<p><strong>&nbsp;Assessment Year: 2019-20</strong></p>
			</td>
			</tr>
			<tr>
			<td colspan='9' width='90%'>
			<p><strong>Details of Salary Paid and any other income and tax deducted</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>1.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Gross Salary</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Salary as per provisions contained in section 17(1)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C335 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Value of perquisites under section 17(2) (as per Form No. 12BA, wherever applicable)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C336 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Profits in lieu of salary under section 17(3) (as per Form No. 12BA, wherever applicable)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C337 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C338 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Reported total amount of salary received from other employer(s)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C339 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>2.</p>
			</td>
			<td colspan='8' width='431'>
			<p><em>Less: </em>Allowances to the extent exempt under section 10</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Travel concession or assistance under section 10(5)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C340 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Death-cum-retirement gratuity under section 10(10)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C341 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Commuted value of pension under section 10(10A)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C342 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Cash equivalent of leave salary encashment under section 10(10AA)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C343 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>House rent allowance under section 10(13A)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C344 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(f)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Amount of any other exemption under section 10</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>clause &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C346 ."</strong></p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>clause &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs.  </p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(g)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of any other exemption under section 10</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C346 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(h)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of exemption claimed under section 10 [2(a)+2(b)+2(c)+2(d)+2(e)+2(g)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C347 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>3.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of salary received from current employer [1(d)-2(h)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C400 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>4.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Less: Deductions under section 16</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Standard deduction under section 16(ia)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C401 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Entertainment allowance under section 16(ii)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C349 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax on employment under section 16(iii)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C350 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>5.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of deductions under section 16 [4(a)+4(b)+4(c)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C401 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>6.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income chargeable under the head 'Salaries' [(3+1(e)-5]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C351 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>7.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Add: Any other income reported by the employee under as per section 192 (2B)</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income (or admissible loss) from house property reported by employee offered for TDS</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C352 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income under the head Other Sources offered for TDS</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C354 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>8.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of other income reported by the employee [7(a)+7(b)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C402 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>9.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Gross total income (6+8)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C355 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>10.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Deductions under Chapter VI-A</p>
			</td>
			</tr>
			<tr>
			<td colspan='6' width='341'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Gross</p>
			<p>Amount</p>
			</td>
			<td width='68' class='hide_right'>
			<p>Deductible</p>
			<p>Amount</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of life insurance premia, contributions to provident fund etc. under section 80C</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C356 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>";

				if($C356<150000){
					$C403 = $C356;
				}
				else{
					$C403 = 150000;
				}

			echo "<p>Rs. <strong> ". $C403 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution to certain pension funds</p>
			<p>under section 80CCC</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C357 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C357 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution by taxpayer to pension</p>
			<p>scheme under section 80CCD (1)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C358 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C358 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total deduction under section 80C, 80CCC and 80CCD(1)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>";

			$C404 = (int) $C356	+ (int) $C357 + (int)$C358;
			$C405 = (int) $C403 + (int) $C357 + (int)$C358;

			if($C405<150000){
				$C405 = $C405;
			}
			else{
				$C405 = 150000;
			}


			echo "
			<td width='51'>
			<p>Rs. <strong> ". $C404 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C405 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deductions in respect of amount paid/deposited to notified</p>
			<p>pension scheme under section 80CCD (1B)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C359 ."</strong></p>
			</td>";


			if($C359<50000){
				$C406 = $C359;
			}
			else{
				$C406 = 50000;
			}


			echo "
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C406 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(f)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution by Employer to pension</p>
			<p>scheme under section 80CCD (2)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C360 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C360 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(g)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of health insurance premia under section 80D</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C361 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C361 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(h)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of interest on loan taken for higher education</p>
			<p>under section 80E</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C362 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C362 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='5' width='290'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Gross Amount</p>
			</td>
			<td width='51'>
			<p>Qualifying Amount</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Deductible Amount</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(i)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total Deduction in respect of donations to certain funds,</p>
			<p>charitable institutions, etc. under section 80G</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C363 ."</strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C363 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C363 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(j)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of interest on deposits in savings account</p>
			<p>under section 80TTA</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C364 ."</strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C364 ."</strong></p>
			</td>";


			if($C364<10000){
				$C407 = $C364;
			}
			else{
				$C407 = 10000;
			}


			echo "
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C407 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(k)</p>
			</td>
			<td colspan='7' width='430' class='hide_right'>
			<p>Amount deductible under any other provision(s) of Chapter VI‐A</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>section &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ."</strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ."</strong></p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C365 ."</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>section &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. ...</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(l)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total of amount deductible under any other provision(s) of</p>
			<p>Chapter VI‐A</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ."</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ."</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C365 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>11.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Aggregate of deductible amount under Chapter VI-A [10(a)+10(b)+10(c)+10(d)+10(e)+10(f)+10(g)+10(h)+10(i)</p>
			<p>10(j)+10(l)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C366 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>12.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total taxable income (9-11)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C367 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>13.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax on total income</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C368 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>14.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Rebate under section 87A, if applicable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C369 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>15.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Surcharge, wherever applicable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C370 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>16.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Health and education cess</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C371 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>17.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax payable (13+15+16-14)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C373 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>18.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Less: Relief under section 89 (attach details)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C372 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>19.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Net tax payable (17-18)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p>Rs. <strong> ". $C373 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>20.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Less tax deducted at source</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p><strong> ". $C374 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>21.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax payable or refundable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td  width='68' class='hide_right'>
			<p><strong> ". $C377 ."</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='8' width='90%' class='hide_right'>
			<p><strong><em>Verification</em></strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='8' width='90%' class='hide_right'>
			<p>&nbsp;</p>
			<p>I, <strong>Anju Agarwal</strong>, son/daughter of <strong>Shri Hari Shankar Agarwal</strong>,working in the capacity of Deputy Secretary &amp; Chief</p>
			<p>&nbsp;</p>
			<p>Accounts Officer do hereby certify that the information given above is true, complete and correct and is based on the books</p>
			<p>&nbsp;</p>
			<p>of account, documents, TDS statements, and other available records.</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='4' width='276'>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>Place: <strong>Lucknow</strong>;</p>
			</td>
			<td colspan='4' width='183' class='hide_right'>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>(Signature of person responsible for deduction of tax)</p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='4' width='276'>
			<p>Date <strong> ". date('d-m-y') ."</p>
			</td>
			<td colspan='4' width='183' class='hide_right'>
			<p>Full Name : <strong>Anju Agarwal</strong></p>
			</td>
			<td width='1' class='hide_left'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr >
			<td width='29' class='hide_right'>&nbsp;</td>
			<td width='198' class='hide_right'>&nbsp;</td>
			<td width='2' class='hide_right'>&nbsp;</td>
			<td width='46' class='hide_right'>&nbsp;</td>
			<td width='14' class='hide_right'>&nbsp;</td>
			<td width='51' class='hide_right'>&nbsp;</td>
			<td width='51' class='hide_right'>&nbsp;</td>
			<td  width='68' class='hide_right'>&nbsp;</td>
			<td width='1'>&nbsp;</td>
			</tr>

			</tbody>
			</table>
			<p>&nbsp;</p>";
			echo "<div class='pagebreak'> </div>";






			/*

			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Value of perquisites under section 17(2) (as per Form No. 12BA, wherever applicable)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C336 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Profits in lieu of salary under section 17(3) (as per Form No. 12BA, wherever applicable)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C337 ."</strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C338 ."</strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Reported total amount of salary received from other employer(s)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C339 ?></strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>2.</p>
			</td>
			<td colspan='8' width='431'>
			<p><em>Less: </em>Allowances to the extent exempt under section 10</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Travel concession or assistance under section 10(5)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C340 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Death-cum-retirement gratuity under section 10(10)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C341 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Commuted value of pension under section 10(10A)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C342 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Cash equivalent of leave salary encashment under section 10(10AA)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C343 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>House rent allowance under section 10(13A)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C344 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(f)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Amount of any other exemption under section 10</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>clause &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C346 ?></strong></p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>clause &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(g)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of any other exemption under section 10</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C347 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(h)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of exemption claimed under section 10 [2(a)+2(b)+2(c)+2(d)+2(e)+2(g)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C348 ?></strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>3.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of salary received from current employer [1(d)-2(h)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C349 ?></strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>4.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Less: Deductions under section 16</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Standard deduction under section 16(ia)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C348 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Entertainment allowance under section 16(ii)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C349 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax on employment under section 16(iii)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C350 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>5.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of deductions under section 16 [4(a)+4(b)+4(c)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C351 ?></strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>6.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income chargeable under the head 'Salaries' [(3+1(e)-5]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. <strong> ". $C352 ?></strong></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>7.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Add: Any other income reported by the employee under as per section 192 (2B)</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income (or admissible loss) from house property reported by employee offered for TDS</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C352 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Income under the head Other Sources offered for TDS</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C352 ?></strong></p>
			</td>
			<td colspan='2' width='68'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>8.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total amount of other income reported by the employee [7(a)+7(b)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. ...</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>9.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Gross total income (6+8)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td colspan='2' width='68'>
			<p>Rs. ...</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>10.</p>
			</td>
			<td colspan='8' width='431'>
			<p>Deductions under Chapter VI-A</p>
			</td>
			</tr>
			<tr>
			<td colspan='6' width='341'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Gross</p>
			<p>Amount</p>
			</td>
			<td width='68'>
			<p>Deductible</p>
			<p>Amount</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(a)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of life insurance premia, contributions to provident fund etc. under section 80C</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(b)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution to certain pension funds</p>
			<p>under section 80CCC</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(c)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution by taxpayer to pension</p>
			<p>scheme under section 80CCD (1)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C358 ?></strong></p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(d)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total deduction under section 80C, 80CCC and 80CCD(1)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(e)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deductions in respect of amount paid/deposited to notified</p>
			<p>pension scheme under section 80CCD (1B)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C359 ?></strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C359 ?></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(f)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of contribution by Employer to pension</p>
			<p>scheme under section 80CCD (2)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C360 ?></strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C360 ?></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(g)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of health insurance premia under section 80D</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C361 ?></strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C361 ?></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(h)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of interest on loan taken for higher education</p>
			<p>under section 80E</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C362 ?></strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C362 ?></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='5' width='290'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>Gross Amount</p>
			</td>
			<td width='51'>
			<p>Qualifying Amount</p>
			</td>
			<td width='68'>
			<p>Deductible Amount</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(i)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total Deduction in respect of donations to certain funds,</p>
			<p>charitable institutions, etc. under section 80G</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C363 ?></strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C363 ?></strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C353 ?></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(j)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Deduction in respect of interest on deposits in savings account</p>
			<p>under section 80TTA</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C364 ?></strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C364 ?></strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C364 ?></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(k)</p>
			</td>
			<td colspan='7' width='430'>
			<p>Amount deductible under any other provision(s) of Chapter VI‐A</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>section &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ?></strong></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ?></strong></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C365 ?></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>&nbsp;</p>
			</td>
			<td colspan='4' width='261'>
			<p>section &hellip;</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='51'>
			<p>Rs. ...</p>
			</td>
			<td width='68'>
			<p>Rs. ...</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>(l)</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total of amount deductible under any other provision(s) of</p>
			<p>Chapter VI‐A</p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ?></p>
			</td>
			<td width='51'>
			<p>Rs. <strong> ". $C365 ?></p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C365 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>11.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Aggregate of deductible amount under Chapter VI-A [10(a)+10(b)+10(c)+10(d)+10(e)+10(f)+10(g)+10(h)+10(i)</p>
			<p>10(j)+10(l)]</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C366 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>12.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Total taxable income (9-11)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C367 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>13.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax on total income</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C368 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>14.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Rebate under section 87A, if applicable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C369 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>15.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Surcharge, wherever applicable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C370 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>16.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Health and education cess</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C371 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>17.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax payable (13+15+16-14)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C372 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>18.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Less: Relief under section 89 (attach details)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C372 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>19.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Net tax payable (17-18)</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p>Rs. <strong> ". $C373 ?></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>20.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Less tax deducted at source</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p><strong> ". $C376 ?></p>
			</td>
			<td width='1'>
			<p></p>
			</td>
			</tr>
			<tr>
			<td width='29'>
			<p>21.</p>
			</td>
			<td colspan='4' width='261'>
			<p>Tax payable or refundable</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='51'>
			<p>&nbsp;</p>
			</td>
			<td width='68'>
			<p><strong> ". $C377 ?></p>
			</td>
			<td width='1'>
			<p></p>
			</td>
			</tr>
			<tr>
			<td colspan='8' width='90%'>
			<p><strong><em>Verification</em></strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='8' width='90%'>
			<p>&nbsp;</p>
			<p>I, <strong>Anju Agarwal</strong>, son/daughter of <strong>Shri Hari Shankar Agarwal</strong>,working in the capacity of Deputy Secretary &amp; Chief</p>
			<p>&nbsp;</p>
			<p>Accounts Officer do hereby certify that the information given above is true, complete and correct and is based on the books</p>
			<p>&nbsp;</p>
			<p>of account, documents, TDS statements, and other available records.</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='4' width='276'>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>Place: <strong>Lucknow</strong>;</p>
			</td>
			<td colspan='4' width='183'>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>(Signature of person responsible for deduction of tax)</p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td colspan='4' width='276'>
			<p>Date <strong> ". date('d-m-y') ?></p>
			</td>
			<td colspan='4' width='183'>
			<p>Full Name : <strong>Anju Agarwal</strong></p>
			</td>
			<td width='1'>
			<p>&nbsp;</p>
			</td>
			</tr>
			<tr>
			<td width='29'>&nbsp;</td>
			<td width='198'>&nbsp;</td>
			<td width='2'>&nbsp;</td>
			<td width='46'>&nbsp;</td>
			<td width='14'>&nbsp;</td>
			<td width='51'>&nbsp;</td>
			<td width='51'>&nbsp;</td>
			<td width='68'>&nbsp;</td>
			<td width='1'>&nbsp;</td>
			</tr>
			</tbody>
			</table>
			<p>&nbsp;</p>*/








			}
			mysqli_close($conn);
			?>


								</div>







</body>
<script>

</script>

</html>
<?php ob_end_flush(); ?>
