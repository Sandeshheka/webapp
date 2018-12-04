<?php
//  var_dump($_POST);
//  echo $_POST['title'];
session_start();
    include 'config/config.php';
if(isset($_POST['id'],$_POST['name'],$_POST['cost'],$_POST['teacher']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $cost=$_POST['cost'];
    $teacher=$_POST['teacher'];


    
$sql = "UPDATE tbl_tutorials SET name='$name', cost='$cost', teacher = '$teacher' WHERE id= $id";
$sqlRun = mysqli_query($conn,$sql);

header('location:admin.php');
}
?>