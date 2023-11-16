<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Add Product</title>
    <link rel="icon" type="image/x-icon" href="image/62.png">

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
    <div class="container">
    <!-- <a href="seller_addProduct.html" class="btn btn-warning">Thêm sản phẩm </a> -->

    <!-- Nút thêm sản phẩm kiểu modal -->
    <!-- Button to Open the Modal -->
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                            Thêm sản phẩm
    </button>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm mới</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class = "container">
                <form action="seller_addProduct.php" method = "post">
                    <div class="form-group">
                        <label for="productCode">Mã sản phẩm</label>
                        <input type="text" name = "productCode" id="productCode" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="productName">Tên sản phẩm</label>
                        <input type="text" name="productName" id="productName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="productLine">Loại sản phẩm</label>
                        <input type="text" name="productLine" id="productLine"class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="productVendor">Nhà cung cấp</label>
                        <input type="text" name="productVendor" id="productVendor" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">Mô tả sản phẩm</label>
                        <textarea style="height: 150px;" name="productDescription" id="productDescription" class="form-control"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="quantityInStock">Số lượng hàng trong kho</label>
                        <input type="text" name="quantityInStock" id="quantityInStock" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="buyPrice">Giá nhập vào</label>
                        <input type="text" name="buyPrice" id="buyPrice" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="MSRP">Giá bán</label>
                        <input type="text" name="MSRP" id="MSRP" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="author">Tác giả</label>
                        <input type="text" name="author" id="author" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="MSRP">Ảnh minh họa sách</label>
                        <input type="text" name="image" id="image" class="form-control">
                    </div>
                    <button class="btn btn-success">Thêm sản phẩm</button>
                </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Danh sách sản phẩm đã được thêm vào -->
    <!-- Tiêu đề -->
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th style ="text-align: center; vertical-align: middle;">Mã sản phẩm</th>
        <th style ="text-align: center; vertical-align: middle;">Tên sản phẩm</th>
        <th style ="text-align: center; vertical-align: middle;">Số lượng hàng trong kho</th>
        <th style ="text-align: center; vertical-align: middle;">Giá nhập vào</th>
        <th style ="text-align: center; vertical-align: middle;">Giá bán</th>
        <th style ="text-align: center; vertical-align: middle;">Tác giả</th>
        <th style ="text-align: center; vertical-align: middle;">Ảnh minh họa sách</th>
        <th style ="text-align: center; vertical-align: middle;">Thao tác</th>
      </tr>
    </thead>
    <tbody>

    <!-- Xử lí PHP để in ra các sản phẩm đã được thêm vào -->
    <?php
    $conn = new mysqli('localhost', 'root', 'Conanvskid1!', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }

    // cau lenh sql
    $list_SQL = "SELECT*FROM product ORDER BY productCode;";
    // thuc thi cau lenh tren trong MySQL
    $result = mysqli_query($conn, $list_SQL);

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
    
    </div>
</body>
</html>

