<?php ob_start(); ?>
<?php
require("db.php");
mysql_query ("set character_set_client='utf8'");
 mysql_query ("set character_set_results='utf8'");
 mysql_query ("set collation_connection='utf8_general_ci'");
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
        //echo $EMP_NM;

	$PPF_NO_save = $_POST['PPF_NO'];
	$PPF_BANK_save = $_POST['PPF_BANK'];
	$PF_NO_save = $_POST['PF_NO'];
	$PRAN_NO_save = $_POST['PRAN_NO'];


	mysql_query("UPDATE employees SET PPF_NO ='$PPF_NO_save', PPF_BANK ='$PPF_BANK_save', PF_NO ='$PF_NO_save', PRAN_NO='$PRAN_NO_save' WHERE ID_NO = '$id'")
				or die(mysql_error());
	echo "Saved!";
	header("Location: welcome1.php");

mysql_close($conn);
?>
	<?php ob_end_flush(); ?>
