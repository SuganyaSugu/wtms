<?php
include("connect.php");
$data = array();
$sql="SELECT count(*) as total_client, count(CASE WHEN client_status = 0 then 1 ELSE NULL END) as active_status, count(CASE WHEN client_status != 0 then 1 ELSE NULL END) as in_active_status from client";

if($query=mysqli_query($con,$sql)){
    while($row = $query->fetch_assoc()) {
        $data[] = $row;
    }
} else{ 
    $_SESSION['error']="DB Not connected";
}
?>