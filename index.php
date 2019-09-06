<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: welcome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome to Arrear Calculating Portal</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="">
    <center>

  <table cellspacing="50">
  <tr>
  <td>
    <div id="login">
    <h2>Login for Administrator</h2>
    <br />
    <form action="" method="post">
    <label>UserName :</label>
    <input id="name" name="username" placeholder="username" type="text">
    <label>Password :</label>
    <input id="password" name="password" placeholder="**********" type="password">
    <input name="submit" type="submit" value=" Login ">
    <span><?php echo $error; ?></span>
    </form>
    </div>
    </div>
  </td>
  </tr>
  </table>
  </center>
  </div>

</body>
</html>
