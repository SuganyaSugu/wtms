<?php
session_start();
include("connect.php"); 
if(isset($_POST['submit'])){
    $old_password=$_POST['old_password'];
    $id = $_SESSION['user_id'];
    $new_password=$_POST['confirm_password'];
    $sql="SELECT * from user WHERE 	user_password='".$old_password."' and user_id = '".$id."'";
    $query=mysqli_query($con,$sql);
    if($query->num_rows > 0){                     
        $update_sql="UPDATE user SET user_password = '".$new_password."' WHERE user_id = '".$id."'";
        if($return_query=mysqli_query($con,$update_sql)){
            $_SESSION['success'] = "Updated Successfully";
        }else{       
            $_SESSION['error'] = "Something went wrong";
        }
        header("Location: change_password.php");
    }else{
        $_SESSION['error']="Invalid Current password";
        header("Location: change_password.php");
    }
}
?>