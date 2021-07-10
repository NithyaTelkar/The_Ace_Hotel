<?php
		session_start();
		$user = $_SESSION["user"];
	?>
<!DOCTYPE html>
<html>
<head>
	<title>User Room Book</title>
	<link rel="stylesheet" href="css/room_list.css">
</head>
<body>
	<table style="width: 100%;position:fixed">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color:black; display: inline;">ACE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $user ?></td>
		</tr>
	</table>
	<ul style="margin-top: 80px;margin-left:2px;" class="list">
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="bookroom.php" class="active">Book A Room</a></li>
		<li><a href="booked.php">Booked rooms</a></li>
		<li><a href="index.html">Logout</a></li>
	</ul>

		<div class="rooms" align="center">
			<h2>Single AC</h2>
				<?php
					$con = mysqli_connect("localhost","root","","hotel");
					$sql = "select * from single_ac;";
					$query_run = mysqli_query($con,$sql);
					while($row = mysqli_fetch_assoc($query_run)){
				?>
				<div class="a" align="center">
					<div class="sub">
						<h3>Room no.<?php echo $row['room_no']; ?></h3>
						<p>Status: <?php if($row['status']==0){ ?> Available<?php }else{ ?>Booked<?php } ?></p>
						<a href="booking.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" <?php if($row['status']==1){ ?> style="pointer-events: none;opacity:0.5" <?php } ?> disabled class="btn"><?php 
						if($row['status']==1){
							echo "BOOKED";

						}
						else{
							echo "BOOK NOW";
						}
						?></a>
					</div>
				</div>
				<?php } ?>
			<br>
			<h2>Single Non-AC</h2>
				<?php
					$con = mysqli_connect("localhost","root","","hotel");
					$sql = "select * from single_non_ac;";
					$query_run = mysqli_query($con,$sql);
					while($row = mysqli_fetch_assoc($query_run)){
				?>
				<div class="a" align="center">
					<div class="sub">
						<h3>Room no.<?php echo $row['room_no']; ?></h3>
						<p>Status: <?php if($row['status']==0){ ?> Available<?php }else{ ?>Booked<?php } ?></p>
						<a href="booking.php?rn=<?php echo $row['room_no'] . "&rt=b";?>" <?php if($row['status']==1){ ?> style="pointer-events: none;opacity:0.5" <?php } ?> disabled class="btn"><?php 
						if($row['status']==1){
							echo "BOOKED";

						}
						else{
							echo "BOOK NOW";
						}
						?></a>
					</div>
				</div>
				<?php } ?>

				<h2>Double AC</h2>
				<?php
					$con = mysqli_connect("localhost","root","","hotel");
					$sql = "select * from double_ac;";
					$query_run = mysqli_query($con,$sql);
					while($row = mysqli_fetch_assoc($query_run)){
				?>
				<div class="a" align="center">
					<div class="sub" >
						<h3>Room no.<?php echo $row['room_no']; ?></h3>
						<p>Status: <?php if($row['status']==0){ ?> Available<?php }else{ ?>Booked<?php } ?></p>
						<a href="booking.php?rn=<?php echo $row['room_no'] . "&rt=c";?>" <?php if($row['status']==1){ ?> style="pointer-events: none;opacity:0.5" <?php } ?> disabled class="btn"><?php 
						if($row['status']==1){
							echo "BOOKED";

						}
						else{
							echo "BOOK NOW";
						}
						?></a>
					</div>
				</div>
				<?php } ?>

				<h2>Double Non-AC</h2>
				<?php
					$con = mysqli_connect("localhost","root","","hotel");
					$sql = "select * from double_non_ac;";
					$query_run = mysqli_query($con,$sql);
					while($row = mysqli_fetch_assoc($query_run)){
				?>
				<div class="a" align="center">
					<div class="sub">
						<h3>Room no.<?php echo $row['room_no']; ?></h3>
						<p>Status: <?php if($row['status']==0){ ?> Available<?php }else{ ?>Booked<?php } ?></p>
						<a href="booking.php?rn=<?php echo $row['room_no'] . "&rt=d";?>" <?php if($row['status']==1){ ?> style="pointer-events: none;opacity:0.5" <?php } ?> disabled class="btn"><?php 
						if($row['status']==1){
							echo "BOOKED";

						}
						else{
							echo "BOOK NOW";
						}
						?></a>
					</div>
				</div>
				<?php } ?>
		</div>
</body>
<style>

body{
	background-image:url("images/1.jpg");
}

</style>

</html>