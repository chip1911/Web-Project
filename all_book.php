<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>All Books</title>
    <link rel="icon" type="image/x-icon" href="image/62.png">

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
            text-decoration-color:black ;
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

        ul.submenu {
            width: auto;
            height: auto;
            display: none;
           position: absolute;
           background-color: #f9f9f9;
           margin-left: 100px;
           margin-top: 0px;

           z-index: 1;
           
           

}
        ul.submenu  li{
            /* margin-bottom: 10px; */
            margin-left: 17px;
            padding: 30px;
            

        }


        ul.submenu  li  a {
            border-bottom: 1px solid green;
            line-height: 40px;
            width: 200px;  
            /* margin-top: 10px; */
            margin-left: 5px;
            text-align: center;
            width :100%;
            text-decoration: none;
            font-size: 120%;
            color: rgb(10, 144, 144);
            font-family: 'Courier New', Courier, monospace;

            


            
        }

        li:hover ul.submenu {
           display: block;
        }
        


        #search{
            width: 100%;
            font-family: 'Times New Roman', Times, serif;
            font-size: 100%;
            margin-left: 80px;
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

        /* DEFINITION OF FOOTER */
        table {
            width: 100%;
            font-family: arial, sans-serif;
            border-color: aliceblue;
            color: pink;
        }

        th, td{
            width:25%;
            background-color: black;
        }

        #lastPage{
            background-color: antiquewhite;
            text-align: center;
        }

        #inf{
            background-color: antiquewhite;
            color: rgb(207, 78, 78);
            font-size: 200%;
            text-align: center;
            padding: 30px;
        }

        ul#info > li > a{
            font-family: 'Courier New', Courier, monospace;
            color: rgb(10, 144, 144);
            text-decoration: none;
            margin: 20px;
        }
        /* DEFINITION OF FOOTER */
    </style>
</head>




<body style="padding: 8.3px;">
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
            background-color: rgb(253, 236, 253);   
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

    <div id="headPage">

        <!-- <h id="storeBookName" >  &#128210<i>Book Store</i>&#128217 </h> -->
        <img id="logo" src="image/62.png" width="100" height="100px">

        

        <ul class="op1">
            <li>
                <a href="mainPage_2.php" style="color: black hover= #DD0000;"><b>Trang chủ</b></a>
            </li>

            <li>
                <a href=""><b> Menu</b></a>
                <ul class="submenu" >
                  <li>
                    <a href="all_book.php"><b>Tất cả sách</b></a>
                  </li>
                  <br>
                  <li><a href="productLine.php?idPL=SKN"><b>Sách kỹ năng</b></a></li>
                  <br>
                  <li><a href="productLine.php?idPL=STLTG"><b>Sách tâm linh - tôn giáo</b></a></li>
                  <br>
                  <li><a href="productLine.php?idPL=STK"><b> Sách tham khảo</b></a></li>
                  <br>
                  <li><a href="productLine.php?idPL=STLH"><b>Sách tâm lý học</b></a></li>
                  <br>
                 <li><a href="productLine.php?idPL=TT"><b>Tiểu thuyết</b></a></li>
                 <br>
                 <li><a href="productLine.php?idPL=SSH"><b>Sách self-help</b></a></li>
                 <br>
                 <li><a href="productLine.php?idPL=STT"><b>Sách trinh thám</b></a></li>
                <br>
                <li><a href="productLine.php?idPL=NK"><b>Nhật ký</b></a></li>
                <br>
                <li><a href="productLine.php?idPL=T"><b>Truyện</b></a></li>
                <br>
                <li><a href="productLine.php?idPL=SKD"><b>Sách kinh doanh</b></a></li>
                <br>
                <li><a href="productLine.php?idPL=TNVH"><b>Truyện ngắn văn học</b></a></li>
            
                </ul>
            </li>
            <li>
                <a title="Gọi ngay 0392883607"><b>Liên hệ</b></a>
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

    <div class="body">
    <div id = "wrapper">
        <div class = "titleOfPage">
            <h2>
                <i><b>Kho sách vô tận của chúng mình</b></i>
            </h2>
        </div>
    </div>
    <?php
    // ket noi voi csdl
    $conn = new mysqli('localhost', 'root', 'Conanvskid1!', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }

    $take_SQL = "
    select*from
    product 
    inner join productLines on product.productLine = productLines.productLine;";

    $result = mysqli_query($conn, $take_SQL);
    
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
    </div>
    <!-- INFORMATION, COPYRIGHT -->
    <table>
        <th>
            <br>&#128339 
            <br>
            <br>
            7 NGÀY ĐỔI SẢN PHẨM NGUYÊN GIÁ 
            <br>
            Đổi trả sản phẩm trong 7 ngày
            <br><br>
        </th>

        <th>
            <br>
            &#128222  
            <br>
            <br>
            HOTLINE 1900 3060
            <br>
            8h00 - 17h00, T2 - T7 (Giờ hành chính)
            <br><br>
        </th>

        <th>
            <br> &#127970 
            <br>
            <br>
            HỆ THỐNG CỬA HÀNG
            <br>
            10 cửa hàng trên toàn hệ thống
            <br><br>
        </th>

        <th>
            <br>
            &#128666
            <br>
            <br>
            VẬN CHUYỂN
            <br>
            Đồng giá 30k toàn quốc
            <br><br>
        </th>
    </table>

    
        <div id="lastPage">
            <ul id = "inf">
                <i style="text-decoration: underline;"><b> See more us on:</b></i></p>
                <li>
                    <a href="https://www.facebook.com/profile.php?id=100022034102353&sk=grid">Facebook</a>
    
                </li>
                <li>
                    <a href=""><b>Instagram</b></a>
                </li>
                <li>
                    <a href="">Tiktok</a>
                </li>
                <li>
                    <a href=""><b>Youtube</b></a>
                </li>
            </ul>
        </div>
</body>
</html>