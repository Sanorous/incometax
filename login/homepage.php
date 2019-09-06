<?php ob_start(); ?>
<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Payroll Software for Vidhan Sabha Sachivalaya</title>
<?php
		if(isset($_COOKIE["CheckLogin"]))
		{
		}
		else
		{
			$id = $_POST["user_id"];
			$pass = $_POST["password"];
			$password="";
			$loginId="";
			$con=mysqli_connect("localhost", "root", "", "payroll");
			
			if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			else
			{
			
				$result =	mysqli_query($con,"select * from login");
				//$password="Admin@123";
				
				while($row = mysqli_fetch_array($result))
				  {
				  $password = $row['password'];
				  $loginId = $row['user_id'];
				  }
				
				if($id == $loginId && $pass == $password)
				{
					if(isset($_POST["remember"]))
					{
						$expire=time()+60*60*24;
						setcookie("CheckLogin", "LoggedIn", $expire);
					}
				}
				else
				{
					header('location:index.html?err=1');
				}
			}
			mysqli_close($con);
		}
    ?>
	
	<script>
    	function delCookie()
		{
		   var cookies = document.cookie.split(";");
			for(var i=0; i < cookies.length; i++) {
				var equals = cookies[i].indexOf("=");
				var name = equals > -1 ? cookies[i].substr(0, equals) : cookies[i];
				document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
			}
   			window.location="adminpanel.html";
		}
		function showpopup()
		{
			document.getElementById("popup").style.display="block";
		}
		function hidepopup()
		{
			document.getElementById("popup").style.display="none";
		}
    </script>

</head>

<body style="background-image: url('http://localhost/aapkidastak/images/ComputerDesktopWallpapersCollection727_058.jpg')">
<center>

<form enctype="multipart/form-data" action="add.php" method="post">
<table>

	<tr>
		<td>Name:</td>
		<td><input type="text" name="DivName" /></td>
	</tr>
	<tr>
		<td>News Heading</td>
		<td><textarea rows="2" cols="50" name="heading"></textarea></td>
	</tr>
	<tr>
		<td>Content</td>
		<td><textarea rows="4" cols="50" name="content"></textarea></td>
	</tr>
	<tr>
		<td>Date: </td>
		<td><input type="text" name="date" /><br> </td>
	</tr>
	<tr>
		<td>Photo: </td>
		<td><input type="file" name="photo"><br> </td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" /></td>
	</tr>
</table>
</form>
<div>
<p ><a href="pdfupload.php"><h2>Click here to upload new PDF</h2></a></p>
</div>
<table border="1">
	
			<?php
			include("db.php");
			
				
			$result=mysql_query("SELECT * FROM manager");
			
			while($test = mysql_fetch_array($result))
			{
				$id = $test['DivID'];	
				echo "<tr align='center'>";	
				echo"<td width='3%'><font color='black'>" .$test['DivID']."</font></td>";
				echo"<td width='7%'><font color='black'>" .$test['DivName']."</font></td>";
				echo"<td width='15%'><font color='black'>" .$test['Heading']."</font></td>";
				echo"<td width='60%'><font color='black'>". $test['Content']. "</font></td>";
				echo"<td width='5%'><font color='black'>". $test['date']. "</font></td>";
				echo"<td widht='5%'><font color='black'>". $test['Photo']. "</font></td>";
				echo"<td widht='5%'> <a href ='view.php?DivID=$id'>Edit</a>";
				//*echo"<td> <a href ='del.php?DivID=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysql_close($conn);
			?>
</table>
</center>
	<?php ob_end_flush(); ?>
</body>
</html>
