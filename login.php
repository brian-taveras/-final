<?php

if (isset($_POST['username'])) {
	$uname = $_POST['username'];
	$password = $_POST['password'];

	require('./conexion.php');

	$con = new Conexion();

	$users = $con->getUsers($uname,$password );


	if (count($users) == 1) {
		$_SESSION["user"] = $uname;

		echo  '<script language="javascript">
								location.href = "index.php";

						 </script>';
		exit();
	} else {

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
		<img src="img/man.png" />
		<form method="post" action="login.php">
			<div class="form-input">
				<input type="text" id="user" name="username" placeholder="Enter the User Name" />
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password" />
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login" />
		</form>
	</div>
</body>

</html>