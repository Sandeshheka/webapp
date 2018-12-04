<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    session_start();
    include 'config/config.php';
    //echo $eid;

    $sql = "select * from tbl_tutorials where id= $id";
    $sqlRun = mysqli_query($conn,$sql);
    $tutorials = [];
    while($data = mysqli_fetch_assoc($sqlRun)){
        $tutorials[] = $data;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>All Tutorials</h1>
<form action="update.php" method="post">
    <?php foreach($tutorials as $tutorial): ?>
        <h3>
        Name:<input type="text" name="name" id="" value="<?= $tutorial['name']; ?>">
        </h3>
        <h3>
        <p>
        Cost: <input type="text" name="cost" id="" value=" <?= $tutorial['cost']; ?> ">
        </h3>
        <h3>
        <p>
        Teacher: <input type="text" name="teacher" id="" value=" <?= $tutorial['teacher']; ?> ">
        </h3>
           

            <!-- <a onclick="return confirm('are you sure?')" href="delete.php?did=<?php // echo $course['id']; ?>">delete</a> -->

            
                <input type="submit" value="update">
                <input type="hidden" name="id" value=<?= $tutorial['id']; ?>>
                
            </form>

        </p>
    <?php endforeach; ?>

    
</body>
</html>