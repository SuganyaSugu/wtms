<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WTMS  - Client</title>

</head>

<body class="bg-gradient-primary">
<?php
    include('connect.php');
    $client = $_GET['client'];
    $sql="SELECT * from client WHERE client_name='".$client."' and client_status = 0";

    if($query=mysqli_query($con,$sql))
    {
        if($query->num_rows > 0){            
            while($result = $query->fetch_assoc()){
                $template = $result['client_template'];
            }
            header("Location: web-templates/".$template);
        }else{
            header("Location: 404.php");
        }
    } else { 
        echo "DB Not connected";
    }
?>

</body>
</html>