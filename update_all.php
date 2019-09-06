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
                  $sd= $_POST['sd'] ;
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

                mysqli_query($conn, "UPDATE fy2018_19 SET
                  emp_id='$emp_id',
                  name='$name',
                  desig='$desig',
                  pan='$pan',
                  category='$category',
                  sex='$sex',
                  gpf_no='$gpf_no',
                  pran_no='$pran_no',
                  doj='$doj',
                  dor='$dor',
                  sd='$sd',
                  mar='$mar',
                  mar_all_noex='$mar_all_noex',
                  mar_all_ex='$mar_all_ex',
                  april='$april',
                  april_all_noex='$april_all_noex',
                  april_all_ex='$april_all_ex',
                  may='$may',
                  may_all_noex='$may_all_noex',
                  may_all_ex='$may_all_ex',
                  june='$june',
                  june_all_noex='$june_all_noex',
                  june_all_ex='$june_all_ex',
                  july='$july',
                  july_all_noex='$july_all_noex',
                  july_all_ex='$july_all_ex',
                  aug='$aug',
                  aug_all_noex='$aug_all_noex',
                  aug_all_ex='$aug_all_ex',
                  sept='$sept',
                  sept_all_noex='$sept_all_noex',
                  sept_all_ex='$sept_all_ex',
                  oct='$oct',
                  oct_all_noex='$oct_all_noex',
                  oct_all_ex='$oct_all_ex',
                  nov='$nov',
                  nov_all_noex='$nov_all_noex',
                  nov_all_ex='$nov_all_ex',
                  december='$december',
                  dec_all_noex='$dec_all_noex',
                  dec_all_ex='$dec_all_ex',
                  jan='$jan',
                  jan_all_noex='$jan_all_noex',
                  jan_all_ex='$jan_all_ex',
                  feb='$feb',
                  feb_all_noex='$feb_all_noex',
                  feb_all_ex='$feb_all_ex',
                  da_arr='$da_arr',
                  arr='$arr',
                  bonus='$bonus',
                  other_income='$other_income',
                  hra='$hra',
                  wash_all='$wash_all',
                  hra='$hra',
                  hon='$hon',
                  hba_int='$hba_int',
                  _80ccc='$80ccc',
                  it_ded='$it_ded',
                  da_gpf='$da_gpf',
                  gpf='$gpf',
                  gis='$gis',
                  nsc_ppf='$nsc_ppf',
                  nsc_int='$nsc_int',
                  lic='$lic',
                  ulip='$ulip',
                  hba='$hba',
                  education='$education',
                  sec_89='$sec_89',
                  cm_hon='$cm_hon',
                  _80d='$80d',
                  income_other='$income_other',
                  mar_ded='$mar_ded',
                  mar_dt='$mar_dt',
                  apr_ded='$apr_ded',
                  apr_dt='$apr_dt',
                  may_ded='$may_ded',
                  may_dt='$may_dt',
                  june_ded='$june_ded',
                  june_dt='$june_dt',
                  july_ded='$july_ded',
                  july_dt='$july_dt',
                  aug_ded='$aug_ded',
                  aug_dt='$aug_dt',
                  sept_ded='$sept_ded',
                  sept_dt='$sept_dt',
                  oct_ded='$oct_ded',
                  oct_dt='$oct_dt',
                  nov_ded='$nov_ded',
                  nov_dt='$nov_dt',
                  dec_ded='$dec_ded',
                  dec_dt='$dec_dt',
                  jan_ded='$jan_ded',
                  jan_dt='$jan_dt',
                  feb_ded='$feb_ded',
                  feb_dt='$feb_dt',
                  other_ded='$other_ded',
                  other_dt='$other_dt',
                  other_ded1='$other_ded1',
                  other_dt1='$other_dt1',
                  med_rem='$med_rem',
                  nps='$nps' WHERE emp_id = '$emp_id'");

                //echo "Saved!";
                header("Location: Incometax2019.php?emp_id=$emp_id");
                }
                mysqli_close($conn);
                ?>




    <?php ob_end_flush(); ?>
