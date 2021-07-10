<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];
    $id_proof = $_POST['id_proof'];
    $dob = $_POST['dob'];


if (!empty($username)) {
    if (!empty($password)) {

        // Create connection
        $con = mysqli_connect("localhost", "root", "", "hotel");
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO `customers`(`username`, `password`, `email`, `phone`,`dob`, `id_proof`) VALUES ('$username','$password','$email','$phone','$dob','$id_proof')";
            if (mysqli_query($con, $sql)) {

                // header("Location: login.html");
                echo "<script>
                              alert('Account created successfully');
                              window.location.href='user_login.php';
                          </script>";
            } else {
                echo "Error: " . $sql . "
                            " . $con->error;
            }
        }
        $con->close();
    }
}
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>User registration</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="ox">
        <h1>Registrations</h1>
        <form method="POST" action="register.php">
            <label for="username">Username:</label>
            <input class="input" style="color:black;" type="text" name="username" placeholder="username" required> <br><br>

            <label for="password">Password:</label>
            <input class="input" style="color:black;" type="password" name="password" placeholder="password" required> <br><br>

            <label for="email">Email:</label>
            <input class="input" style="color:black;" type="email" name="email" placeholder="email" required> <br><br>

            <label for="dob">DOB</label>
            <input class="input" style="color:black;" type="date" name="dob" required> <br><br>

            <label for="phone">Phone:</label>
            <input class="input" style="color:black;" type="text" name="phone" placeholder="phone" required> <br><br>

            <label for="id_proof">Id_proof:</label>
            <input class="input" style="color:black;" type="text" name="id_proof" placeholder="id_proof" required> <br><br>

            <input class="button" name="submit" style="text-decoration: none;  font-size: 25px;" type="submit" value="SUBMIT">
        </form>
    </div>
</body>
<style>
    body{
        background-image: url("images/1.jpg");
    }
</style>
</html>