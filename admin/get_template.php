<?php
include("connect.php");
$data = array();
$where = "1=1 ";
if(isset($_POST['cancel'])){    
    $_SESSION['view_session'] = "";
}
if(isset($_POST['submit'])){    
    $client=$_POST['client'];
    $template=$_POST['template'];
    $status=$_POST['status'];

    $_SESSION['view_session'] = $_POST;
    if(!empty($client)){
        $where .= " and client_name='".$client."'";
    }
    if($status == 0 ){
        $where .= " and client_status='".$status."'";
    }
    if(!empty($status) ){
        $where .= " and client_status='".$status."'";
    }
    if(!empty($template)){
        $where .= " and client_template='".$template."'";
    }
    // echo '<pre>'; print_r($_SESSION); echo '</pre>'; die;
}
$sql="SELECT * from client where ".$where;

if($query=mysqli_query($con,$sql)){
    while($row = $query->fetch_assoc()) {
        $data[] = $row;
    }
} else{ 
    $_SESSION['error']="DB Not connected";
}
?>