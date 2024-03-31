<?php
    session_start();
    $productCode = $_GET['idP'];

    if(isset($_SESSION['cart'][$productCode])){
        $_SESSION['cart'][$productCode] = $_SESSION['cart'][$productCode] + 1;
        //echo "not the first you add product";
    }
    else{
        $_SESSION['cart'][$productCode] = 1;
    }
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to Cart</title>
</head>
<body>
    <script>
        // Sử dụng JavaScript để chuyển hướng trang sau khi thêm vào giỏ hàng
        window.location.href = document.referrer;
    </script>
</body>
</html>
