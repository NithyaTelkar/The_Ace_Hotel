<?php
		session_start();
		$user = $_SESSION["user"];
		if(isset($_POST['submit'])){
			$room = $_POST['room_no'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$idproof = $_POST['idproof'];
			$check_in = $_POST['check_in'];
			$check_out = $_POST['check_out'];
			
			$con = mysqli_connect("localhost","root","","hotel");
			if($_GET['rt']=="a"){
				$sql = "update single_ac set c_name='$user',c_email='$email',c_phone='$phone',idproof='$idproof',check_in='$check_in',check_out='$check_out', status='1' where room_no='$room'";
			}
			if($_GET['rt']=="b"){
				$sql = "update single_non_ac set c_name='$user',c_email='$email',c_phone='$phone',idproof='$idproof',check_in='$check_in',check_out='$check_out', status='1' where room_no='$room'";
			}
			if($_GET['rt']=="c"){
				$sql = "update double_ac set c_name='$user',c_email='$email',c_phone='$phone',idproof='$idproof',check_in='$check_in',check_out='$check_out', status='1' where room_no='$room'";
			}
			if($_GET['rt']=="d"){
				$sql = "update double_non_ac set c_name='$user',c_email='$email',c_phone='$phone',idproof='$idproof',check_in='$check_in',check_out='$check_out', status='1' where room_no='$room'";
			}
			$res = mysqli_query($con,$sql);
			echo "<script>
			alert('Room Booked successfully');
			window.location.href='booked.php';
			</script>";
			
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>User Room Book</title>
	<link rel="stylesheet" href="css/booking.css">
</head>
<body>
	<table style="width: 100%;position:fixed">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color:#000; display: inline;">ACE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $user ?></td>
		</tr>
	</table>
	<ul style="margin-top: 80px;margin-left:2px;" class="list">
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php" class="active">Book A Room</a></li>
		<li><a href="booked.php">booked rooms</a></li>

		<li><a href="index.php">Logout</a></li>
	</ul>
	<?php
		$con=mysqli_connect("localhost","root","","hotel");
		$sql = "SELECT * FROM customers where username='$user'";
		$res=mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($res)){
	?>
	<div class="book" align="center">
		<form method="POST">
			<div class="header" readonly="readonly">ROOM No</div>
			<input class="inp" type="text" style="text-align: center;" name="room_no" value="<?php echo $_GET['rn'] ?>">	
			<br><br>
			<div class="header">Username</div>
			<input class="inp" type="text" style="text-align: center;" name="username" value="<?php echo $row['username'] ?>">	
			<br><br>
			<div class="header">Email</div>
			<input class="inp" type="text" style="text-align: center;" name="email" value="<?php echo $row['email'] ?>">	
			<br><br>
			<div class="header">Phone</div>
			<input class="inp" type="text" style="text-align: center;" name="phone" value="<?php echo $row['phone'] ?>">	
			<br><br>
			<div class="header">ID Proof</div>
			<select class="header" align="center" style="text-align: center;" name="idproof" value="<?php echo $row['idproof'] ?>">
				<option>Aadhar</option>
				<option>Driving License</option>
				<option>Voter ID</option>
			</select>	
			<br><br>
			<div class="header">Check-in Date</div>
			<input class="inp" type="date" name="check_in">
			<br><br>
			<div class="header">Check-out Date</div>
			<input class="inp" type="date" name="check_out">	
			<br><br>
			<button class="btn" type="submit" name="submit" style="font-size:x-large">Submit</button>	
			<br><br>
		</form>
	</div>
	<?php } ?>

</body>
<style>
	body{
		background-image:url("./images/1.jpg");
	}
	.header{
		color:#fff;
	}
</html>