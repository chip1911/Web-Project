<?php
    $conn = new mysqli('localhost', 'root', '400Qu_nT172Yj', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }

    if(isset($_POST['search'])){
        $search_input = $_POST['search'];
        $search_input = "%" .$search_input. "%";
        
        $takeSQL = "SELECT*FROM product as p 
        inner join productLines as pL on p.productLine = pL.productLine
        WHERE p.productName LIKE '$search_input' OR p.productLine LIKE '$search_input';";
        // echo $takeSQL;
        $result = mysqli_query($conn, $takeSQL);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Search Result</title>
</head>
<body style="max-width: 1170px;
            margin: 0 auto;
            background-color: rgb(253, 236, 253); ">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        #wrapper{
            max-width: 1170px;
            margin: 0 auto;
            background-color: rgb(253, 236, 253);
        }
        .titleOfPage{
            text-align: center;
        }
        h2{
            font-size: 300%;
            color:rgb(10, 144, 144);
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            padding: 50px;
            padding-bottom: 70px;
            text-decoration: overline;
        }
        ul.products{
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        ul.products li{
            flex-basis: 20%;
            padding: 2px;
            padding-left: 15px;
            padding-right: 15px;
            box-sizing: border-box;
            padding-bottom: 15px;
        }
        ul.products li img{
            max-width: 100%;
            display:block ;
        }
        ul.products li .product-top{
            position: relative;
            overflow:hidden;
        }
        ul.products li .product-top .product-thumb{
            display: block;
        }
        ul.products li:hover .product-top .product-thumb img{
            filter: opacity(80%);
        }
        ul.products li .product-top .product-thumb img{
            display: block;
        }
        ul.products li .product-top a.hover{
            display: inline;
        }
        ul.products li .product-top a.buy-now{
            font-family:'Times New Roman', Times, serif;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color:#268f49;
            color:aliceblue;
            padding: 7px 0px;
            position: absolute;
            border-style: solid;
            border-radius: 3px;

            bottom: -36px;
            
            /* left: 0px; */
            width: 70%;
            left: 30%;

            transition: 0.25s ease-in-out;
            opacity: 0.85;
            /* flex-basis: 70%; */
      
            /* z-index: 2;  */
        }
        /* ul.products li .product-top .hover-container{
            display: inline-block;
        } */
        
        ul.products li .product-top a.cart-shopping{
            border-style: solid;
            border-radius: 3px;
            text-decoration: none;
            text-align: center;
            display: block;
            background-color:gold;
            color:aliceblue;
            padding: 5.25px 0px;
            position: absolute;

            bottom: -36px;
            /* margin-right: 0px; */
            /* left: 70%;  */
            width: 30%;

            transition: 0.25s ease-in-out;
            opacity: 0.85;
            /* flex-basis: 30%; */
            /* margin-left: 70%; */
            
            /* z-index: 1;  */
        }
        ul.products li:hover a.cart-shopping{
            bottom: 0px; 
            right: 70%; 
        }
        ul.products li:hover a.buy-now{
            bottom: 0px;
            /* left: -30%; */
        }
        ul.products li .product-info a{
            display:block;
            text-decoration: none;
            padding: 5px 0px;
        }
        ul.products li .product-info a.product-cat{
            color: rgb(171, 100, 147);
            font-family:monospace;
            text-align: center;
        }
        ul.products li .product-info a.product-name{
            color:rgb(10, 144, 144);
            font-family:Arial, Helvetica, sans-serif;
            text-transform:capitalize;
            padding-top: 0px;
            text-align: center;
        }
        ul.products li .product-info .product-price{
            color: rgb(236, 93, 37);
            text-align: center;
        }
    </style>
    <div id = "wrapper">
        <div class = "titleOfPage">
            <h2>
                <i><b>Kết quả</b></i>
            </h2>
        </div>
    </div>
    <?php
    
    while($row = mysqli_fetch_assoc($result)){
        if($row == null) break;
    ?>
    
        <ul class="products">
            <li>
                <div class="product-item">
                    <div class = "product-top">
                        <a  href = "detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-thumb">
                            <img src="<?php echo $row['image']; ?>" alt="">
                        </a>
                        <div class="container">
                            <a href="add_to_cart.php?idP=<?php echo $row['productCode']; ?>" class="cart-shopping">&#x1F6D2</a>
                            <a href="click_buy_now.php?idP=<?php echo $row['productCode']; ?>" class="buy-now"><b>Mua ngay</b></a>
                        </div>
                        
                    </div>
                    <div class="product-info">
                        <a href="productLine.php?idPL=<?php echo $row['productLineCode']; ?>" class="product-cat"><?php echo $row['productLine']; ?></a>
                        <a href="detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-name"><?php echo $row['productName']; ?></a>
                        <div class="product-price"><?php echo number_format($row['MSRP'], 0); ?></div>
                    </div>
                </div>

            </li>

            <?php
            $row = mysqli_fetch_assoc($result);
            if($row == null) break;
            ?>
            <li>
                <div class="product-item">
                    <div class = "product-top">
                        <a  href = "detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-thumb">
                            <img src="<?php echo $row['image']; ?>" alt="">
                        </a>
                        <div class="container">
                            <a href="add_to_cart.php?idP=<?php echo $row['productCode']; ?>" class="cart-shopping">&#x1F6D2</a>
                            <a href="click_buy_now.php?idP=<?php echo $row['productCode']; ?>" class="buy-now"><b>Mua ngay</b></a>
                        </div>
                        
                    </div>
                    <div class="product-info">
                        <a href="productLine.php?idPL=<?php echo $row['productLineCode']; ?>" class="product-cat"><?php echo $row['productLine']; ?></a>
                        <a href="detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-name"><?php echo $row['productName']; ?></a>
                        <div class="product-price"><?php echo number_format($row['MSRP'], 0); ?></div>
                    </div>
                </div>

            </li>

            <?php
            
            $row = mysqli_fetch_assoc($result);
            if($row == null) break;
            ?>
            <li>
                <div class="product-item">
                    <div class = "product-top">
                        <a  href = "detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-thumb">
                            <img src="<?php echo $row['image']; ?>" alt="">
                        </a>
                        <div class="container">
                            <a href="add_to_cart.php?idP=<?php echo $row['productCode']; ?>" class="cart-shopping">&#x1F6D2</a>
                            <a href="click_buy_now.php?idP=<?php echo $row['productCode']; ?>" class="buy-now"><b>Mua ngay</b></a>
                        </div>
                        
                    </div>
                    <div class="product-info">
                        <a href="productLine.php?idPL=<?php echo $row['productLineCode']; ?>" class="product-cat"><?php echo $row['productLine']; ?></a>
                        <a href="detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-name"><?php echo $row['productName']; ?></a>
                        <div class="product-price"><?php echo number_format($row['MSRP'], 0); ?></div>
                    </div>
                </div>

            </li>

            <?php
            $row = mysqli_fetch_assoc($result);
            if($row == null) break;
            ?>
            <li>
                <div class="product-item">
                    <div class = "product-top">
                        <a  href = "detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-thumb">
                            <img src="<?php echo $row['image']; ?>" alt="">
                        </a>
                        <div class="container">
                            <a href="add_to_cart.php?idP=<?php echo $row['productCode']; ?>" class="cart-shopping">&#x1F6D2</a>
                            <a href="click_buy_now.php?idP=<?php echo $row['productCode']; ?>" class="buy-now"><b>Mua ngay</b></a>
                        </div>
                        
                    </div>
                    <div class="product-info">
                        <a href="productLine.php?idPL=<?php echo $row['productLineCode']; ?>" class="product-cat"><?php echo $row['productLine']; ?></a>
                        <a href="detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-name"><?php echo $row['productName']; ?></a>
                        <div class="product-price"><?php echo number_format($row['MSRP'], 0); ?></div>
                    </div>
                </div>

            </li>
            <?php
            $row = mysqli_fetch_assoc($result);
            if($row == null) break;
            ?>
            <li>
                <div class="product-item">
                    <div class = "product-top">
                        <a  href = "detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-thumb">
                            <img src="<?php echo $row['image']; ?>" alt="">
                        </a>
                        <div class="container">
                            <a href="add_to_cart.php?idP=<?php echo $row['productCode']; ?>" class="cart-shopping">&#x1F6D2</a>
                            <a href="click_buy_now.php?idP=<?php echo $row['productCode']; ?>" class="buy-now"><b>Mua ngay</b></a>
                        </div>
                        
                    </div>
                    <div class="product-info">
                        <a href="productLine.php?idPL=<?php echo $row['productLineCode']; ?>" class="product-cat"><?php echo $row['productLine']; ?></a>
                        <a href="detailProduct.php?idP=<?php echo $row['productCode']; ?>" class="product-name"><?php echo $row['productName']; ?></a>
                        <div class="product-price"><?php echo number_format($row['MSRP'], 0); ?></div>
                    </div>
                </div>

            </li>
        </ul>
    
    <?php
    }
    ?>
</body>
</html>