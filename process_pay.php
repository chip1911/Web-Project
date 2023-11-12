<?php
    session_start();

    $conn = new mysqli('localhost', 'root', '400Qu_nT172Yj', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }

    if(isset($_POST['buy_now']) && ($_POST['buy_now'])){
        // lay thong tin tu form
        $customerName = $_POST['customerName'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $commune = $_POST['commune'];
        $district= $_POST['district'];
        $city = $_POST['city'];
        $country = $_POST['country'];

        $insertCustomerSQL = "INSERT INTO customers(customerName, phone, address, commune, district, city, country) 
                                VALUES('$customerName', '$phone', '$address', '$commune', '$district', '$city', '$country');";
        //echo $insertCustomerSQL."\n";
        mysqli_query($conn, $insertCustomerSQL);

        // insert into orders
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $orderdate = date('Y-m-d H:i:s');
        $customerId = $conn->insert_id;
        $status = "preparing";

        $insertOrdersSQL = "INSERT INTO orders(orderdate, status, customerId )
                            VALUES ('$orderdate', '$status', '$customerId');";
        //echo $insertOrdersSQL."\n";
        mysqli_query($conn, $insertOrdersSQL);

        // insert into orderdetails
        $orderId = $conn->insert_id;
        // foreach($_SESSION['cart'] as $idP => $tmp){
        //     $productCode = $idP;
        //     $quantityOrdered = $tmp;
        //     $insertOrderdetailsSQL = "INSERT INTO orderDetails(orderId, productCode, quantityOde);";
        // }
        $array_productCode = array("");
        $str = "";
        foreach($_SESSION['cart'] as $idP => $tmp){
            //$array_productCode[] = $idP;
           $str = $str . '\''. $idP . '\',';
        }
        $str = substr($str, 0, -1); 
        
        $take_SQL = "SELECT*FROM product WHERE productCode IN($str);";
        //echo $take_SQL; exit;
        $result = mysqli_query($conn, $take_SQL);
        while($row = mysqli_fetch_assoc($result)){
            $productCode = $row['productCode'];
            $quantityOrdered = $_SESSION['cart'][$row['productCode']];
            $priceEach = $row['MSRP'];
            $insertOrderdetailsSQL = "INSERT INTO orderDetails(orderId, productCode, quantityOrdered, priceEach)
                                    VALUES('$orderId', '$productCode', '$quantityOrdered', '$priceEach');";
            //echo $insertOrderdetailsSQL. "\n";
            mysqli_query($conn, $insertOrderdetailsSQL);
        }

        unset($_SESSION['cart']);


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cảm ơn bạn đã đặt hàng. Chúng mình sẽ giao hàng đến bạn sớm nhất có thể.</h1>
    <a href="mainPage_2.php">Tiếp tục mua hàng</a>
</body>
</html>