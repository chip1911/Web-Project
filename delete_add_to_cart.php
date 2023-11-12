<?php
    session_start();
    if(isset($_GET['idP'])){
        $idP = $_GET['idP'];
        if($idP==-1){
            unset($_SESSION['cart']);
        }
        else{
            unset($_SESSION['cart'][$idP]);
        }
        //echo "delete successfully";
    }
    header('location: list_add_to_cart.php');
?>