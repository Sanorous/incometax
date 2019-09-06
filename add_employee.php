<?php ob_start(); ?>
<?php 
 
 
 //This gets all the other information from the form 
 $Serial=$_POST['Serial'] ;
 $employee_code= $_POST['employee_code'] ;
 $Name= $_POST['Name'] ;
 $Designation= $_POST['Designation'] ;
 $PAN= $_POST['PAN'] ;
 $dob= $_POST['dob'] ;
 $password= $_POST['password'] ;
 $mobile= $_POST['mobile'] ;
 $gmail= $_POST['gmail'] ;
 
 
 
 // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()) ; 
 mysql_select_db("payroll") or die(mysql_error()) ; 
 
 //Writes the information to the database 
 mysql_query("INSERT INTO `details`(Serial, employee_code, Name, Designation, PAN, dob, password, mobile, gmail) 
		 VALUES ('$Serial','$employee_code','$Name', '$Designation', '$PAN', '$dob', '$password','$mobile','$gmail')") ; 
 
 
 header("Location: index.html");
 ?>
<?php ob_end_flush(); ?>