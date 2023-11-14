<?php
session_start();

// Kết nối với cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '400Qu_nT172Yj', 'bookstore');
if ($conn->connect_error) {
    die("Connect failed" . mysqli_connect_error());
}

// Kiểm tra giỏ hàng
if (isset($_SESSION['cart'])) {
    if (isset($_POST['quantity'])) {
        foreach ($_POST['quantity'] as $productCode => $quantity) {
            if ($quantity == 0) {
                unset($_SESSION['cart'][$productCode]);
            } elseif ($quantity > 0) {
                $_SESSION['cart'][$productCode] = $quantity;
            }
        }
    }

    $array_productCode = array("");
    $str = "";
    foreach ($_SESSION['cart'] as $idP => $tmp) {
        $str = $str . '\'' . $idP . '\',';
    }
    $str = substr($str, 0, -1);
} else {
    $str = null; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Add Product</title>
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
        #headPage {
            display: flex;
            justify-content: space-between;
            background-color: antiquewhite;
            align-items: center;
            padding: 0px;
        }

        .clearfix {
            clear: both;
        }

        #menu {
            width: 5%;
            text-decoration: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 200%;
            height: 100%;
        }

        #storeBookName {
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 400%;
            flex: 1;
            text-align: center;
        }

        #search {
            width: 20%;
            font-family: 'Times New Roman', Times, serif;
            font-size: 100%;
            background-color: antiquewhite;

            border-style: none none dashed none;

        }

        ul li {
            display: inline;
        }

        ul#option li a {
            width: 80px;
            margin-left: 30px;
            text-decoration: none;
            font-size: 150%;
        }
        .empty-cart-message {
            text-align: center;
            font-size: 18px;
            color: red;
            margin-top: 20px;
        }

        /* DEFINITION OF HEADER. */
    </style>
</head>

<body class="container">
    <!-- DESIGN HEADER GOES HERE. -->
    <div id="headPage">
        <h id="storeBookName">&#128210<i>Book Store</i>&#128217</h>
    </div>
    <br>
    <h1 style="text-align: center; color:plum">Giỏ hàng của tôi</h1>
    <br>
    <!-- DESIGN HEADER GOES HERE. -->

    <?php
    if ($str != null) {
        $take_SQL = "SELECT*FROM product WHERE productCode IN($str);";
        $result = mysqli_query($conn, $take_SQL);
        if ($result) {
            $totalAll = 0;
    ?>
            <form id="cart" method="post">
                <table id="cart" class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th style="text-align: center; vertical-align: middle;">Tên sản phẩm</th>
                            <th style="text-align: center; vertical-align: middle;">Hình ảnh</th>
                            <th style="text-align: center; vertical-align: middle;">Số lượng</th>
                            <th style="text-align: center; vertical-align: middle;">Giá</th>
                            <th style="text-align: center; vertical-align: middle;">Thành tiền</th>
                            <th style="text-align: center; vertical-align: middle;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            $total = $row['MSRP'] * $_SESSION['cart'][$row['productCode']];
                            $totalAll += $total;
                        ?>
                            <tr>
                                <td style="text-align: center; vertical-align: middle;"><?php echo $row['productName']; ?></td>
                                <td style="text-align: center; vertical-align: middle;"><img src="<?php echo $row['image']; ?>" alt="" width="150" height="150"></td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <input name="quantity[<?php echo $row['productCode']; ?>]" type="number" min=1 class="form-control text-center" value="<?php echo $_SESSION['cart'][$row['productCode']]; ?>">
                                </td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo number_format($row['MSRP']); ?></td>
                                <td style="text-align: center; vertical-align: middle;"><?php echo number_format($total); ?></td>
                                <td style="text-align: center; vertical-align: middle;">
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng không?')" href="delete_add_to_cart.php?idP=<?php echo $row['productCode']; ?>" class="btn btn-danger">Remove</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tfoot>
                            <tr>
                                <td style="vertical-align: middle;">
                                    <a class="btn btn-primary" href="all_book.php">Tiếp tục mua hàng</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <a onclick="document.getElementById('cart').submit();" href="#" class="btn btn-warning">Update shopping cart</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <a class="btn btn-info" href="delete_add_to_cart.php?idP=-1">Clear All</a>
                                </td>
                                <td style="text-align: center; vertical-align: middle;"> <?php echo "Tổng tiền hàng trong giỏ: " . number_format($totalAll); ?></td>
                                <td style="vertical-align: middle;"><a href="payPage.php" class="btn btn-danger">Thanh toán</a></td>
                            </tr>
                        </tfoot>
            </form>
            <?php
        } else {
            echo "Error executing SQL query: " . mysqli_error($conn);
        }
    } else {
        echo '<div class="empty-cart-message">Your shopping cart is empty!</div>';
    }
    ?>
    </tbody>
    </table>
</body>

</html>
