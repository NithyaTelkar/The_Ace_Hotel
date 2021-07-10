<?php 
   session_start();
    
    $a = $_GET['rn'];

    if(($a >= ('99')) &&  ($a<= ('199'))  ){
        $demo = "single_ac";
    }
    elseif(($a >= ('200')) &&  ($a<= ('299'))  ){
        $demo = "single_non_ac";
    }
    elseif(($a>= ('300')) &&  ($a<= ('399'))  ){
        $demo =  "double_ac";
    }
    elseif(($a >= ('400')) &&  ($a<= ('499'))  ){
        $demo =  "double_non_ac";
    }
        else {
            echo "";
        }
    
     

 
    $connection = mysqli_connect("localhost","root","","hotel");
    
   
    $query = "update `$demo` set c_name = null, c_email = null, c_phone = null,idproof = null,check_in = null,check_out = null,status = 0 where room_no = $a ";
    $query_run = mysqli_query($connection,$query);


    $c_name=$_SESSION['user'];
   
    $admne=$_SESSION['admin'];
    
    if ($_SESSION = $c_name){
    header("location:booked.php");   
    }

    else if($_SESSION = $admne){
        header("location:admin/admin_dash.php");
    }
    else {

        header("location:../index.html");
    }


?>