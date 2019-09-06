<?php ob_start(); ?>


                <?php
                require("db.php");

                if(isset($_POST['save']))
                {
                  $da_arr= $_POST['da_arr'] ;
                  $arr= $_POST['arr'] ;
                  $bonus= $_POST['bonus'] ;
                  $other_income= $_POST['other_income'] ;
                  $hra= $_POST['hra'] ;
                  $wash_all= $_POST['wash_all'] ;
                  //$hra= $_POST['hra'] ;
                  $hon= $_POST['hon'] ;
                  $hba_int= $_POST['hba_int'] ;
                  $_80ccc= $_POST['_80ccc'] ;
                  $it_ded= $_POST['it_ded'] ;
                  $da_gpf= $_POST['da_gpf'] ;
                  $gpf= $_POST['gpf'] ;
                  $gis= $_POST['gis'] ;
                  $nsc_ppf= $_POST['nsc_ppf'] ;
                  $nsc_int= $_POST['nsc_int'] ;
                  $lic= $_POST['lic'] ;
                  $ulip= $_POST['ulip'] ;
                  $hba= $_POST['hba'] ;
                  $education= $_POST['education'] ;
                  $sec_89= $_POST['sec_89'] ;
                  $cm_hon= $_POST['cm_hon'] ;
                  $_80d= $_POST['_80d'] ;
                  $income_other= $_POST['income_other'] ;

                //$Others= $_POST['Others'] ;

                mysqli_query($conn, "UPDATE fy2018_19 SET da_arr='$da_arr', arr='$arr', bonus='$bonus', income_other='$income_other', hra='$hra', hba_int='$hba_int', _80ccc='$_80ccc', it_ded='$it_ded', da_gpf='$da_gpf', gpf='$gpf', gis='$gis', nsc_ppf='$nsc_ppf', nsc_int='$nsc_int', lic='$lic', ulip='$ulip', hba='$hba', education='$education', sec_89='$sec_89', cm_hon='$cm_hon', _80d='$_80d', income_other='$income_other' WHERE emp_id = '$emp_id'");

                //echo "Saved!";
                header("Location: Incometax2019.php?emp_id=$emp_id");
                }
                mysqli_close($conn);
                ?>




    <?php ob_end_flush(); ?>
