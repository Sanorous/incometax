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
                        $id =$_REQUEST['C329'];
                        $result = mysqli_query($conn, "SELECT * FROM annexure2018_19 WHERE C329  = '$id'");
                        $test = mysqli_fetch_array($result);
                        if (!$result)
                        {
                        die("Error: Data not found..");
                        }
                        $C329=$test['C329'];
                        //$=$test['name'] ;
                        $C333= $test['C333'] ;
                        $C331= $test['C331'] ;
                        $C330= $test['C330'] ;
                        //$sex= $test['sex'] ;
                        //$gpf_no= $test['gpf_no'] ;
                        //$pran_no= $test['pran_no'] ;
                        //$doj= $test['doj'] ;
                        //$dor= $test['dor'] ;
                        //$sd= $test['sd'] ;
                        $C332= $test['C332'] ;
                        $C333= $test['C333'] ;
                        $C334= $test['C334'] ;
                        $C334A= $test['C334A'] ;
                        $C335= $test['C335'] ;
                        $C336= $test['C336'] ;
                        $C337= $test['C337'] ;
                        $C338= $test['C338'] ;
                        $C339= $test['C338'] ;
                        $C340= $test['C340'] ;
                        $C341= $test['C341'] ;
                        $C342= $test['C342'] ;
                        $C343= $test['C343'] ;
                        $C344= $test['C344'] ;
                        $C345= $test['C345'] ;
                        $C346= $test['C346'] ;
                        $C347= $test['C347'] ;
                        $C348= $test['C348'] ;
                        $C349= $test['C349'] ;
                        $C350= $test['C350'] ;
                        $C351= $test['C351'] ;
                        $C352= $test['C352'] ;
                        $C353= $test['C353'] ;
                        $C354= $test['C354'] ;
                        $C355= $test['C355'] ;
                        $C356= $test['C356'] ;
                        $C357= $test['C357'] ;
                        $C358= $test['C358'] ;
                        $C359= $test['C359'] ;
                        $C360= $test['C360'] ;
                        $C361= $test['C361'] ;
                        $C362= $test['C362'] ;
                        $C363= $test['C363'] ;
                        $C364= $test['C364'] ;
                        $C365= $test['C365'] ;
                        $C366= $test['C366'] ;
                        $C367= $test['C367'] ;
                        $C368= $test['C368'] ;
                        $C369= $test['C369'] ;
                        $C370= $test['C370'] ;
                        $C371= $test['C371'] ;
                        $C372= $test['C372'] ;
                        $C373= $test['C373'] ;
                        $C374= $test['C374'] ;
                        $C375= $test['C375'] ;
                        $C376= $test['C376'] ;
                        $C377= $test['C377'] ;
                        //$C378= $test['C378'] ;

                        mysqli_close($conn);
                        ?>

                        <form method="POST" action="update_tax.php" name="form" enctype="multipart/form-data">
                        <table style="width:100%">
                            <tr style="border: thin groove #800000">
                                <td style="width:10%">
                                    क्रमांक:-<span style="color:black; font-size:15px"><input type="text" name="C329" value="<?php echo $C329 ?>" readonly></span>
                                </td>
                                <td style="width:30%">
                                    नाम:-<span style="color:black; font-size:15px"><input type="text" name="C332" value="<?php echo $C332 ?>" ></span>
                                </td>
                                <td style="width:30%">
                                    पदनाम:-<span style="color:black; font-size:15px"><input type="text" name="C333" value="<?php echo $C333 ?>" readonly></span>
                                </td>
                                <td style="width:15%">
                                    PAN:-<span style="color:black; font-size:15px"><input type="text" name="C331" value="<?php echo $C331 ?>" readonly></span>
                                </td>
                                <td style="width:10%">
                                    <span style="color:black; font-size:15px"></span>
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
      <th>Date from employed with current employer in the current financial year.<br />(334)</th>
      <th>Date upto employed with current employer in the current financial year.<br />(334A)</th>
      <th>Gross Salary as per provisions contained in section17(1)<br />(335)</th>
      <th>Value of perquisites under section 17(2) (as per Form No. 12BA, wherever applicable).<br />(336)</th>
      <th>Profits in lieu of salary under 17(3) (as per Form No. 12BA, wherever applicable).<br />(337)</th>
      <th>Total amount of gross salary received from current employer (see Note 1 for definitin of Salary).<br />(338)</th>
      <th>Reported total amount of salary received from other employer(s) (see Note 1 for definition of salary).<br />(330)</th>
      <th>Travel concession or assitance under section 10(5).<br />(340)</th>
      <th>Death cum- retirement gratuity under section 10(10).<br />(341)</th>
      <th>Commuted value of pension under section 10(10A).<br />(342)</th>

    </tr>
  </thead>
  <!--Table head-->
  <!--Table body-->
  <tbody>
    <tr>
      <td><input type="text" name="C334" id="basic" size="8" value="<?php echo $C334 ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C334A" id="basic" size="8" value="<?php echo $C334A ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C335" id="basic" size="8" value="<?php echo $C335 ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C336" id="basic" size="8" value="<?php echo $C336 ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C337" id="basic" size="8" value="<?php echo $C337 ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C338" id="basic" size="8" value="<?php echo $C338 ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C339" id="basic" size="8" value="<?php echo $C339 ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C340" id="basic" size="8" value="<?php echo $C340 ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C341" id="basic" size="8" value="<?php echo $C341 ?>" onblur="calculateForm()"></td>
      <td><input type="text" name="C342" id="basic" size="8" value="<?php echo $C342 ?>" onblur="calculateForm()"></td>
      </tr>
    </tbody>
    <thead>
      <tr>
        <th>Cash equivalent of leave salary encashment under section 10(10AA).<br />(343)</th>
        <th>House rent allowance under section10(13A).<br />(344)</th>
        <th>PAN of the landlord , if A1:AX686 is claimed under section 10(13A).<br />(345)</th>
        <th>Amount of any other exemption under section 10.<br />(346)</th>
        <th>Total amount of exemption claimed under section 10(340+341+342+343+344+346).<br />(347)</th>
        <th>Total deduction on under section 16(ia).<br />(348)</th>
        <th>Total deduction under section 16(ii).<br />(349)</th>
        <th>Total deduction under section 16(iii).<br />(350)</th>
        <th>Income chargeable under the head "Salaries"[338+339+347+348+349+350].<br />(351)</th>
        <th>Income( or admissible loss) from house property reported by employee offered for TDS as per section 192(2B).<br />(352)</th>
          </tr>
    </thead>
    <!--Table head-->
    <!--Table body-->
    <tbody>
      <tr>
        <td><input type="text" name="C343" id="basic" size="8" value="<?php echo $C343 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C344" id="basic" size="8" value="<?php echo $C344 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C345" id="basic" size="8" value="<?php echo $C345 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C346" id="basic" size="8" value="<?php echo $C346 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C347" id="basic" size="8" value="<?php echo $C347 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C348" id="basic" size="8" value="<?php echo $C348 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C349" id="basic" size="8" value="<?php echo $C349 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C350" id="basic" size="8" value="<?php echo $C350 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C351" id="basic" size="8" value="<?php echo $C351 ?>" onblur="calculateForm()"></td>
        <td><input type="text" name="C352" id="basic" size="8" value="<?php echo $C352 ?>" onblur="calculateForm()"></td>
        </tr>
      </tbody>
      <thead>
        <tr>
          <th>PAN of lender, if interest on housing loan is claimed under section 24(b) (see Note 4).<br />(353)</th>
          <th>Income under the head other sources offered for TDS as per section 192(2B).<br />(354)</th>
          <th>Gross total income(351+352+354).<br />(355)</th>
          <th>Deduction in respect of life insurance premia, contributions to provident fund etc. under section 80C.<br />(356)</th>
          <th>Deduction in respect of contribution to certain pension funds under section 80CCC.<br />(357)</th>
          <th> Deduction in respect of contribution by taxpayer to notified pension scheme under section 80CCD(1).<br />(358)</th>
          <th> Deduction in respect of amount paid or deposited under notified pension scheme under section80CCD(1B).<br />(359)</th>
          <th> Deduction in respect of contribution by employer to notified pension scheme under section 80CCD(2). <br />(360)</th>
          <th> Deduction in respect of health insurance premia under section 80D.<br />(361)</th>
          <th> Deduction in respect of interest on loan taken for higher education under section 80E. <br />(362)</th>
        </tr>
      </thead>
      <!--Table head-->
      <!--Table body-->
      <tbody>
        <tr>
          <td><input type="text" name="C353" id="basic" size="8" value="<?php echo $C353 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C354" id="basic" size="8" value="<?php echo $C354 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C355" id="basic" size="8" value="<?php echo $C355 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C356" id="basic" size="8" value="<?php echo $C356 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C357" id="basic" size="8" value="<?php echo $C357 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C358" id="basic" size="8" value="<?php echo $C358 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C359" id="basic" size="8" value="<?php echo $C359 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C360" id="basic" size="8" value="<?php echo $C360 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C361" id="basic" size="8" value="<?php echo $C361 ?>" onblur="calculateForm()"></td>
          <td><input type="text" name="C362" id="basic" size="8" value="<?php echo $C362 ?>" onblur="calculateForm()"></td>

          </tr>
        </tbody>
        <thead>
          <tr>
            <th> Total deduction in respect of donations to certain funds, charitable institutions, etc. under section 80G.<br />(363)</th>
            <th> Deduction in repect of interest on deposits in savings account under section 80TTA.<br />(364)</th>
            <th> Amount deductibel under any other provision(s0 of Chapter VI-A.<br />(365)</th>
            <th> Total amount deductible under Chapter VI-A[356+357+358+(limited to Rs. 1,50,000)+359+360+361+362+363+364+365].<br />(366)</th>
            <th> Total taxable income (355-366).<br />(367)</th>
            <th> Income-tax on total income.<br />(368)</th>
            <th> Rebate under section 87A, if applicable.<br />(369) </th>
            <th> Surcharge, wherever applicable.<br />(370)</th>
            <th> Health and education cess.<br />(371)</th>
            <th> Income-tax relief under section 89, when salary, etc. is paid in arrear or advance.<br />(372)</th>

            </tr>
        </thead>
        <!--Table head-->
        <!--Table body-->
        <tbody>
          <tr>
            <td><input type="text" name="C363" id="basic" size="8" value="<?php echo $C363 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C364" id="basic" size="8" value="<?php echo $C364 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C365" id="basic" size="8" value="<?php echo $C365 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C366" id="basic" size="8" value="<?php echo $C366 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C367" id="basic" size="8" value="<?php echo $C367 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C368" id="basic" size="8" value="<?php echo $C368 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C369" id="basic" size="8" value="<?php echo $C369 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C370" id="basic" size="8" value="<?php echo $C370 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C371" id="basic" size="8" value="<?php echo $C371 ?>" onblur="calculateForm()"></td>
            <td><input type="text" name="C372" id="basic" size="8" value="<?php echo $C372 ?>" onblur="calculateForm()"></td>

            </tr>
          </tbody>

          <thead>
            <tr>
              <th> Net tax liablity [368+370+371-371-(369+ <br />(373)</th>
              <th> Total amount of tax deducted at source by the current employer for the whole year[ aggregate of the amount in columns 325 of Annexure I for all the quarters in respect of each employee]. <br />(374)</th>
              <th>  Reported amount of tax deducted at source by other employer(s) or deductor(s) (income in respect of which included in computing total taxable income in column 339).<br />(375)</th>
              <th>  Total amount of tax deducted at source for the whole year(374+375).<br />(376)</th>
              <th>  Shortfall in tax deduction (+) or excess tax deduction (-)(373-376)<br />(377)</th>

              </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
            <tr>
              <td><input type="text" name="C373" id="basic" size="8" value="<?php echo $C373 ?>" onblur="calculateForm()"></td>
              <td><input type="text" name="C374" id="basic" size="8" value="<?php echo $C374 ?>" onblur="calculateForm()"></td>
              <td><input type="text" name="C375" id="basic" size="8" value="<?php echo $C375 ?>" onblur="calculateForm()"></td>
              <td><input type="text" name="C376" id="basic" size="8" value="<?php echo $C376 ?>" onblur="calculateForm()"></td>
              <td><input type="text" name="C377" id="basic" size="8" value="<?php echo $C377 ?>" onblur="calculateForm()"></td>
              </tr>
            </tbody>

  <!--Table body-->
</table>
<!--Table-->            <br />




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
