<?php
$conn = new mysqli('localhost', 'root', '400Qu_nT172Yj', 'bookstore');
if($conn->connect_error){
    die("Connect failed". mysqli_connect_error());
}

echo "ĐƠN HÀNG HÔM NAY";
$takeSQL = "SELECT*FROM orders 
            inner join customers 
            on orders.customerId = customers.customerId 
            WHERE date(orderdate) = CURDATE();";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th style ="text-align: center; vertical-align: middle;">Mã đơn hàng</th>
        <th style ="text-align: center; vertical-align: middle;">Tên khách hàng</th>
        <th style ="text-align: center; vertical-align: middle;">Địa chỉ khách hàng</th>
        <th style ="text-align: center; vertical-align: middle;">Sản phẩm đặt</th>
        <th style ="text-align: center; vertical-align: middle;">Số lượng</th>
        <th style ="text-align: center; vertical-align: middle;">Tác giả</th>
        <th style ="text-align: center; vertical-align: middle;">Ảnh minh họa sách</th>
        <th style ="text-align: center; vertical-align: middle;">Thao tác</th>
      </tr>
    </thead>
    <tbody>

    <!-- Xử lí PHP để in ra các sản phẩm đã được thêm vào -->
    <?php
    
    // thuc thi cau lenh tren trong MySQL
    $result = mysqli_query($conn, $takeSQL);

    //duyet qua tung row cua $result
    while($row = mysqli_fetch_assoc($result)){
    ?>
        <!-- echo $row['productCode'] . " - " . $row['productName'] . $row['productLine']
            . $row['productVendor'] . $row['productDescription'] . $row['quantityInStock']
            . $row['author'] . $row['buyPrice'] . $row['MSRP'] . $row['image']; -->
        <tr style="background-color:rgb(253, 236, 253);">
        <td style ="text-align: center; vertical-align: middle;font-weight: bold;"><?php echo $row['productCode'] ?></td>
        <td style ="text-align: center; vertical-align: middle; font-style: italic; font-size:larger; color: rgb(10, 144, 144); font-weight: bold;"><?php echo $row['productName'] ?></td>
        <td style ="text-align: center; vertical-align: middle;"><?php echo $row['quantityInStock'] ?></td>
        <td style ="text-align: center; vertical-align: middle;"><?php echo $row['buyPrice'] ?></td>
        <td style ="text-align: center; vertical-align: middle;"><?php echo $row['MSRP'] ?></td>
        <td style ="text-align: center; vertical-align: middle;"><?php echo $row['author'] ?></td>
        <td style ="text-align: center; vertical-align: middle;"><img src="<?php echo $row['image']; ?>" alt="" width = "200" height = "200" ></td>
        <td style ="text-align: center; vertical-align: middle;">
            <a href="seller_edit_addProduct.php?idP=<?php echo $row['productCode']; ?>" class="btn btn-info">Edit</a>
            <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')" href="seller_delete_addProduct.php?idP=<?php echo $row['productCode']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</body>
</html>