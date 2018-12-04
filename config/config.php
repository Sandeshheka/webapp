<?php
    // $con = mysqli_connect("localhost","root","") or die ("unable to connect");
    // mysqli_select_db( $con,"logindb");

    //database connection 
    $config['base_url']='http://localhost/AWE_Sandesh/';
    $hostname = "localhost";
	$username = "root";
	$password = "";
    $dbname = "awe_sandesh";
    $dbdriver = "mysql";
	$conn = new mysqli($hostname, $username, $password, $dbname);


?>
