<?php  
    session_start();
    if(isset($_SESSION) && $_SESSION['user_name'] == ""){
        header("Location: index.php");
    }else{
        $user_name = $_SESSION['user_name'];
    }
?>