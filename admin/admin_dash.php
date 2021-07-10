<?php 
session_start();
$user = $_SESSION["admin"];

?>
<!doctype html>
<html lang="en">


<head>
	<title>User Room Book</title>
	<link rel="stylesheet" href="../css/room_list.css">
</head>
<body>
	<table style="width: 100%;position:fixed">
		<tr>
			<td id="td1" style="padding: 10px; font-size: 48px;">THE <p style="color: black; display: inline;">ACE</p> HOTEL</td>
			<td id="td1" style="font-size: 25px; text-align: right; "> <a style="color:white; text-decoration:none;" href="../logout.php">logout</a></td>
            
			<td id="td1" style="font-size: 25px; text-align: right;">Hello, <?php echo $user ?></td>
		</tr>
	</table>

                <table  style="width:100%;">
                <br><br><br><br><br><br>
                <h3 style='text-align:center;padding-bottom:1cm;font-size:xx-large' >Booked Users Details</h3>
                    <?php 
                    
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"hotel");
                    $query = "select * from single_ac where status = 1 union select * from single_non_ac where status = 1 union select * from double_ac where status = 1 union select * from double_non_ac where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    $count=mysqli_num_rows($query_run);




                    if ($count!=null) {
                    ?>
                <thead>
                        <tr>
                          
                            <th>Room no</th>
                        
                            <th>User name</th>
                            <th>User Mobile</th>
                            <th>User email</th>
                            <th>Check in</th>
                            <th>Check out</th>

                            <th>Unbook</th>
                        </tr> 

                    </thead>
        		<?php 
                    }

                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        if($row){
                         
                        
                        ?>
                            <tr>
                                

                          
                                <td><?php echo $row['room_no'];?></td>
                            
                                <td><?php echo $row['c_name'];?></td>
                                <td><?php echo $row['c_phone'];?></td>
                                <td><?php echo $row['c_email'];?></td>
                                <td><?php echo $row['check_in'];?></td>
                                <td><?php echo $row['check_out'];?></td>

                                <td><a  href="../unbook.php?rn=<?php echo $row['room_no'];?>" style="padding-top: 0px; padding-bottom: 0px;" class="btn btn-danger role="button" ?> Unbook</a></td>
                            </tr>
                            
                        <?php
                    }
                    
                    }

         
            
                    ?>
                    
                   
               
            </table>
            
        	</div>

    </body>
</html>
