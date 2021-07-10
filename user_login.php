<?php
	session_start();
	if(isset($_POST['login'])){
		// $conn = new mysqli("localhost","root","", "iwp");
		$conn = mysqli_connect("localhost","root","", "hotel"); 
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$username = $_POST["username"];
		$password = $_POST["password"];

		$sql = "select * from customers where username = '$username' and password = '$password'";
		$result = mysqli_query($conn, $sql);  
		$row = mysqli_fetch_array($result);  
		$count = mysqli_num_rows($result); 

		if($count == 1){  
			echo "<script>
							alert('Logged in successfully');
							window.location.href='user_view.php';
						</script>"; 
						$_SESSION["user"]=$username;
		}  
		else{  
			echo "<script>alert('Login failed. Invalid username or password.')</script>";  
		}    
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" href="css/login.css">
</head>

<body>
	
	<div class="box">
		<form method="post">
			<table>
				<!-- <tr>
					<td colspan="2"><p style="font-size: 35px; color: #094198; padding"><b>User Login</b></p></td>
				</tr> -->
				<h2 style="color: white;">User login</h1>
				<tr>
					<td>Username:</td>
					<td><input class="input" style="color:black;" type="text" name="username" placeholder="Enter name" required></td>
					<br>
				</tr>
				<tr><td><br></td></tr>
				<tr>
					<td>Password:</td>
					<td><input class="input" style="color:black;"  type="password" name="password" placeholder="Enter password" required></td>
				</tr>
			</table>
		<br>
		<input class="button" name="login" style="text-decoration: none;  font-size: 25px;" type="submit" value="Login">
		</form>
		<br>
		<table>
			<tr>
				<td style="color: white;"><b>New User</b></td>
				<!-- <td style="color: #094198;"><b>Unable to Login</b></td> -->
			</tr><tr><td></td></tr><tr><td></td></tr>
			<tr>
				<td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="register.php">User SignUp</a></button></td>
				<!-- <td><button type="button"><a style="text-decoration: none;  font-size: 25px;" href="user_forgot_pwd.php">Forgot Password</a></button></td> -->
			</tr>
		</table><br>
	</div>
</body>
<style>
body{
	background-image:url("images/1.jpg");
}
</style>
</html>