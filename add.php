<?php ob_start(); ?>
<?php 
 
 
 //This gets all the other information from the form 
 $employee_serial=$_POST['employee_serial'] ;
 $user_id= $_POST['user_id'] ;
 $password= $_POST['password'] ;
 $mobile= $_POST['mobile'] ;
 $gmail= $_POST['gmail'] ;
 
 
 // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()) ; 
 mysql_select_db("payroll") or die(mysql_error()) ; 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `login`(employee_serial,user_id,password,mobile,gmail) 
		 VALUES ('$employee_serial','$user_id','$password','$mobile','$gmail')") ; 
 
 
 header("Location: index.php");
 ?>
<?php ob_end_flush(); ?>