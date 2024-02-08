<?php
include("connect.php");
$data = array();
$where = "1=1 ";
if(isset($_POST['cancel'])){    
    $_SESSION['view_session'] = "";
}
if(isset($_GET) && isset($_GET['id'])){
    $client_id=$_GET['id'];
    if(!empty($client_id) ){
        $where .= " and client_id='".$client_id."'";
    }
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
}else{
    $_SESSION['view_session'] = "";
}
$sql="SELECT * from client where ".$where." order by client_id desc";

if($query=mysqli_query($con,$sql)){
    while($row = $query->fetch_assoc()) {
        $data[] = $row;
    }
} else{ 
    $_SESSION['error']="DB Not connected";
}
?>