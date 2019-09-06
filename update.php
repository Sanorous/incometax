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
        <title>Vidhan Sabha: Employee Manangement Application</title>
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


<!-- Javascript for font -->

        <script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii"
    });
</script>

<script type="text/javascript" src="http://www.google.com/jsapi"></script>

 <script type="text/javascript">
          // Load the Google Transliteration API
          google.load("elements", "1", {
                packages: "transliteration"
              });
          function onLoad() {
            var options = {
              sourceLanguage: 'en',
              destinationLanguage: ['hi'],
              shortcutKey: 'ctrl+g',
              transliterationEnabled: true
            };
            // Create an instance on TransliterationControl with the required
            // options.
            var control = new google.elements.transliteration.TransliterationControl(options);
            // Enable transliteration in the textfields with the given ids.
            var ids = [ "txtName","txtAddress"];
            control.makeTransliteratable(ids);
            // Show the transliteration control which can be used to toggle between
            // English and Hindi and also choose other destination language.
            control.showControl('translControl');
          }
          google.setOnLoadCallback(onLoad);
        </script>
        <!-- javascript google Ends here -->

        <script  type="text/javascript">
        var date = new Date();

var day = date.getDate();
var month = date.getMonth() + 1;
var year = date.getFullYear();

if (month < 10) month = "0" + month;
if (day < 10) day = "0" + day;

var today = year + "-" + month + "-" + day;


document.getElementById('theDate').value = today;
        </script>

        <script>

        $(document).ready(function() {
    //this calculates values automatically
    Balance();
    $("#Total, #Advance").on("keydown keyup", function() {
        Balance();
    });
});

function Balance() {
            var Total = document.getElementById('Total').value;
            var Advance = document.getElementById('Advance').value;
			var result = parseInt(Total) + parseInt(Advance);
			var result1 = parseInt(Total) - parseInt(Advance);
            if (!isNaN(result)) {
                document.getElementById('sum').value = result;
				document.getElementById('Balance').value = result1;
        </script>


    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <div class='page-topbar '>

                <!-- MAIN MENU - END -->


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
                $ID_NO=$test['ID_NO'] ;
                $EMP_NM= $test['EMP_NM'] ;
                $DESIG= $test['DESIG'] ;
                $PPF_NO = $test['PPF_NO'];
              	$PPF_BANK = $test['PPF_BANK'];
              	$PF_NO = $test['PF_NO'];
              	$PRAN_NO = $test['PRAN_NO'];
                $BANK_AC_NO = $test['BANK_AC_NO'];
                $BANK_NM = $test['BANK_NM'];
                /*$Couple_Name= $test['Couple_Name'] ;
                $Function_Name= $test['Function_Name'] ;
                $Function_Date= $test['Function_Date'] ;
                $Allotment_Date= $test['Allotment_Date'] ;
                $Completion_Date= $test['Completion_Date'] ;
                $Type_Size= $test['Type_Size'] ;
                $Pics= $test['Pics'] ;
                $Sheets= $test['Sheets'] ;
                $Follow_Up= $test['Follow_Up'] ;
                $Extra_Work= $test['Extra_Work'];*/

                if(isset($_POST['save']))
                {
                //$Name_save = $_POST['Name'];
                $ID_NO_save=$_POST['ID_NO'] ;
                $EMP_NM_save= $_POST['EMP_NM'] ;
                $DESIG_save= $_POST['DESIG'] ;
                $PPF_NO_save = $_POST['PPF_NO'];
              	$PPF_BANK_save = $_POST['PPF_BANK'];
              	$PF_NO_save = $_POST['PF_NO'];
              	$PRAN_NO_save = $_POST['PRAN_NO'];
                $BANK_AC_NO_save = $_POST['BANK_AC_NO'];
                //$Others= $_POST['Others'] ;

                mysql_query("UPDATE employees SET EMP_NM='$EMP_NM_save', DESIG='$DESIG_save', PPF_NO='$PPF_NO_save', PPF_BANK='$PPF_BANK_save', PF_NO='$PF_NO_save', PRAN_NO= '$PRAN_NO_save', BANK_AC_NO='$BANK_AC_NO' WHERE ID_NO = '$id'")
                or die(mysql_error());
                echo "Saved!";
                header("Location: update.php?ID_NO='$id'");
                }
                mysql_close($conn);
                ?>






            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="" class=" ">
                <section class="" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>


				<div class="col-lg-12">
                         <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <section class="">
                            <header class="panel_header">
                                <h2 class="title pull-left">  Update the details</h2>

                            </header>
                            <div class="content-body">
                                <!-- START -->
                                <form action="update1.php?ID_NO=<?php echo $ID_NO ?>" method="POST" enctype="multipart/form-data">

                                <div class='row'>
                                    <div class="col-xs-2">
                                    <label>Employee ID</label>
                                        <input type="text" class="form-control" value="<?php echo $ID_NO ?>" name="ID_NO" readonly>
                                    </div>

                                    <div class="col-xs-2">
                                    <label>Employee Name</label>
                                        <input type="text" class="form-control" name="EMP_NM" value="<?php echo $EMP_NM ?>">
                                    </div>

                                    <div class="col-xs-2">
                                    <label>Designation</label>
                                        <input type="text" class="form-control" value="<?php echo $DESIG ?>" name="DESIG">
                                    </div>

                                    <div class="col-xs-2">
                                    <label>PPF Number</label>
                                        <input type="text" class="form-control" value="<?php echo $PPF_NO ?>" name="PPF_NO">
                                    </div>

                                    <div class="col-xs-2">
                                    <label>PPF Bank</label>
                                        <input type="text" class="form-control" value="<?php echo $PPF_BANK ?>" name="PPF_BANK">
                                    </div>

                                    <div class="col-xs-2">
                                    <label>PF Number</label>
                                        <input type="text" class="form-control" value="<?php echo $PF_NO ?>" name="PF_NO">
                                    </div>

                                    <div class="col-xs-2">
                                    <label>PRAN Number</label>
                                        <input type="text" class="form-control" value="<?php echo $PRAN_NO ?>" name="PRAN_NO">
                                    </div>

                                    <div class="col-xs-2">
                                    <label>Account Number</label>
                                        <input type="text" class="form-control" value="<?php echo $BANK_AC_NO ?>" name="BANK_AC_NO">
                                    </div>

                                    <div class="col-xs-2">
                                    <label>Account Number</label>
                                        <input type="text" class="form-control" value="<?php echo $BANK_NM ?>" name="BANK_NM">
                                    </div>

                                    <div class="col-xs-2">
                                    <label>Save the Data</label>
                                        <button type="submit" class="btn btn-success" name="save" >Update the Data </button>
                                    </div>

                                </div>
                                </form>


                                <hr />
                                  <br />

                                <!-- END -->
                                </form>

                            </div>
                        </section></div>


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

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script> <script src="assets/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script> <script src="assets/js/form-validation.js" type="text/javascript"></script> <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

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

    <?php ob_end_flush(); ?>
</html>
