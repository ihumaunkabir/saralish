<?php

if(isset($_POST['login']))
{
	//checking emtpy  fields
	try{
		if(empty($_POST['username'])){
			throw new Exception("Username is required!");
			
		}
		if(empty($_POST['password'])){
			throw new Exception("Password is required!");
			
		}
		
		if($_POST["username"] == 'admin' && $_POST['password']  == 'yourpass'){ //edit your  username and password here
			session_start();
			$_SESSION['name']="oasis";
			header('location: messages.php');
		}
		else{
			throw new Exception("Username or Password is wrong, try again!");
			
			header('location: login.php');
		}
	}
	catch(Exception $e){
		$error_msg=$e->getMessage();
	}
}
?>

<!DOCTYPE html>
<html>

<!-- Head Started-->
<head>

	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<style type="text/css">
		form{
			padding: 50px;
			font-size: 20px;
		}
		form input{
			font-size: 20px;
		}
		a:hover{
			color:white;
		}
	</style>

</head>
<!-- Head Ended-->

	<body>
	<center>
	<h1>Login</h1>

	<?php
	if(isset($error_msg))
	{
		echo $error_msg;
	}
	?>

		<form action="" method="post">
			
			<table>
				<tr>
					<td>Username </td>
					<td><input type="text" name="username"></input></td>
				</tr>

				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></input></td>
				</tr>
			
				<tr><td><br></td></tr>
				<tr>
					<td><button><input type="submit" name="login" value="Login"></input></button></td>
					
				</tr>
			</table>
		</form>
	</center>

  </body>
  
</html>