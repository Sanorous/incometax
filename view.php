<?php ob_start(); ?>
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
if(isset($_POST['save']))
{
	$PPF_NO = $_POST['PPF_NO'];
	$PPF_BANK = $_POST['PPF_BANK'];
	$PF_NO = $_POST['PF_NO'];
	$PRAN_NO = $_POST['PRAN_NO'];


	mysql_query("UPDATE employees SET PPF_NO ='$PPF_NO', PPF_BANK ='$PPF_BANK', PF_NO ='$PF_NO', PRAN_NO='$PRAN_NO' WHERE ID_NO = '$id'")
				or die(mysql_error());
	echo "Saved!";
	header("Location: welcome1.php");
}
mysql_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Manager</title>
</head>

<body>
<form id="general-validate" method="post">
<table>
<tr>
	<td>ID:</td><td><input type="text" name="Name" value="<?php echo $ID_NO ?>"/></td></tr>
		<td>Name:</td><td><input type="text" name="Name" value="<?php echo $EMP_NM ?>"/></td></tr>
	<tr><td>Designation:</td><td><textarea rows="1" cols="50" name="Designation"><?php echo $DESIG ?></textarea></td></tr>
	<tr><td>Dob:</td><td><input type="text" name="Dob" value="<?php echo $PPF_NO ?>"/></td></tr>
	<tr><td>Employer:</td><td><input type="text" name="Employer" value="<?php echo $PPF_BANK ?>"/></td></tr>
	<tr><td>Mobile:</td><td><input type="text" name="Mobile" value="<?php echo $PF_NO ?>"/></td></tr>
	<tr><td>other:</td><td><input type="text" name="other" value="<?php echo $PRAN_NO ?>"/></td></tr>
	<tr><td>&nbsp;</td>	<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

	<?php ob_end_flush(); ?>
</body>
</html>
