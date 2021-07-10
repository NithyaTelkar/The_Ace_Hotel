<?php
		session_start();
        $user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Room Book</title>
    <link rel="stylesheet" href="css/booked.css">
</head>
<body>
	<table style="width: 100%;position:fixed;background-color:#203D70;">
		<tr >
			<td id="td1" style="padding: 10px; padding-left:250px ;font-size: 48px;color:white;">THE <p style="color: black; display: inline;">ACE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right;color:white;">Hello, <?php echo $user ?></td>
		</tr>
	</table>
	<ul style="margin-top: 80px;margin-left:2px;" class="list">
		<li><a href="user_view.php">My Info</a></li>
		<li><a href="room_list.php" class="active">Book A Room</a></li>
		<li><a href="booked.php">Booked rooms </a></li>
		<li><a href="logout.php">Logout</a></li>
    </ul>
    
    <?php
        $con=mysqli_connect("localhost","root","","hotel");
        $sql = "select * from single_ac where c_name='$user' union select * from single_non_ac where c_name='$user' union select * from double_ac where c_name='$user' union select * from double_non_ac where c_name='$user'";
        $res = mysqli_query($con,$sql);

    ?>

    <div class="box" align="center">
        <h2 style="color:white;">Booked Rooms</h3>
        <?php
            while($row=mysqli_fetch_assoc($res)){
               
        ?>
        <div class="container">
            <div class="left">
            <table class = "gfg"> 
                <tr> 
                    <td class = "geeks">Room No.</td> 
                    <td><?php echo $row['room_no']; $room=$row['room_no']; ?></td> 
                    
                </tr> 
                <tr> 
                    <td class = "geeks">Name</td> 
                    <td><?php echo $row['c_name'] ?></td> 
                    
                </tr> 
                <tr> 
                    <td class = "geeks">E-mail</td> 
                    <td><?php echo $row['c_email'] ?></td> 
                </tr> 
                <tr> 
                        <td class = "geeks">Phone</td> 
                        <td><?php echo $row['c_phone'] ?></td> 
                        
                    </tr> 
            </table>
            
            </div>
            <div class="right">
                <table class = "gfg"> 
                    <tr> 
                        <td class = "geeks">ID-Proof</td> 
                        <td><?php echo $row['idproof'] ?></td> 
                        
                    </tr> 
                    <tr> 
                        <td class = "geeks">Check-In Date</td> 
                        <td><?php echo $row['check_in'] ?></td> 
                    </tr> 
                    <tr> 
                        <td class = "geeks">Check-Out Date</td> 
                        <td><?php echo $row['check_out'] ?></td> 
                    </tr> 
                    <tr>
                        <td></td>
                        <!-- <td><button class="btn" style="column-span: 2;">UNBOOK</button></td> -->
                        <td><a class="btn" style="column-span: 2;" href="unbook.php?rn=<?php echo $room ?>">UNBOOK</a></td>
                        <!-- <button class="btn"></button> -->
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <?php } ?>
        
    </div>


</body>
<style>
    body{
        background-image:url("./images/1.jpg");
    }
</html>