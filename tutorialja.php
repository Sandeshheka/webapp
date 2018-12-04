<?php 

//get data
require_once('config/config.php'); 

//build query
$sql = "SELECT * FROM tbl_tutorials";

$result = mysqli_query($conn,$sql);

$j_array = array();
while ($row = mysqli_fetch_assoc($result)) {
    $j_array[]= $row;

}
echo json_encode($j_array);

//header('Content-type: application/json');
//

?>