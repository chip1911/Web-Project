<?php
    session_start();
    $productCode = $_GET['idP'];

    if(isset($_SESSION['cart'][$productCode])){
        $_SESSION['cart'][$productCode] = $_SESSION['cart'][$productCode] + 1;
        //echo "not the first you add product";
    }
    else{
        $_SESSION['cart'][$productCode] = 1;
        //echo "the first you add product";
    }
    
    //echo count($_SESSION['cart']);
    header('location:' . $_SERVER['HTTP_REFERER']);
    // test
?>

