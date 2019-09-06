<?php ob_start(); ?>


                <?php
                require("db.php");

                if(isset($_POST['save']))
                {
                  $mar_ded= $_POST['mar_ded'] ;
                  $mar_dt= $_POST['mar_dt'] ;
                  $apr_ded= $_POST['apr_ded'] ;
                  $apr_dt= $_POST['apr_dt'] ;
                  $may_ded= $_POST['may_ded'] ;
                  $may_dt= $_POST['may_dt'] ;
                  $june_ded= $_POST['june_ded'] ;
                  $june_dt= $_POST['june_dt'] ;
                  $july_ded= $_POST['july_ded'] ;
                  $july_dt= $_POST['july_dt'] ;
                  $aug_ded= $_POST['aug_ded'] ;
                  $aug_dt= $_POST['aug_dt'] ;
                  $sept_ded= $_POST['sept_ded'] ;
                  $sept_dt= $_POST['sept_dt'] ;
                  $oct_ded= $_POST['oct_ded'] ;
                  $oct_dt= $_POST['oct_dt'] ;
                  $nov_ded= $_POST['nov_ded'] ;
                  $nov_dt= $_POST['nov_dt'] ;
                  $dec_ded= $_POST['dec_ded'] ;
                  $dec_dt= $_POST['dec_dt'] ;
                  $jan_ded= $_POST['jan_ded'] ;
                  $jan_dt= $_POST['jan_dt'] ;
                  $feb_ded= $_POST['feb_ded'] ;
                  $feb_dt= $_POST['feb_dt'] ;
                  $other_ded= $_POST['other_ded'] ;
                  $other_dt= $_POST['other_dt'] ;
                  $other_ded1= $_POST['other_ded1'] ;
                  $other_dt1= $_POST['other_dt1'] ;
                  $med_rem= $_POST['med_rem'] ;
                  $nps= $_POST['nps'] ;
                //$Others= $_POST['Others'] ;

                mysqli_query($conn, "UPDATE fy2018_19 SET march_ded='$mar_ded', mar_dt='$mar_dt', apr_ded='$apr_ded', apr_dt='$apr_dt', may_ded='$may_ded', may_dt='$may_dt', june_ded='$june_ded', june_dt='$june_dt', july_ded='$july_ded', aug_ded='$aug_ded', aug_dt='$aug_dt', sept_ded='$sept_ded', sept_dt='$sept_dt', oct_ded='$oct_ded', oct_dt='$oct_dt', nov_ded='$nov_ded', nov_dt='$nov_dt', dec_ded='$dec_ded', dec_dt='$dec_dt', jan_ded='$jan_ded', jan_dt='$jan_dt', feb_ded='$feb_ded', feb_dt='$feb_dt', other_ded='$other_ded', other_dt='$other_dt', other_ded1='$other_ded1', other_dt1='$other_dt1', med_rem='$med_rem', nps='$nps' WHERE emp_id = '$emp_id'");

                //echo "Saved!";
                header("Location: Incometax2019.php?emp_id=$emp_id");
                }
                mysqli_close($conn);
                ?>




    <?php ob_end_flush(); ?>
