<?php
    session_start();
    include 'config/config.php';


    if(isset($_POST['name'], $_POST['cost'], $_POST['teacher']))
    {
        $name = mysqli_escape_string($conn, $_POST['name']);
        $cost = mysqli_escape_string($conn, $_POST['cost']);
        $teacher = mysqli_escape_string($conn, $_POST['teacher']);

        $sql = "INSERT into tbl_tutorials (name, cost, teacher) VALUES ('$name', '$cost', '$teacher')";
        
             
        if( mysqli_query($conn,$sql) )
        {

         
            header('location:admin.php');
        }
        else
        {
            $_SESSION['msg'] = "Record cannot save";
        }

    }