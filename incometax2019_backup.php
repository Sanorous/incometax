<?php ob_start(); ?>
<!DOCTYPE html>
<html class=" ">

<head>
        <!--
         * @Package: Ultra Admin - Responsive Theme
         * @Subpackage: Bootstrap
         * @Version: 1.0
         * This file is part of Ultra Admin Theme.
        -->
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Incometax : Vidhan Sabha Sachivalaya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->


        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <link href="assets/plugins/icheck/skins/minimal/minimal.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

     <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <link href="assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datepicker/css/datepicker.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/timepicker/css/timepicker.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/datetimepicker/css/datetimepicker.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/ios-switch/css/switch.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/typeahead/css/typeahead.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/multi-select/css/multi-select.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

       <script language=javascript>
<!--//

function dm(amount)
{
  string = "" + amount;
  dec = string.length - string.indexOf('.');
  if (string.indexOf('.') == -1)
  return string + '.00';
  if (dec == 1)
  return string + '00';
  if (dec == 2)
  return string + '0';
  if (dec > 3)
  return string.substring(0,string.length-dec+3);
  return string;
}



function calculate()
{

  QtyA = 0;  QtyB = 0;  QtyC = 0;
  TotA = 0;  TotB = 0;  TotC = 0;

  PrcA = 1.25; PrcB = 2.35; PrcC = 3.45;



  if (document.ofrm.qtyA.value > "")
     { QtyA = document.ofrm.qtyA.value };
  document.ofrm.qtyA.value = eval(QtyA);

  if (document.ofrm.qtyB.value > "")
     { QtyB = document.ofrm.qtyB.value };
  document.ofrm.qtyB.value = eval(QtyB);

  if (document.ofrm.qtyC.value > "")
     { QtyC = document.ofrm.qtyC.value };
  document.ofrm.qtyC.value = eval(QtyC);


  TotA = QtyA * PrcA;
  document.ofrm.totalA.value = dm(eval(TotA));

  TotB = QtyB * PrcB;
  document.ofrm.totalB.value = dm(eval(TotB));

  TotC = QtyC * PrcC;
  document.ofrm.totalC.value = dm(eval(TotC));


  Totamt =
     eval(TotA) +
     eval(TotB) +
     eval(TotC) ;

  document.ofrm.GrandTotal.value = dm(eval(Totamt));

}


function validNum(theForm)
{
  var checkOK = "0123456789.,";
  var checkStr = theForm.qtyA.value;
  var allValid = true;
  var validGroups = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch == "," && decPoints != 0)
    {
      validGroups = false;
      break;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("Please enter only digit characters in the \"Class A quantity\" field.");
    theForm.qtyA.focus();
    return (false);
  }

  if (decPoints > 1 || !validGroups)
  {
    alert("Please enter a valid number in the \"Class A quantity\" field.");
    theForm.qtyA.focus();
    return (false);
  }

  var checkOK = "0123456789.,";
  var checkStr = theForm.qtyB.value;
  var allValid = true;
  var validGroups = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch == "," && decPoints != 0)
    {
      validGroups = false;
      break;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("Please enter only digit characters in the \"Class B quantity\" field.");
    theForm.qtyB.focus();
    return (false);
  }

  if (decPoints > 1 || !validGroups)
  {
    alert("Please enter a valid number in the \"Class B quantity\" field.");
    theForm.qtyA.focus();
    return (false);
  }

  var checkOK = "0123456789.,";
  var checkStr = theForm.qtyC.value;
  var allValid = true;
  var validGroups = true;
  var decPoints = 0;
  var allNum = "";
  for (i = 0;  i < checkStr.length;  i++)
  {
    ch = checkStr.charAt(i);
    for (j = 0;  j < checkOK.length;  j++)
      if (ch == checkOK.charAt(j))
        break;
    if (j == checkOK.length)
    {
      allValid = false;
      break;
    }
    if (ch == ".")
    {
      allNum += ".";
      decPoints++;
    }
    else if (ch == "," && decPoints != 0)
    {
      validGroups = false;
      break;
    }
    else if (ch != ",")
      allNum += ch;
  }
  if (!allValid)
  {
    alert("Please enter only digit characters in the \"Class C quantity\" field.");
    theForm.qtyC.focus();
    return (false);
  }

  if (decPoints > 1 || !validGroups)
  {
    alert("Please enter a valid number in the \"Class C quantity\" field.");
    theForm.qtyC.focus();
    return (false);
  }


  calculate();
  return (true);
}


//-->
</script>

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->



                <section class="" style='margin-top:60px;width:100%;padding:15px 0 0 15px;'>

                    <table style="width:100%">
                        <tr>
                            <td style="font-size: x-large; font-weight: bold; text-align:center">Income Tax calculations : Vidhan Sabha Sachivalaya  </td>
                        </tr>
                        </table>

                        <?php
                        require("db.php");
                        $id =$_REQUEST['emp_id'];
                        $result = mysqli_query($conn, "SELECT * FROM fy2018_19 WHERE emp_id  = '$id'");
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

                        if(isset($_POST['save']))
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
                        mysqli_close($conn);
                        ?>

                        <form method="POST" action="update_tax.php" name="form" enctype="multipart/form-data">
                        <table style="width:100%">
                            <tr style="border: thin groove #800000">
                                <td style="width:10%">
                                    क्रमांक:-<span style="color:black; font-size:15px"><input type="text" name="emp_id" value="<?php echo $emp_id ?>" readonly></span>
                                </td>
                                <td style="width:30%">
                                    नाम:-<span style="color:black; font-size:15px"><input type="text" name="name" value="<?php echo $name ?>" ></span>
                                </td>
                                <td style="width:30%">
                                    पदनाम:-<span style="color:black; font-size:15px"><input type="text" name="desig" value="<?php echo $desig ?>" readonly></span>
                                </td>
                                <td style="width:15%">
                                    PPF_NO:-<span style="color:black; font-size:15px"><input type="text" name="gpf_no" value="<?php echo $gpf_no ?>" readonly></span>
                                </td>
                                <td style="width:15%">
                                    PPF_BANK:-<span style="color:black; font-size:15px"><input type="text" name="pran_no" value="<?php echo $pran_no ?>" readonly></span>
                                </td>
                            </tr>

                            <tr style="border: thin groove #800000">
                                <td style="width:20%">
                                    GRAD_PAY:-<span style="color:black; font-size:15px"><input type="text" name="pan" value="<?php echo $pan ?>" readonly></span>
                                </td>
                                <td style="width:20%">
                                    BANK_NM:-<span style="color:black; font-size:15px"><input type="text" name="category" value="<?php echo $category ?>" readonly></span>
                                </td>
                                <td style="width:30%">
                                    BANK_AC_NO:-<span style="color:black; font-size:15px"><input type="text" name="sex" value="<?php echo $sex ?>" readonly></span>
                                </td>
                                <td style="width:15%">
                                    PF_NO:-<span style="color:black; font-size:15px"><input type="text" name="doj" value="<?php echo $doj ?>" readonly></span>
                                </td>
                                <td style="width:15%">
                                    PRAN_NO:-<span style="color:black; font-size:15px"><input type="text" name="dor" value="<?php echo $dor ?>" readonly></span>
                                </td>
                            </tr>

                    </table>

                    <br />

                     <table style="width:100%">
                        <tr>
                            <td style="font-size: x-large; font-weight: bold; text-align:center"> गणना  </td>
                        </tr>
                        </table>


                      


<div class="clearfix"></div>
                    <!--php code start-->

          <!--Table-->
<table id="tablePreview" class="table">
<!--Table head-->
  <thead>
    <tr>
      <th>Month</th>
      <th>Total</th>
      <th>No Exemp</th>
      <th>Exempted</th>
      <th>Month</th>
      <th>Total</th>
      <th>No Exemp</th>
      <th>Exempted</th>
      <th>Month</th>
      <th>Total</th>
      <th>No Exemp</th>
      <th>Exempted</th>
    </tr>
  </thead>
  <!--Table head-->
  <!--Table body-->
  <tbody>
    <tr>
      <th scope="row">March</th>
      <td><input type="text" name="mar" id="basic" size="8" value="<?php echo $mar ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="mar_all_noex" id="basic" size="8" value="<?php echo $mar_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="mar_all_ex" id="basic" size="8" value="<?php echo $mar_all_ex ?>" onblur="calculateForm()"></td>
      <th scope="row">April</th>
      <td><input type="text" name="april" id="basic" size="8" value="<?php echo $april ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="april_all_noex" id="basic" size="8" value="<?php echo $april_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="april_all_ex" id="basic" size="8" value="<?php echo $april_all_ex ?>" onblur="calculateForm()"></td>
      <th scope="row">May</th>
      <td><input type="text" name="may" id="basic" size="8" value="<?php echo $may ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="may_all_noex" id="basic" size="8" value="<?php echo $may_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="may_all_ex" id="basic" size="8" value="<?php echo $may_all_ex ?>" onblur="calculateForm()"></td>
    </tr>
    <tr>
      <th scope="row">June</th>
      <td><input type="text" name="june" id="basic" size="8" value="<?php echo $june?>" onblur="calculateForm()"></td>
      <td><input type="text" name="june_all_noex" id="basic" size="8" value="<?php echo $june_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="june_all_ex" id="basic" size="8" value="<?php echo $june_all_ex ?>" onblur="calculateForm()"></td>
      <th scope="row">July</th>
      <td><input type="text" name="july" id="basic" size="8" value="<?php echo $july ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="july_all_noex" id="basic" size="8" value="<?php echo $july_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="july_all_ex" id="basic" size="8" value="<?php echo $july_all_ex ?>" onblur="calculateForm()"></td>
      <th scope="row">August</th>
      <td><input type="text" name="aug" id="basic" size="8" value="<?php echo $aug ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="aug_all_noex" id="basic" size="8" value="<?php echo $aug_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="aug_all_ex" id="basic" size="8" value="<?php echo $aug_all_ex ?>" onblur="calculateForm()"></td>
    </tr>
    <tr>
      <th scope="row">September</th>
      <td><input type="text" name="sept" id="basic" size="8" value="<?php echo $sept ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="sept_all_noex" id="basic" size="8" value="<?php echo $sept_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="sept_all_ex" id="basic" size="8" value="<?php echo $sept_all_ex ?>" onblur="calculateForm()"></td>
      <th scope="row">October</th>
      <td><input type="text" name="oct" id="basic" size="8" value="<?php echo $oct ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="oct_all_noex" id="basic" size="8" value="<?php echo $oct_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="oct_all_ex" id="basic" size="8" value="<?php echo $oct_all_ex ?>" onblur="calculateForm()"></td>
      <th scope="row">November</th>
      <td><input type="text" name="nov" id="basic" size="8" value="<?php echo $nov ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="nov_all_noex" id="basic" size="8" value="<?php echo $nov_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="nov_all_ex" id="basic" size="8" value="<?php echo $nov_all_ex ?>" onblur="calculateForm()"></td>
    </tr>
    <tr>
      <th scope="row">December</th>
      <td><input type="text" name="december" id="basic" size="8" value="<?php echo $december ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="dec_all_noex" id="basic" size="8" value="<?php echo $dec_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="dec_all_ex" id="basic" size="8" value="<?php echo $dec_all_ex ?>" onblur="calculateForm()"></td>
      <th scope="row">January</th>
      <td><input type="text" name="jan" id="basic" size="8" value="<?php echo $jan ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="jan_all_noex" id="basic" size="8" value="<?php echo $jan_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="jan_all_ex" id="basic" size="8" value="<?php echo $jan_all_ex ?>" onblur="calculateForm()"></td>
      <th scope="row">February</th>
      <td><input type="text" name="feb" id="basic" size="8" value="<?php echo $feb ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="feb_all_noex" id="basic" size="8" value="<?php echo $feb_all_noex ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="feb_all_ex" id="basic" size="8" value="<?php echo $feb_all_ex ?>" onblur="calculateForm()"></td>
    </tr>
  </tbody>
  <!--Table body-->
</table>
<!--Table-->            <br />



<table style="width:100%">
   <tr>
       <td style="font-size: x-large; font-weight: bold; text-align:center"> Deductions and Incomes  </td>
   </tr>
   </table>


<div class="clearfix"></div>
<!--php code start-->

<!--Table-->
<table id="tablePreview" class="table">
<!--Table head-->
<thead>
<tr>
<th>Standard Deductions</th>
<th>DA Arrear</th>
<th>Arrear</th>
<th>Bonus</th>
<th>Other Income</th>
<th>HRA</th>
<th>Wash Allowance</th>
<th>Hon </th>
<th>C M Hon</th>
<th>Med Rem</th>
<th>inc oth</th>
<th>Sec 89</th>
</tr>
</thead>
<!--Table head-->
<!--Table body-->
<tbody>
<tr>
<td><input type="text" name="sd" id="basic" size="8" value="<?php echo $sd ?>" onblur="calculateForm()"></td>
<td><input type="text" name="da_arr" id="basic" size="8" value="<?php echo $da_arr ?>" onblur="calculateForm()"></td>
<td><input type="text" name="arr" id="basic" size="8" value="<?php echo $arr ?>" onblur="calculateForm()"></td>
<td><input type="text" name="bonus" id="basic" size="8" value="<?php echo $bonus ?>" onblur="calculateForm()"></td>
<td><input type="text" name="other_income" id="basic" size="8" value="<?php echo $other_income ?>" onblur="calculateForm()"></td>
<td><input type="text" name="hra" id="basic" size="8" value="<?php echo $hra ?>" onblur="calculateForm()"></td>
<td><input type="text" name="wash_all" id="basic" size="8" value="<?php echo $wash_all ?>" onblur="calculateForm()"></td>
<td><input type="text" name="hon" id="basic" size="8" value="<?php echo $hon ?>" onblur="calculateForm()"></td>
<td><input type="text" name="cm_hon" id="basic" size="8" value="<?php echo $cm_hon ?>" onblur="calculateForm()"></td>
<td><input type="text" name="med_rem" id="basic" size="8" value="<?php echo $med_rem ?>" onblur="calculateForm()"></td>
<td><input type="text" name="income_other" id="basic" size="8" value="<?php echo $income_other ?>" onblur="calculateForm()"></td>
<td><input type="text" name="sec_89" id="basic" size="8" value="<?php echo $sec_89 ?>" onblur="calculateForm()"></td>
</tr>
</tbody>
<thead>
<tr>
<th>HBA Interest</th>
<th>80 CCC</th>
<th>IT Ded</th>
<th>DA GPF</th>
<th>GPF</th>
<th>GIS</th>
<th>NSC PPF</th>
<th>NSC Interest </th>
<th>LIC</th>
<th>ULIP</th>
<th>HBA</th>
<th>Education</th>
<th>80D</th>
</tr>
</thead>
<tbody>
<tr>

<td><input type="text" name="hba_int" id="basic" size="8" value="<?php echo $hba_int ?>" onblur="calculateForm()"></td>
<td><input type="text" name="_80ccc" id="basic" size="8" value="<?php echo $_80ccc ?>" onblur="calculateForm()"></td>
<td><input type="text" name="it_ded" id="basic" size="8" value="<?php echo $it_ded ?>" onblur="calculateForm()"></td>

<td><input type="text" name="da_gpf" id="basic" size="8" value="<?php echo $da_gpf ?>" onblur="calculateForm()"></td>
<td><input type="text" name="gpf" id="basic" size="8" value="<?php echo $gpf ?>" onblur="calculateForm()"></td>
<td><input type="text" name="gis" id="basic" size="8" value="<?php echo $gis ?>" onblur="calculateForm()"></td>

<td><input type="text" name="nsc_ppf" id="basic" size="8" value="<?php echo $nsc_ppf ?>" onblur="calculateForm()"></td>
<td><input type="text" name="nsc_int" id="basic" size="8" value="<?php echo $nsc_int ?>" onblur="calculateForm()"></td>
<td><input type="text" name="lic" id="basic" size="8" value="<?php echo $lic ?>" onblur="calculateForm()"></td>
<td><input type="text" name="ulip" id="basic" size="8" value="<?php echo $ulip ?>" onblur="calculateForm()"></td>
<td><input type="text" name="hba" id="basic" size="8" value="<?php echo $hba ?>" onblur="calculateForm()"></td>
<td><input type="text" name="education" id="basic" size="8" value="<?php echo $education ?>" onblur="calculateForm()"></td>
<td><input type="text" name="_80d" id="basic" size="8" value="<?php echo $_80d ?>" onblur="calculateForm()"></td>
</tr>
</tbody>

</tbody>
<thead>
<tr>
<th>other ded</th>
<th>other date</th>
<th>other ded 1</th>
<th>other dt 1</th>
<th>nps</th>
<th>Med Rem</th>
</tr>
</thead>
<tbody>
<tr>

<td><input type="text" name="other_ded" id="basic" size="8" value="<?php echo $other_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="other_dt" id="basic" size="8" value="<?php echo $other_dt ?>" onblur="calculateForm()"></td>
<td><input type="text" name="other_ded1" id="basic" size="8" value="<?php echo $other_ded1 ?>" onblur="calculateForm()"></td>
<td><input type="text" name="other_dt1" id="basic" size="8" value="<?php echo $other_dt1 ?>" onblur="calculateForm()"></td>
<td><input type="text" name="nps" id="basic" size="8" value="<?php echo $nps ?>" onblur="calculateForm()"></td>
<td><input type="text" name="med_rem" id="basic" size="8" value="<?php echo $med_rem ?>" onblur="calculateForm()"></td>
</tr>
</tbody>


<!--Table body-->
</table>
<!--Table-->
<br />

<table style="width:100%">
   <tr>
       <td style="font-size: x-large; font-weight: bold; text-align:center"> Income Tax calculations  </td>
   </tr>
   </table>


<div class="clearfix"></div>
<!--php code start-->

<!--Table-->
<table id="tablePreview" class="table">
<!--Table head-->
<thead>
<tr>
<th>Month</th>
<th>Total</th>
<th>Date</th>

<th>Month</th>
<th>Total</th>
<th>Date</th>

<th>Month</th>
<th>Total</th>
<th>Date</th>

<th>Month</th>
<th>Total</th>
<th>Date</th>

</tr>
</thead>
<!--Table head-->
<!--Table body-->
<tbody>
<tr>
<th scope="row">March</th>
<td><input type="text" name="mar_ded" id="basic" size="8" value="<?php echo $mar_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="mar_dt" id="basic" size="8" value="<?php echo $mar_dt ?>" onblur="calculateForm()"></td>

<th scope="row">April</th>
<td><input type="text" name="apr_ded" id="basic" size="8" value="<?php echo $apr_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="apr_dt" id="basic" size="8" value="<?php echo $apr_dt ?>" onblur="calculateForm()"></td>

<th scope="row">May</th>
<td><input type="text" name="may_ded" id="basic" size="8" value="<?php echo $may_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="may_dt" id="basic" size="8" value="<?php echo $may_dt ?>" onblur="calculateForm()"></td>

<th scope="row">June</th>
<td><input type="text" name="june_ded" id="basic" size="8" value="<?php echo $june_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="june_dt" id="basic" size="8" value="<?php echo $june_dt ?>" onblur="calculateForm()"></td>

</tr>
<tr>

<th scope="row">July</th>
<td><input type="text" name="july_ded" id="basic" size="8" value="<?php echo $july_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="july_dt" id="basic" size="8" value="<?php echo $july_dt ?>" onblur="calculateForm()"></td>

<th scope="row">August</th>
<td><input type="text" name="aug_ded" id="basic" size="8" value="<?php echo $aug_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="aug_dt" id="basic" size="8" value="<?php echo $aug_dt ?>" onblur="calculateForm()"></td>

<th scope="row">September</th>
<td><input type="text" name="sept_ded" id="basic" size="8" value="<?php echo $sept_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="sept_dt" id="basic" size="8" value="<?php echo $sept_dt ?>" onblur="calculateForm()"></td>

<th scope="row">October</th>
<td><input type="text" name="oct_ded" id="basic" size="8" value="<?php echo $oct_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="oct_dt" id="basic" size="8" value="<?php echo $oct_dt ?>" onblur="calculateForm()"></td>

</tr>
<tr>

<th scope="row">November</th>
<td><input type="text" name="nov_ded" id="basic" size="8" value="<?php echo $nov_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="nov_dt" id="basic" size="8" value="<?php echo $nov_dt ?>" onblur="calculateForm()"></td>

<th scope="row">December</th>
<td><input type="text" name="dec_ded" id="basic" size="8" value="<?php echo $dec_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="dec_dt" id="basic" size="8" value="<?php echo $dec_dt ?>" onblur="calculateForm()"></td>

<th scope="row">January</th>
<td><input type="text" name="jan_ded" id="basic" size="8" value="<?php echo $jan_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="jan_dt" id="basic" size="8" value="<?php echo $jan_dt ?>" onblur="calculateForm()"></td>

<th scope="row">February</th>
<td><input type="text" name="feb_ded" id="basic" size="8" value="<?php echo $feb_ded ?>" onblur="calculateForm()"></td>
<td><input type="text" name="feb_dt" id="basic" size="8" value="<?php echo $feb_dt ?>" onblur="calculateForm()"></td>

</tr>
</tbody>
<!--Table body-->
</table>
<!--Table-->
<br />

    <table border="0" cellpadding="0" width="550" id="table3">
        <tr>
            <td width="563">
                <p align="center">
                <input type="submit" value="Save" name="save" tabindex="50">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reset" name="reset" tabindex="50"></td>
        </tr>
    </table>
  </form>


                        <p>&nbsp;</p>

                </section>
            </section>

            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Data Table</h2>
                    <div class="actions panel_actions pull-right">
                        <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i>
                    </div>
                </header>
                <div class="content-body">    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">


                            <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Id No</th>
                                        <th>Name</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Days</th>
                                        <th>Diff Basic</th>
                                        <th>Diff DA</th>
                                        <th>Diff HRA</th>
                                        <th>Diff CCA</th>
                                        <th>Diff GIS</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Id No</th>
                                        <th>Name</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Days</th>
                                        <th>Diff Basic</th>
                                        <th>Diff DA</th>
                                        <th>Diff HRA</th>
                                        <th>Diff CCA</th>
                                        <th>Diff GIS</th>
                                        <th>Total</th>
                                        <th>Delete</th>

                                    </tr>
                                </tfoot>

                                <tbody>
                                   <?php

include("db.php");

$result=mysqli_query($conn, "SELECT * FROM fy2018_19 WHERE sr=$id ORDER BY `sr` ASC");
while($test = mysqli_fetch_array($result))
{
$id = $test['sr'];
//$serial = $test['serail'];

      echo "<tr align='left'>";
      echo"<td><font color='black'>" .$test['sr']."</font></td>";
      echo"<td><font color='black'>" .$test['emp_id']."</font></td>";
      echo"<td><font color='black'>" .$test['name']."</font></td>";
      echo"<td><font color='black'>" .$test['desig']."</font></td>";
      echo"<td><font color='black'>" .$test['pan']."</font></td>";
      //echo"<td><font color='black'>". $test['days']. "</font></td>";
      /*echo"<td><font color='black'>". $test['diff_basic']. "</font></td>";
      echo"<td><font color='black'>". $test['diff_da']. "</font></td>";
      echo"<td><font color='black'>". $test['diff_hra']. "</font></td>";
      echo"<td><font color='black'>". $test['diff_cca']. "</font></td>";
      echo"<td><font color='black'>" .$test['diff_gis']."</font></td>";
      echo"<td><font color='black'>". $test['fftotal']. "</font></td>";*/
      //echo"<td widht='7%'> <a href ='view.php?unqid=$id'>Edit</a>";
      //echo"<td width='7%'> <a href ='del.php?serial=".$test['serial']."'><center>Delete</center></a>";

      echo "</tr>";
}
mysqli_close($conn);
?>
                                </tbody>
                            </table>




                        </div>
                    </div>
                </div>
            </section>

            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START -->
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script>
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>
        <!-- CORE JS FRAMEWORK - END -->


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <script src="assets/plugins/icheck/icheck.min.js" type="text/javascript"></script>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <script src="assets/plugins/jquery-ui/smoothness/jquery-ui.min.js" type="text/javascript"></script> <script src="assets/plugins/datepicker/js/datepicker.js" type="text/javascript"></script> <script src="assets/plugins/daterangepicker/js/moment.min.js" type="text/javascript"></script> <script src="assets/plugins/daterangepicker/js/daterangepicker.js" type="text/javascript"></script> <script src="assets/plugins/timepicker/js/timepicker.min.js" type="text/javascript"></script> <script src="assets/plugins/datetimepicker/js/datetimepicker.min.js" type="text/javascript"></script> <script src="assets/plugins/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" type="text/javascript"></script> <script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script> <script src="assets/plugins/tagsinput/js/bootstrap-tagsinput.min.js" type="text/javascript"></script> <script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script> <script src="assets/plugins/typeahead/typeahead.bundle.js" type="text/javascript"></script> <script src="assets/plugins/typeahead/handlebars.min.js" type="text/javascript"></script> <script src="assets/plugins/multi-select/js/jquery.multi-select.js" type="text/javascript"></script> <script src="assets/plugins/multi-select/js/jquery.quicksearch.js" type="text/javascript"></script>
         <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

<script src="assets/js/date.js" type="text/javascript"></script>
<script src="assets/js/calculate.js" type="text/javascript"></script>
<script src="assets/js/addrow.js" type="text/javascript"></script>
<script src="assets/js/additional.js" type="text/javascript"></script>

        <!-- CORE TEMPLATE JS - START -->
        <script src="assets/js/scripts.js" type="text/javascript"></script>
        <!-- END CORE TEMPLATE JS - END -->

        <!-- Sidebar Graph - START -->
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>

        <!-- Sidebar Graph - END -->
        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>

</html>

<!--<table border="2" cellpadding="0" width="100%" id="table2">

                    <tr>

                        <td style="width:40%">
                        कब से <input type="text" size="15" name="date1" id="">
        कब तक <input type="text" size="15" name="date2" id="">
        दिनों की संख्या <input type="text" size="8" id="days" name="days" value="180">कुल दिनों की संख्या <input type="text" size="8" id="days1" name="days1" value="30">months की संख्या <input type="text" size="8" id="months" name="months"></td></tr>
                        <tr>
                        <td style="width:20%">नया वेतन बैंड:
                        <select size="1" id="payband" class="validate['required']" title="" type="select" name="payband">
        <option value="">कृपया चुनें</option>
        <option value="5200-20200">5200-20200</option>
        <option value="9300-34800">9300-34800</option>
        <option value="15600-37900">15600-37900</option>
        <option value="37400-67000">37400-67000</option>
        </select>
                            <span style="padding-left:50px"> ग्रेड पे:

<select id="5200-20200"  class="gradepay"  style="display: none;" name="gradepay" onchange="ChangeDropdowns(this.value)">
<option value="">select a Grade Pay</option>
<option value="1800" data-hra="1100" data-cca="170" data-gis="100">1800</option>
<option value="1900" data-hra="1160" data-cca="240" data-gis="100">1900</option>
<option value="2000" data-hra="1200" data-cca="240" data-gis="100">2000</option>
<option value="2400" data-hra="1470" data-cca="240" data-gis="100">2400</option>
<option value="2800" data-hra="1670" data-cca="240" data-gis="100">2800</option>
</select>

<select id="9300-34800"  class="gradepay"  style="display: none;" name="gradepay" onchange="ChangeDropdowns(this.value)">
<option value="">select a Grade Pay</option>
<option value="4200" data-hra="2020" data-cca="360" data-gis="200">4200</option>
<option value="4600" data-hra="2760" data-cca="360" data-gis="200">4600</option>
<option value="4800" data-hra="2810" data-cca="360" data-gis="200">4800</option>
</select>

<select id="15600-37900"  class="gradepay"  style="display: none;" name="gradepay" onchange="ChangeDropdowns(this.value)">
<option value="">select a Grade Pay</option>
<option value="5400" data-hra="3150" data-cca="360" data-gis="200">5400</option>
<option value="6600" data-hra="3780" data-cca="450" data-gis="400">6600</option>
<option value="7600" data-hra="4480" data-cca="450" data-gis="400">7600</option>
</select>

<select id="37400-67000"  class="gradepay"  style="display: none;" name="gradepay" onchange="ChangeDropdowns(this.value)">
<option value="">select a Grade Pay</option>
<option value="8700" data-hra="6910" data-cca="450" data-gis="400">8700</option>
<option value="8900" data-hra="7280" data-cca="450" data-gis="400">8900</option>
<option value="10000" data-hra="8200" data-cca="450" data-gis="400">10000</option>
</select></span>
</td>
           </tr>

        <td style="width:20%">पुराना वेतन बैंड :
                        <select size="1" id="old_payband" class="validate['required']" title="" type="select" name="old_payband">
        <option value="">कृपया चुने</option>
        <option value="old_5200-20200">5200-20200</option>
        <option value="old_9300-34800">9300-34800</option>
        <option value="old_15600-37900">15600-37900</option>
        <option value="old_37400-67000">37400-67000</option>
        </select>

                            <span style="padding-left:50px">ग्रेड पे:

                        <select id="old_5200-20200"  class="old_gradepay"  style="display: none;" name="old_gradepay" onchange="ChangeDropdowns(this.value)">
<option value="">select a Grade Pay</option>
<option value="1800" data-old_hra="1100" data-old_cca="170" data-old_gis="100">1800</option>
<option value="1900" data-old_hra="1160" data-old_cca="240" data-old_gis="100">1900</option>
<option value="2000" data-old_hra="1200" data-old_cca="240" data-old_gis="100">2000</option>
<option value="2400" data-old_hra="1470" data-old_cca="240" data-old_gis="100">2400</option>
<option value="2800" data-old_hra="1670" data-old_cca="240" data-old_gis="100">2800</option>
</select>

<select id="old_9300-34800"  class="old_gradepay"  style="display: none;" name="old_gradepay" onchange="ChangeDropdowns(this.value)">
<option value="">select a Grade Pay</option>
<option value="4200" data-old_hra="2020" data-old_cca="360" data-old_gis="200">4200</option>
<option value="4600" data-old_hra="2760" data-old_cca="360" data-old_gis="200">4600</option>
<option value="4800" data-old_hra="2810" data-old_cca="360" data-old_gis="200">4800</option>
</select>

<select id="old_15600-37900"  class="old_gradepay"  style="display: none;" name="old_gradepay" onchange="ChangeDropdowns(this.value)">
<option value="">select a Grade Pay</option>
<option value="5400" data-old_hra="3150" data-old_cca="360" data-old_gis="200">5400</option>
<option value="6600" data-old_hra="3780" data-old_cca="450" data-old_gis="400">6600</option>
<option value="7600" data-old_hra="4480" data-old_cca="450" data-old_gis="400">7600</option>
</select>

<select id="old_37400-67000"  class="old_gradepay"  style="display: none;" name="old_gradepay" onchange="ChangeDropdowns(this.value)">
<option value="">select a Grade Pay</option>
<option value="8700" data-old_hra="6910" data-old_cca="450" data-old_gis="400">8700</option>
<option value="8900" data-old_hra="7280" data-old_cca="450" data-old_gis="400">8900</option>
<option value="10000" data-old_hra="8200" data-old_cca="450" data-old_gis="400">10000</option>
</select> </span>
</td>
           </tr>
         </table>-->


         <!--<table border="2" cellpadding="0" width="100%" id="dataTable">

             <tr>
                 <td style="width:100%; color:black; font-size:16px; text-align:center">नए वेतन के मान</td></tr>
             <tr> </table>-->
     <!--<table border="2" cellpadding="0" width="100%" id="Table1">
         <tr style="color:darkgreen">
             <td style="color:black; padding-right:30px; background-color:azure"><strong>नए वेतन के मान</strong> </td>
  <td>बेसिक:<input type="text" name="basicSalary" id="basic" size="8" placeholder="basic" onblur="calculateForm()"></td>
  <td><input type="text" name="basicSalaryMonth" id="total1" size="8" placeholder="basic total" onblur="calculateForm()"></td>
  <td>महंगाई: <input type="text" name="dearness" id="da" value="0.02" size="8" placeholder="D.A." onblur="calculateForm()"></td>
  <td><input type="text" name="totalda" id="totalda" size="8" placeholder="D.A. Total" onblur="calculateForm1()"></td>
  <!--<td>मकान किराया:<input type="text" name="hra" id="hra" size="8" placeholder="H.R.A" onblur="calculateForm1()"></td>
  <td>नगर प्रतिकर: <input type="text" name="cca" id="cca" size="8" placeholder="C.C.A." onblur="calculateForm1()"></td>
  <td>सा0 भ0 निधि:<input type="text" name="gis" id="gis" size="8" placeholder="GIS" onblur="calculateForm1()"></td>-->
   <!--<td>अन्य: <input type="text" name="pa" id="pa" size="8" placeholder="Other" onblur="calculateForm1()"></td>
   <td>कुल पावना: <input type="text" name="total" size="10" placeholder="G. Total" id="total" onblur="roundNumber()"></td>
                </tr>
         </table>
     <br />

     <!--<table border="2" cellpadding="0" width="100%" id="Table4">
             <tr>
                 <td style="width:100%; color:black; font-size:16px; text-align:center"></td></tr>
         </table>-->
     <!--<table border="2" cellpadding="0" width="100%" id="Table5">
             <tr style="color:darkblue">
                 <td style="color:black; padding-right:25px; background-color:azure">पुराने वेतन के मान</td>
<td>बेसिक:<input type="text" name="old_basic" id="old_basic" size="8" placeholder="old basic" onblur="calculateForm2()"></td>
<td><input type="text" name="basicSalaryMonthOld" id="total3" size="8" placeholder="basic total" onblur="calculateForm()"></td>
<td>महंगाई:<input type="text" name="old_da" id="old_da" value="1.25" size="8" placeholder="OLD D.A." onblur="calculateForm2()"></td>
<td><input type="text" name="totaloldda" id="totaloldda" size="8" placeholder="D.A. Total" onblur="calculateForm3()"></td>
<!--<td>मकान किराया:<input type="text" name="old_hra" id="old_hra" size="8" placeholder="H.R.A" onblur="calculateForm3()"></td>
<td>नगर प्रतिकार:<input type="text" name="old_cca" id="old_cca" size="8" placeholder="C.C.A" onblur="calculateForm3()"></td>
<td>सा0 भ0 नि0:<input type="text" name="old_gis" id="old_gis" size="8" placeholder="GIS" onblur="calculateForm3()"></td>-->
<!--<td>अन्य:<input type="text" name="old_pa" id="old_pa" size="8" placeholder="Other" onblur="calculateForm3()"></td>
<td>कुल पावना:<input type="text" name="old_total" id="old_total" size="10" placeholder="Total" onblur="roundNumber()"></td>
                 </tr>
         </table>
     <br />
         <!--<td style="width:30%">
<input type="text" name="basic2" id="basic2" size="7" placeholder="Basic New" onblur="calculateForm4()">-
<input type="text" name="basic1" id="basic1" size="7" placeholder="Basic Old" onblur="calculateForm4()">=<br />
<input type="text" name="da2" id="da2" size="7" placeholder="D.A. New" onblur="calculateForm4()">-
<input type="text" name="da1" id="da1" size="7" placeholder="D.A. Old" onblur="calculateForm4()">=<br />
<input type="text" name="hra2" id="hra2" size="7" placeholder="H.R.A New" onblur="calculateForm4()">-
<input type="text" name="hra1" id="hra1" size="7" placeholder="H.R.A Old" onblur="calculateForm4()">=<br />
<input type="text" name="cca2" id="cca2" size="7" placeholder="C.C.A. New" onblur="calculateForm4()">-
<input type="text" name="cca1" id="cca1" size="7" placeholder="C.C.A. Old" onblur="calculateForm4()">=<br />
<input type="text" name="gis2" id="gis2" size="7" placeholder="GIS New" onblur="calculateForm4()">-
<input type="text" name="gis1" id="gis1" size="7" placeholder="GIS Old" onblur="calculateForm4()">=<br />
<input type="text" name="total10" id="total10" size="7" placeholder="Total New" onblur="calculateForm5()">-
<input type="text" name="total11" id="total11" size="7" placeholder="Total Old" onblur="calculateForm5()">=
</td>
     <table border="2" cellpadding="0" width="100%" id="Table6">
<tr><td style="width:100%; color:black; font-size:16px; text-align:center"> अंतर</td></tr></table>-->
     <!--<table border="2" cellpadding="0" width="100%" id="Table7">
                 <tr style="color:darkred">
<td style="color:black; padding-right:50px; background-color:azure"> अंतर</td>
<td>बेसिक वेतन:<input type="text" name="diff_basic" id="vetanDiff" size="8" placeholder="Basic Difference" onblur="calculateFormDiff()"></td>
<td>महंगाई भत्ता:<input type="text" name="diff_da" id="daDiff" size="8" placeholder="D.A. Difference" onblur="calculateFormDiff()"></td>
<!--<td>मकान किराया  भत्ता:<input type="text" name="diff_hra" id="diff_hra" size="8" placeholder="H.R.A Difference" onblur="calculateForm6()"></td>
<td>नगर प्रतिकार भत्ता:<input type="text" name="diff_cca" id="diff_cca" size="8" placeholder="C.C.A. Difference" onblur="calculateForm6()"></td>
<td>सामान्य भविष्य निधि:<input type="text" name="diff_gis" id="diff_gis" size="8" placeholder="GIS Difference" onblur="calculateForm6()"></td>-->
<!--<td>कुल अंतर:<input type="text" name="fftotal" id="totalDiff" size="10" placeholder="Total Diff." onblur="calculateFormDiff()"></td>
</tr>

                 <!--<td style="width:30%">
                 <input type="text" name="basic" id="basic" size="5" placeholder="Basic" onblur="calculateForm()">
                 <input type="text" name="da" id="da" size="3" placeholder="D.A." onblur="calculateForm()">
                 <input type="text" name="total" size="5" placeholder="Total" id="total1">
                 <input type="text" name="hra" id="hra" size="5" placeholder="H.R.A" onblur="calculateForm1()">
                 <input type="text" name="cca" id="cca" size="5" placeholder="C.C.A." onblur="calculateForm1()">
                 <input type="text" name="gis" id="gis" size="5" placeholder="GIS" onblur="calculateForm1()">
                 <input type="text" name="pa" id="pa" size="5" placeholder="Other" onblur="calculateForm1()">
                 <input type="text" name="total" size="8" placeholder="Total" id="total2">
                 </td>-->





             <!--<tr>

                 <td style="width:40%">Total Salary</td>

                 <td style="width:30%">Drawn</td>

                 <td style="width:30%">Arrear</td>

             </tr>-->



<!--
</table>
<table border="2" cellpadding="0" width="100%" id="dataTable">
<!--<tr>


            <input type="button" value="Add Row" onclick="addRow('dataTable')">

         </tr>
<tr>
<td width="250">
<input type="text" name="basic" id="basic" size="5" placeholder="Basic" onblur="calculateForm()">
             <input type="text" name="da" id="da" size="3" placeholder="D.A." onblur="calculateForm()">
             <input type="text" name="total" size="5" placeholder="Total" id="total1">
             <input type="text" name="hra" id="hra" size="5" placeholder="H.R.A" onblur="calculateForm1()">
             <input type="text" name="cca" id="cca" size="5" placeholder="C.C.A." onblur="calculateForm1()">
             <input type="text" name="gis" id="gis" size="5" placeholder="GIS" onblur="calculateForm1()">
             <input type="text" name="pa" id="pa" size="5" placeholder="Other" onblur="calculateForm1()">
             <input type="text" name="total" size="8" placeholder="Total" id="total2">
             <input type="text" name="total3" id="total3" size="3" placeholder="D.A." onblur="calculateForm3()">
             <input type="text" name="total4" id="total4" size="3" placeholder="total" onblur="calculateForm3()">
             <input type="text" name="ftotal" id="ftotal" size="14" placeholder="Total Diff." onblur="calculateForm7()">

             </td>
</tr>         </table>
