<?php ob_start(); ?>
<?php
  include("db.php");
	$serial =$_REQUEST['serial'];
	// sending query
	mysql_query("DELETE FROM calculations WHERE serial = '$serial'")
	or die(mysql_error());

	header("Location: arrear2018.php?ID_NO=");
?>
<?php ob_end_flush(); ?>
