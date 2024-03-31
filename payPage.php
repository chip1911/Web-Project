<?php
    session_start();
    // ket noi voi csdl
    $conn = new mysqli('localhost', 'root', 'pw', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }

    if(isset($_SESSION['cart'])){
        if(isset($_POST['quantity'])){
            foreach($_POST['quantity'] as $productCode=>$quantity){
                if($quantity == 0){
                    unset($_SESSION['cart'][$productCode]);
                }
                else if($quantity > 0){
                    $_SESSION['cart'][$productCode] = $quantity;
                }
            }
        }
        $array_productCode = array("");
        $str = "";
        foreach($_SESSION['cart'] as $idP => $tmp){
            //$array_productCode[] = $idP;
           $str = $str . '\''. $idP . '\',';
        }
        $str = substr($str, 0, -1);  

        
    }
    else{
        echo"Your shopping cart is empty!";
    }
?>


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
    <style>
        #headPage{
            display: flex;
            /* justify-content: space-between; */
            /* background-color: antiquewhite; */
            align-items: center;
            padding-bottom: 3px;
            padding-top: 0px;

            /* border-style: none none dashed none; */
            border-bottom: 3px outset green;
            background-color:antiquewhite ;

        }
       

        #logo{
            margin-left: 125px;
        
        }

        ul.op1  li{
            margin-left: 50px;



        }

        ul.op1 > li > a{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            text-align: left;
            /* text-decoration: none; */
            text-decoration:none ;
            font-size: 130%;
            padding: 12px;
            color: rgb(10, 144, 144);


        }

        ul.op1  li  a:hover {
           color: #DD0000;


        }

       
        


        #search{
            width: 100%;
            font-family: 'Times New Roman', Times, serif;
            font-size: 100%;
            margin-left: 150px;
            margin-right: 0px;

            border: 2px solid lightgray;
            border-radius: 12px;
            padding: 7px;
            
        }

        ul li{
            display: inline;
        }

        ul#option  li  a{
            width: 100px;
            margin-left: 10px;
            margin-right: 20px;

            text-decoration: none;
            font-size: 150%;
        }
        ul#option li {
            margin-left: 250px;
           
        }

        .body {
            max-width: 1170px;
            margin:auto;
        }
        .container {
            margin-top: 10px;
        }

    </style>
</head>
<body style="padding: 8.3px;">

<div id="headPage">

<!-- <h id="storeBookName" >  &#128210<i>Book Store</i>&#128217 </h> -->
<img id="logo" src="image/62.png" width="100" height="100px">



<ul class="op1">
    <li>
        <a href="mainPage_2.php" style="color: black hover= #DD0000;"><b>Trang chủ</b></a>
    </li>

    
</ul>

<form action="process_search.php" method="post" >
        <input id="search" name="search" type="text" placeholder="Search...">
    </form>

<ul id="option">
    <li>
        <a href="list_add_to_cart.php" title="Giỏ hàng của tôi"> &#128092 </a>
    </li>
</ul>
<div class="clearfix"></div>
</div>

<div class="container">
    <!-- <a href="seller_addProduct.html" class="btn btn-warning">Thêm sản phẩm </a> -->
<form action="process_pay.php" method="post">
    <div>
        <h3>Thông tin nhận hàng</h3>
        <div class="form-group">
            <label for="customerName">Họ và tên</label>
            <input type="text" class="form-control" id="customerName" placeholder="Họ và tên" name="customerName" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" name="phone" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" class="form-control" id="address" placeholder="Địa chỉ cụ thể (số nhà, xóm, ...)" name="address" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="commune">Phường xã</label>
            <input type="text" class="form-control" id="commune" placeholder="Phường xã" name="commune" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="district">Quận huyện</label>
            <input type="text" class="form-control" id="district" placeholder="Quận huyện" name="district" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="city">Tỉnh thành</label>
            <input type="text" class="form-control" id="city" placeholder="Tỉnh thành" name="city" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
            <label for="country">Đất nước</label>
            <input type="text" class="form-control" id="country" placeholder="Đất nước" name="country" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>


        
    </div>    
    
    <div>
    <h3> Đơn hàng</h3>
    <?php
    
    if($str != null){
        $take_SQL = "SELECT*FROM product WHERE productCode IN($str);";
        //echo $take_SQL; exit;
         $result = mysqli_query($conn, $take_SQL);
         //echo $result;
        $totalAll = 0;
    ?>

<table id="cart" class="table">
    <thead class="thead-dark">
      <tr>
        <th style ="text-align: center; vertical-align: middle;">Tên sản phẩm</th>
        <th style ="text-align: center; vertical-align: middle;">Hình ảnh</th>
        <th style ="text-align: center; vertical-align: middle;">Số lượng</th>
        <th style ="text-align: center; vertical-align: middle;">Giá</th>
        <th style ="text-align: center; vertical-align: middle;">Thành tiền</th>
      </tr>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            $total = $row['MSRP'] * $_SESSION['cart'][$row['productCode']];
            $totalAll += $total;
        ?>
        <tr>
            <td style ="text-align: center; vertical-align: middle;"><?php echo $row['productName']; ?></td>
            <td style ="text-align: center; vertical-align: middle;"><img src="<?php echo $row['image']; ?>" alt="" width="150" height="150"></td>
            <td style ="text-align: center; vertical-align: middle;">
                <?php echo $_SESSION['cart'][$row['productCode']]; ?>
            </td>
            <td style ="text-align: center; vertical-align: middle;"><?php echo number_format($row['MSRP']); ?></td>
            <td style ="text-align: center; vertical-align: middle;"><?php echo number_format($total); ?></td>
            

        </tr>
        <?php    
        }
        ?>
        <td><b>Phí vận chuyển: <?php echo number_format(30000)?></b></td>
        <td  style ="text-align: center; vertical-align: middle;right: 15%;"><b><?php echo "Tổng thanh toán: " .number_format($totalAll + 30000); ?></b></td>
        <td style="vertical-align: middle;">
            <input class ="btn btn-danger" type="submit" value="Đặt hàng" name="buy_now">
        </td>

        <tfoot>
        </tfoot>
    <?php 
    }  
    else{
        echo"Your shopping cart is empty!";
    }
    ?>

    

    
    </tbody>
</table>
    </div>
</form>           
</body>
</html>
