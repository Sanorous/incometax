<?php ob_start(); ?>


                <?php
                require("db.php");

                if(isset($_POST['save']))
                {

                  $emp_id=$_POST['emp_id'];
                  $name=$_POST['name'] ;
                  $desig= $_POST['desig'] ;
                  $pan= $_POST['pan'] ;
                  $category= $_POST['category'] ;
                  $sex= $_POST['sex'] ;
                  $gpf_no= $_POST['gpf_no'] ;
                  $pran_no= $_POST['pran_no'] ;
                  $doj= $_POST['doj'] ;
                  $dor= $_POST['dor'] ;
                  $sd = $_POST['sd'];

                //$Others= $_POST['Others'] ;

                mysqli_query($conn, "UPDATE fy2018_19 SET name='$name', desig='$desig', pan='$pan', category='$category', sex='$sex', gpf_no='$gpf_no', pran_no='$pran_no', doj='$doj', dor='$dor', sd='$sd' WHERE emp_id = '$emp_id'");

                //echo "Saved!";
                header("Location: Incometax2019.php?emp_id=$emp_id");
                }
                mysqli_close($conn);
                ?>




    <?php ob_end_flush(); ?>
