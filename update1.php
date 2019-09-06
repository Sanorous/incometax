<?php ob_start(); ?>


                <?php
                require("db.php");
                $id =$_REQUEST['ID_NO'];

                mysql_query ("set character_set_client='utf8'");
                 mysql_query ("set character_set_results='utf8'");
                 mysql_query ("set collation_connection='utf8_general_ci'");

                $result = mysql_query("SELECT * FROM employees WHERE ID_NO  = '$id'");
                $test = mysql_fetch_array($result);
                if (!$result)
                {
                die("Error: Data not found..");
                }
                $ID_NO=$test['ID_NO'] ;
        				$EMP_NM= $test['EMP_NM'] ;
        				$DESIG= $test['DESIG'] ;
                $PPF_NO= $test['PPF_NO'] ;
                $PPF_BANK= $test['PPF_BANK'] ;
                $PF_NO= $test['PF_NO'] ;
                $PRAN_NO= $test['PRAN_NO'] ;
                $BANK_AC_NO =$test['BANK_AC_NO'];
                $BANK_NM = $test['BANK_NM'];

                if(isset($_POST['save']))
                {
                $EMP_NM_save = $_POST['EMP_NM'];
                $PPF_NO_save = $_POST['PPF_NO'];
              	$PPF_BANK_save = $_POST['PPF_BANK'];
              	$PF_NO_save = $_POST['PF_NO'];
              	$PRAN_NO_save = $_POST['PRAN_NO'];
                $BANK_AC_NO_save = $_POST['BANK_AC_NO'];
                $BANK_NM_save = $_POST['BANK_NM'];
                //$Others= $_POST['Others'] ;

                mysql_query("UPDATE employees SET EMP_NM='$EMP_NM_save', PPF_NO ='$PPF_NO_save', PPF_BANK ='$PPF_BANK_save', PF_NO ='$PF_NO_save', PRAN_NO='$PRAN_NO_save', BANK_AC_NO='$BANK_AC_NO_save', BANK_NM='$BANK_NM_save' WHERE ID_NO = '$id'")
                or die(mysql_error());
                echo "Saved!";
                header("Location: update.php?ID_NO=");
                }
                mysql_close($conn);
                ?>




    <?php ob_end_flush(); ?>
