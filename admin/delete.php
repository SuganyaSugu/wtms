<?php
include("connect.php");
$id = $_POST['id'];
$sql = "update client set client_status = 2 where client_id =".$id;
echo $query=mysqli_query($con,$sql);
?>