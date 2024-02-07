<?php
include("connect.php");
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * from user WHERE user_email='".$email."' and user_password = '".$password."'";

    if($query=mysqli_query($con,$sql))
    {
        session_start();
        if($query->num_rows > 0){            
            while($result = $query->fetch_assoc()){
                $_SESSION["user_id"] =  $result['user_id'];
                $_SESSION["user_name"] = $result['user_name'];
            }
            header("Location: dashboard.php");
        }else{
            $_SESSION['error']="Invalid Crediential";
            header("Location: index.php");
        }
    } else
    { $_SESSION['error']="DB Not connected";
        header("Location: index.php"); 
    }
}
?>