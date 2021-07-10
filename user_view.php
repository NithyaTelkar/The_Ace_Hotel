<?php
		session_start();
		$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Signed In</title>
	<link rel="stylesheet" href="css/user_view.css">
</head>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "hotel");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
			$sql = "SELECT * from customers where username='$user'";
			$result=mysqli_query($conn, $sql);
			$row=mysqli_fetch_assoc($result); 
		?>
	<table style="width: 100%;position:fixed;">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px; position: sticky; z-index: 1">THE <p style="color: black; display: inline;">ACE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $user; ?></td>
		</tr>
	</table>
	<ul style="margin-top: 80px;margin-left:2px">
		<li><a href="user_view.php" class="active">My Info</a></li>
		<li><a href="room_list.php">Book A Room</a></li>
		
		<li><a href="booked.php">Booked rooms</a></li>
		<li><a href="index.html">Logout</a></li>
	</ul>
	<div style="margin-left:25%;padding:1px 16px;height:700px;">
		<p style="margin-left: 10%; margin-top: 5%; font-size: 24px;"></p>
			<table  class="basic_box decor">
				<tr>
					<td colspan="2"><p style="font-size: 38px; text-align: center;"><b>Welcome!</b></p>
				</td>
				<tr>
					<td><b>Username: </b></td>
					<td><?php echo $row['username'] ?><br></td>
				</tr>
				<tr>
					<td><b>Phone number: </b></td>
					<td><?php echo $row['phone'] ?><br></td>
				</tr>
				<tr>
					<td><b>Email address: </b></td>
					<td><?php echo $row['email'] ?><br></td>
				</tr>
				<tr>
					<td><b>Date of birth: </b></td>
					<td><?php echo $row['dob'] ?><br></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
	</div>
</body>
<style>

body{
	background-image:url("images/1.jpg");
}

</style>

</html>