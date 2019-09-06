<?php ob_start(); ?>
                <?php
                require("db.php");
                $id =$_REQUEST['ID_NO'];

                mysql_query ("set character_set_client='utf8'");
                 mysql_query ("set character_set_results='utf8'");
                 mysql_query ("set collation_connection='utf8_general_ci'");

                $result = mysql_query("SELECT * FROM calculations WHERE ID_NO  = '$id' ORDER BY serial ASC LIMIT 1");
                $test = mysql_fetch_array($result);
                if (!$result)
                {
                die("Error: Data not found..");
                }
                //$ID_NO=$test['ID_NO'] ;
        				//$EMP_NM= $test['EMP_NM'] ;
        				//$DESIG= $test['DESIG'] ;
                //$PPF_NO= $test['PPF_NO'] ;
                //$PPF_BANK= $test['PPF_BANK'] ;
                //$PF_NO= $test['PF_NO'] ;
                //$PRAN_NO= $test['PRAN_NO'] ;
                $incometax2019 = $test['incometax2019'];
                $incometax2020 = $test['incometax2020'];
                $gpf2019 = $test['gpf2019'];
                $gpf2020 = $test['gpf2020'];

                if(isset($_POST['save']))
                {
                //$Name_save = $_POST['Name'];
                //$PPF_NO_save = $_POST['PPF_NO'];
              	//$PPF_BANK_save = $_POST['PPF_BANK'];
              	//$PF_NO_save = $_POST['PF_NO'];
              	//$PRAN_NO_save = $_POST['PRAN_NO'];
                $incometax2019_save = $_POST['incometax2019'];
                $incometax2020_save = $_POST['incometax2020'];
                $gpf2019_save = $_POST['gpf2019'];
                $gpf2020_save = $_POST['gpf2020'];
                //$Others= $_POST['Others'] ;

                mysql_query("UPDATE calculations SET incometax2019='$incometax2019_save', incometax2020='$incometax2020_save', gpf2019='$gpf2019_save', gpf2020='$gpf2020_save' WHERE ID_NO = '$id'")
                or die(mysql_error());
                echo "Saved!";
                header("Location: print1.php?ID_NO=$id");
                }
                mysql_close($conn);
                ?>
    <?php ob_end_flush(); ?>
