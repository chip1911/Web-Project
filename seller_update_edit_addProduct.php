<?php
    // lấy idP được gửi trong address của form action cảu seller_edit_addProduct.php
    $idP = $_GET['idP'];

    $conn = new mysqli('localhost', 'root', 'pw', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }
    //lay du lieu tu form
    if (isset($_POST["productCode"])) {
        // Tiếp tục xử lý dữ liệu ở đây
        $productCode = $_POST["productCode"];
        $productName = $_POST['productName'];
        $productLine = $_POST['productLine'];
        $productVendor = $_POST['productVendor'];
        $productDescription = $_POST['productDescription'];
        $quantityInStock = $_POST['quantityInStock'];
        $buyPrice = $_POST['buyPrice'];
        $MSRP = $_POST['MSRP'];
        $author = $_POST['author'];
        $image = $_POST['image'];
    } else {
        // Nếu không có dữ liệu gửi từ biểu mẫu, bạn có thể xử lý lỗi hoặc hiển thị thông báo cho người dùng.
        echo "Dữ liệu từ biểu mẫu không được gửi.";
    }

    //viet lenh sql de chen vao du lieu 
    $insertSQL = "UPDATE product 
        SET productCode = '$productCode', productName = '$productName',
        productLine = '$productLine', productVendor = '$productVendor',
        productDescription = '$productDescription', quantityInStock = $quantityInStock,
        buyPrice = $buyPrice, MSRP = $MSRP,
        author = '$author', image = '$image'
        WHERE productCode = '$idP';";
    
    // thuc thi cau lenh voi mysqli_query
    if(mysqli_query($conn, $insertSQL)){
        // quay tro lai trang seller_list_addProduct.php
        header("Location: seller_list_addProduct.php");
    }
?>
