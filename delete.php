<?php 
    session_start();
    include 'config/config.php';

    if(isset($_POST['id']))
    {

        $id = (int)$_POST['id'];
     
        $sql = "delete from tbl_tutorials where id = $id";
       
        //execute 

        if( mysqli_query($conn,$sql) )
        {
            $_SESSION['msg'] = "Record deleted";
        }
        else
        {
            $_SESSION['msg'] = "Record cannot delete";
        }


    }
    
    header('location:admin.php');
   