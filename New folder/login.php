<?php
session_start();
include 'config/config.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Web APP</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:#7fBcBd">
    <div id="main-wrapper">
        <center><h2>Login Form</h2>
        <img src="img/Admin.png" class="avatar"/>
        </center>
   
    <form class="myform" action="home.php" method="post">
        <label><b>Username</label><br/>
        <input type="text" class="inputvalues" placeholder="Type your username" required/><br/>
        <label><b>Password</label><br/>
        <input type="password" class="inputvalues" placeholder="Type your password" required/><br/>
        <input  name="login" type="submit" id="login_btn" value="login"/><br>
       <a href="register.php"> <input type="button" id="register_btn" value="Register"/>
    </form>
    <?php
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query="SELECT * FROM user WHERE username='$username' AND password='$password' ";

        $query_run = mysqli_query($con, $query);
        if(mysqli_num_rows($query_run)>0)
        {
            $_SESSION['username']= $username;
            header('location:home.php');
        }
        else
        {
            echo '<script type="text/javascript"> alert("Invalid ") </script>';
        }
    }
    
    
    ?>

    </div>
</body>
</html>