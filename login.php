<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="final";

mysql_connect($host,$user,$password);
mysql_select_db($db);
$db = new mysqli('localhost', $user, $password, $db);

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];

	// $sql="select * from usuario where usuario='.$user.' AND contraseña='.$password.' limit 1";
	// $sql="select * from usuario where usuario='brian1' AND contraseña='' limit 1";
  $sql="SELECT * FROM `usuario` WHERE politecnico ='".$uname."' and contrasena = '".$password."'";


	$result=mysql_query($sql);

	    if(mysql_num_rows($result)==1){
				$_SESSION["user"] = $uname;

					echo  '<script language="javascript">
								location.href = "index.php";

						 </script>';
	        exit();
	    }
	    else {

					echo  '<script language="javascript">
								location.href = "login.php";
								alert("Su contrasena es incorrecta");
								document.getElementById("campoUsuario").value="sdf";
						 </script>';
	        exit();
	    }




}



 ?>

<!DOCTYPE html>
<html>
<head>
 <title> Login </title>
 <link rel="stylesheet" a href="css/login.css">
 <link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>
 <div class="container">
 <img src="img/man.png"/>
 <form method="post" action="login.php">
 <div class="form-input">
 <input type="text" id="user" name="username" placeholder="Enter the User Name"/>
 </div>
 <div class="form-input">
 <input type="password" name="password" placeholder="password"/>
 </div>
 <input type="submit" type="submit" value="LOGIN" class="btn-login"/>
 </form>
 </div>
</body>
</html>