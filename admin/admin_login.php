<?php
	session_start();
	if(isset($_POST['login'])){
		
		$conn = mysqli_connect("localhost","root","", "hotel"); 
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$username = $_POST["username"];
		$password = $_POST["password"];

		$sql = "select * from admin where username = '$username' and password = '$password'";
		$result = mysqli_query($conn, $sql);  
		$row = mysqli_fetch_array($result);  
		$count = mysqli_num_rows($result); 

		if($count == 1){  
			echo "<script>
							alert('Logged in successfully');
							window.location.href='admin_dash.php';
						</script>"; 
						$_SESSION["admin"]=$username;
		}  
		else{  
			echo "<script>alert('Login failed. Invalid username or password.')</script>";  
		}    
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="../css/login.css">
</head>

<body>
	<div class="box">
		<form method="post">
			<table>
				<!-- <tr>
					<td colspan="2"><p style="font-size: 35px; color: white; padding"><b>User Login</b></p></td>
				</tr> -->
				<h2 style="color: white;">Admin login</h1>
				<tr>
					<td>Username:</td>
					<td><input class="input" type="text" name="username" placeholder="Enter name" required></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" type="password" name="password" placeholder="Enter password" required></td>
				</tr>
			</table>
		<br>
		<input class="button" name="login" style="text-decoration: none;  font-size: 25px;" type="submit" value="Login">
		</form>
		<br>

	</div>
</body>

<style>

body{
	background-image:url("../images/1.jpg");
}

</style>

</html>