<?php
session_start();
include("connect.php");
if(isset($_POST['submit'])){
    $client_name=$_POST['client_name'];
    $status=$_POST['status'];
    $template=$_POST['template1'];
    $sql="INSERT into client (client_name,client_template,client_status) VALUES ('".$client_name."','".$template."','".$status."')";
    if($query=mysqli_query($con,$sql)){
        $_SESSION['success'] = "Insertd Successfully";
    }else{       
        $_SESSION['error'] = "Something went wrong";
    }
    header("Location: create_template.php");
}
?>