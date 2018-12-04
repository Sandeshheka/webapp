<?php
    include 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Register page</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:#7fBcBd">
    <div id="main-wrapper">
        <center><h2>Registration Form</h2>
        <img src="img/Admin.png" class="avatar"/>
        </center>
   
    <form class="myform" action="register.php" method="post">
        <label><b>Username<span class="warning-text"><?php 
                if(isset($validation['username'])) { 
                    echo $validation['username'];
                }
                ?></span></label><br/>
        <input name="username" type="text" class="inputvalues" placeholder="Type your username" required /><br/>
        <label><b>Email<?php 
                if(isset($validation['email'])) { 
                    echo $validation['email'];
                }
                ?></span></label><br/>
        <input name="email" type="text" class="inputvalues" placeholder="Type your Email" required/><br/>
        <label><b>Password<?php 
                if(isset($validation['password'])) { 
                    echo $validation['password'];
                }
                ?></span></label><br/>
        <input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br/>
        <label><b>Conform Password
        <?php 
                if(isset($validation['cpassword'])) { 
                    echo $validation['cpassword'];
                }
                ?></span></label><br/>
                 <input name="cpassword" type="password" class="inputvalues" placeholder="Conform password" required/><br/>
        <label><b>Address
        <?php 
                if(isset($validation['address'])) { 
                    echo $validation['address'];
                }
                ?></span></label><br/>
                  <input name="address" type="text" class="inputvalues" placeholder="Address" required/><br/>
       
        <input name="submit_btn" type="submit" id="signup_btn" value="Register"/><br>
        <input type="button" id="back_btn" value="Back"/>
    </form>
    

    </div>
</body>
</html>
<!-- =========== Registration Code Here ==========  -->
<?php
if(isset($_POST['submit_btn'])){
    // assigning variables(left) to take values from text field of forms via POST method (right)
    $username = $_POST['username'];
    $email = $_POST['email'];
    $ency_password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
    
    // query to check if the entered email exists or not
    $userexist = "SELECT * FROM tbl_user WHERE email = '$email'";
    $result_userexist = $conn->query($userexist);
    //condition if user exists refresh to the location specified with message user=exists
    //else register
    if($data = $result_userexist->fetch_array()) {
        header('location:register.php?user=exists');
    } elseif($ency_password != $cpassword) {
        header('location:register.php?pwd=wrong');
    } else {
        // query to insert into table
        $register = "INSERT INTO tbl_user (username, email, password, user_type) VALUES ('$username', '$email', '$ency_password', 'Normal')"; 
        $conn->query($register);
        header('location:register.php?insert=insert'); 
    }
}
// if user is registered the GET value from header('location..) passes through URL
// below code used to specify the user that he has been registered successfully...
if(isset($_GET['insert'])) {
    ?>
    <script>
        alert('User Successfully Registered!!!'); //this alerts webpage with HTML5 alertbox
    </script>
<?php
}
// below code alerts user if the user already exists via GET method from URL
if(isset($_GET['user'])) {
    ?>
    <script>
        alert('User with same email address already exists!!!'); //this alerts webpage with HTML5 alertbox
    </script>
<?php
}

if(isset($_GET['pwd'])) {
    ?>
    <script>
        alert('Password didnt match'); //this alerts webpage with HTML5 alertbox
    </script>
    <?php
}
?>