<?php
    $status=$_GET['status'];
    $Oid = $_GET['Oid'];
    if($status=="Ordered"){
        $status = "Confirmed";
    }
    else if($status=="Confirmed"){
        $status = "Preparing";
    }
    else if($status=="Preparing"){
        $status = "Shipping";
    }
    else if($status=="Shipping"){
        $status = "Delivered";
    }


    $conn = new mysqli('localhost', 'root', '400Qu_nT172Yj', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }

    $takeSQL = "UPDATE orders  SET status = '$status' WHERE orderId = '$Oid';";
    mysqli_query($conn, $takeSQL);

    header('location:order_management.php');

?>