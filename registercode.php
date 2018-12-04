<?php
    include('config/config.php');
?>

<!-- =========== Registration Code Here ==========  -->
<?php
if(isset($_POST['register'])){
    // assigning variables(left) to take values from text field of forms via POST method (right)
    $username = $_POST['username'];
    $email = $_POST['email'];
    $ency_password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // query to check if the entered email exists or not
    $userexist = "SELECT * FROM tbl_user WHERE email = '$email'";
    $result_userexist = $conn->query($userexist);
    //condition if user exists refresh to the location specified with message user=exists
    //esle register
    if($data = $result_userexist->fetch_array()) {
        header('location:sign.php?user=exists');
    } else {
        // query to insert into table
        $register = "INSERT INTO tbl_user (fullname, email, password, address, user_type) VALUES ('$fullname', '$email', '$ency_password', '$address', 'Normal')"; 
        $conn->query($register);
        header('location:sign.php?insert=insert'); 
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
?>