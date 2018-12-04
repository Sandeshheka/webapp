<?php
session_start();
    include 'logedNav.php';
 include 'config/config.php';
    $name= $teacher= $amount=  "";
if($_SERVER['REQUEST_METHOD']=="POST"){
$name=$_POST['name'];
$amount = $_POST['amount'];
$teacher= $_POST['teacher'];

$sql = "INSERT INTO tbl_tutorials (name, cost, teacher)
VALUES ('$name', '$amount', '$teacher')";

if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 header("location: index.php");

}

    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body  style="background-color:#7fBcBd">
        <div id="header">
            <h2> Welcome to Tutorials Page</h2>
        </div> 

        <legend align="center" >  <h1>Tutorials Database</h1> </legend>

        <form action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST"  > 
				<legend  ><h2>Add New Tutorial Detail</h2> </legend>

					<div class="row" >
					<div class="col-md-4" >
						<label>Name</label>
					</div>
					<div class="col-md-8">
						<input type="text" name="name" placeholder="Enter Name" required="text" >
					</div>

				</div>

				<div class="row" >
					<div class="col-md-4" >
						<label>Amount</label>
					</div>
					<div class="col-md-8">
						<input type="text" name="amount" placeholder="Enter Amount"  required="" >
					</div>

				</div>

				<div class="row" >
					<div class="col-md-4" >
						<label>Teacher</label>
					</div>
					<div class="col-md-8">
						<input type="text" name="teacher" placeholder="Enter Teacher Name"  required="text" >
					</div>

				</div>


				<div class="row">
					<div class="col-md-4" >
						<button type="submit" class="btn btn-success"> Submit</button>
					</div>
					</div>
				</form>





        <table style="width:100%" border="1px">
        <tr>
            <th>Id </th>
            <th>Name</th>
            <th>Cost</th>
            <th>Teacher</th>
        </tr>
 <?php       
  
$sql = "SELECT * FROM tbl_tutorials";
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	?>
            <tr>
            	<td> <?php  echo $row["id"]?> </td>
                <td><?php  echo $row["name"]?></td>
                <td><?php  echo $row["cost"]?></td>
                <td><?php  echo $row["teacher"]?></td>
              
                 
            </tr>
        <?php 
}
    }
    else{
      print "No Data Found ";
    }
    ?>
</table>





    
</body>
</html>