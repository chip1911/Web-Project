<?php
$conn = new mysqli('localhost', 'root', 'Conanvskid1!', 'bookstore');
if($conn->connect_error){
    die("Connect failed". mysqli_connect_error());
}

$takeSQL = "SELECT*FROM orders 
inner join customers 
on orders.customerId = customers.customerId 
inner join orderdetails on orderdetails.orderId = orders.orderId
inner join product on product.productCode = orderdetails.productCode
WHERE date(orderdate) = CURDATE() OR status != 'Delivered';";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Management</title>
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
        /* DEFINITION OF HEADER. */
        #headPage{
            display: flex;
            justify-content: space-between;
            background-color: antiquewhite;
            align-items: center;
            padding: 0px;
        }

        .clearfix{
            clear: both;
        }
        #menu{
            width:5%;
            text-decoration: none;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 200%;
            height: 100%;
        }

        #storeBookName{
            color: black;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 400%;
            flex: 1;
        
        }

        #search{
            width: 20%;
            font-family: 'Times New Roman', Times, serif;
            font-size: 100%;
            background-color: antiquewhite;
            
            border-style: none none dashed none;
            
        }

        ul li{
            display: inline;
        }

        #option {
            margin-right:15%;
            width: 80px;
            text-decoration: none;
            font-size: 150%;
        }
        /* DEFINITION OF HEADER. */

    </style>
</head>
<body style="margin: auto; padding:100px;">
<!-- DESIGN HEADER GOES HERE. -->
<div id="headPage">
        <a href="menu.html" id="menu" style="height: 100%;"> &#129527 </a>

        <h id="storeBookName" >  &#128210<i>Book Store</i>&#128217 </h>
    

        <div id="option">
            <a title="Gọi ngay 0392883607"> &#128222 </a>  
        </div>
           

            
        
        <div class="clearfix"></div>
    </div>
    <!-- DESIGN HEADER GOES HERE. -->
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th style ="text-align: center; vertical-align: middle;">Mã đơn hàng</th>
        <th style ="text-align: center; vertical-align: middle;">Tên khách hàng</th>
        <th style ="text-align: center; vertical-align: middle;">Địa chỉ khách hàng</th>
        <th style ="text-align: center; vertical-align: middle;">Sản phẩm đặt</th>
        <th style ="text-align: center; vertical-align: middle;">Số lượng</th>
        <th style ="text-align: center; vertical-align: middle;">Thao tác</th>
      </tr>
    </thead>
    <tbody>

    <h1 style="text-align:center;">ĐƠN HÀNG HÔM NAY</h1>

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
        <td style ="text-align: center; vertical-align: middle;font-weight: bold;"><?php echo $row['orderId'] ?></td>
        <td style ="text-align: center; vertical-align: middle; font-style: italic; font-size:larger; color: rgb(10, 144, 144); font-weight: bold;"><?php echo $row['customerName'] ?></td>
        <td style ="text-align: center; vertical-align: middle;"><?php echo $row['address'] . ", " . $row['commune'] . ", " . $row['district'] . ", " . $row['city'] . ", " . $row['country'] ?></td>
  
        <td style ="text-align: center; vertical-align: middle;"><img src="<?php echo $row['image']; ?>" alt="" width = "150" height = "150" ></td>
        <td style ="text-align: center; vertical-align: middle;"><?php echo $row['quantityOrdered'] ?></td>
        <td style ="text-align: center; vertical-align: middle;">
            <a href="edit_order_management.php?Oid=<?php echo $row['orderId']; ?>&status=<?php echo $row['status']; ?>" class="btn btn-info"><?php echo $row['status'];?></a>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</body>
</html>