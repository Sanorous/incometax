<?php
	$conn = mysqli_connect('50.62.209.17', 'income', 'tax@123');
//	mysqli_set_charset($con, 'utf8');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysqli_error());
	}
	mysqli_select_db($conn, "incometax");

?>
