<?php
session_start();
include("connect.php");
if(isset($_POST['submit'])){
    $client_name=$_POST['client_name'];
    $status=$_POST['status'];
    $template=$_POST['template1'];
    $client_id=$_POST['client_id'];


    $sql="update client set client_name='".$client_name."',client_template='".$template."',client_status=".$status." where client_id = ".$client_id;
    
    if($query=mysqli_query($con,$sql)){
        $_SESSION['success'] = "Updated Successfully";
    }else{       
        $_SESSION['error'] = "Something went wrong";
    }
    header("Location: edit_template.php?id=".$client_id);
}
?>