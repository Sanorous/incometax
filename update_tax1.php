<?php ob_start(); ?>


                <?php
                require("db.php");

                if(isset($_POST['save']))
                {
                  $mar= $_POST['mar'] ;
                  $mar_all_noex= $_POST['mar_all_noex'] ;
                  $mar_all_ex= $_POST['mar_all_ex'] ;
                  $april= $_POST['april'] ;
                  $april_all_noex= $_POST['april_all_noex'] ;
                  $april_all_ex= $_POST['april_all_ex'] ;
                  $may= $_POST['may'] ;
                  $may_all_noex= $_POST['may_all_noex'] ;
                  $may_all_ex= $_POST['may_all_ex'] ;
                  $june= $_POST['june'] ;
                  $june_all_noex= $_POST['june_all_noex'] ;
                  $june_all_ex= $_POST['june_all_ex'] ;
                  $july= $_POST['july'] ;
                  $july_all_noex= $_POST['july_all_noex'] ;
                  $july_all_ex= $_POST['july_all_ex'] ;
                  $aug= $_POST['aug'] ;
                  $aug_all_noex= $_POST['aug_all_noex'] ;
                  $aug_all_ex= $_POST['aug_all_ex'] ;
                  $sept= $_POST['sept'] ;
                  $sept_all_noex= $_POST['sept_all_noex'] ;
                  $sept_all_ex= $_POST['sept_all_ex'] ;
                  $oct= $_POST['oct'] ;
                  $oct_all_noex= $_POST['oct_all_noex'] ;
                  $oct_all_ex= $_POST['oct_all_ex'] ;
                  $nov= $_POST['nov'] ;
                  $nov_all_noex= $_POST['nov_all_noex'] ;
                  $nov_all_ex= $_POST['nov_all_ex'] ;
                  $december= $_POST['december'] ;
                  $dec_all_noex= $_POST['dec_all_noex'] ;
                  $dec_all_ex= $_POST['dec_all_ex'] ;
                  $jan= $_POST['jan'] ;
                  $jan_all_noex= $_POST['jan_all_noex'] ;
                  $jan_all_ex= $_POST['jan_all_ex'] ;
                  $feb= $_POST['feb'] ;
                  $feb_all_noex= $_POST['feb_all_noex'] ;
                  $feb_all_ex= $_POST['feb_all_ex'] ;

                //$Others= $_POST['Others'] ;

                mysqli_query($conn, "UPDATE fy2018_19 SET mar='$mar', mar_all_noex='$mar_all_noex', mar_all_ex='$mar_all_ex', april='$april', april_all_noex='$april_all_noex', april_all_ex='$april_all_ex', may='$may', may_all_noex='$may_all_noex', may_all_ex='$may_all_ex', june='$june', june_all_noex='$june_all_noex', june_all_ex='$june_all_ex', july='$july', july_all_noex='$july_all_noex', july_all_ex='$july_all_ex', aug='$aug', aug_all_noex='$aug_all_noex', aug_all_ex='$aug_all_ex', sept='$sept', sept_all_noex='$sept_all_noex', sept_all_ex='$sept_all_ex', oct='$oct', oct_all_noex='$oct_all_noex', oct_all_ex='$oct_all_ex', nov='$nov', nov_all_noex='$nov_all_noex', nov_all_ex='$nov_all_ex', december='$december', dec_all_noex='$dec_all_noex', dec_all_ex='$dec_all_ex', jan='$jan', jan_all_noex='$jan_all_noex', jan_all_ex='$jan_all_ex', feb='$feb', feb_all_noex='$feb_all_noex', feb_all_ex='$feb_all_ex' WHERE emp_id = '$emp_id'");

                //echo "Saved!";
                header("Location: Incometax2019.php?emp_id=$emp_id");
                }
                mysqli_close($conn);
                ?>




    <?php ob_end_flush(); ?>
