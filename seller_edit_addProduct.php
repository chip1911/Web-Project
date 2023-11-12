<?php
    // lay idP can edit từ thẻ a của nút Edit trang seller_list_addProduct.php
    $idP = $_GET['idP'];

    // ket noi voi co so du lieu 
    $conn = new mysqli('localhost', 'root', '400Qu_nT172Yj', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }

    $edit_SQL = "SELECT*FROM product WHERE productCode = '$idP'";
    $result = mysqli_query($conn, $edit_SQL);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: rgb(253, 236, 253);">
    <div class = "container">
        <form action="seller_update_edit_addProduct.php?idP=<?php echo $idP;?>" method = "post">
            <div class="form-group">
                <label for="productCode">Mã sản phẩm</label>
                <input type="text" name = "productCode" id="productCode" value="<?php echo $row['productCode']; ?>" class="form-control" >
            </div>
            <div class="form-group">
                <label for="productName">Tên sản phẩm</label>
                <input type="text" name="productName" id="productName" value="<?php echo $row['productName']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="productLine">Loại sản phẩm</label>
                <input type="text" name="productLine" id="productLine" value="<?php echo $row['productLine']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="productVendor">Nhà cung cấp</label>
                <input type="text" name="productVendor" id="productVendor" value="<?php echo $row['productVendor']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="productDescription">Mô tả sản phẩm</label>
                <input type="text" name="productDescription" id="productDescription" value="<?php echo $row['productDescription']; ?>"class="form-control">
            </div>
            <div class="form-group">
                <label for="quantityInStock">Số lượng hàng trong kho</label>
                <input type="text" name="quantityInStock" id="quantityInStock" value="<?php echo $row['quantityInStock']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="buyPrice">Giá nhập vào</label>
                <input type="text" name="buyPrice" id="buyPrice" value="<?php echo $row['buyPrice']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="MSRP">Giá bán</label>
                <input type="text" name="MSRP" id="MSRP" value="<?php echo $row['MSRP']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="author">Tác giả</label>
                <input type="text" name="author" id="author" value="<?php echo $row['author']; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="MSRP">Ảnh minh họa sách</label>
                <input type="text" name="image" id="image" value="<?php echo $row['image']; ?>" class="form-control">
            </div>
            <button class="btn btn-success">Cập nhât sản phẩm</button>

        </form>
    </div>
</body>
</html>