<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title> Book Store </title>
    <link rel="icon" type="image/x-icon" href="image/62.png">

    <style>
        /* DEFINITION OF HEADER. */
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

        .clearfix{
            clear: both;
        }

        #logo{
            margin-left: 125px;
            margin-right: -13px;

        
        }

        ul.op1  li{
            text-decoration-color:black ;
            margin-left: 10px;



        }

        ul.op1 > li > a{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            text-align: left;
            text-decoration: none;
            text-decoration-color:black ;
            font-size: 130%;
            padding: 30px;
            color: rgb(10, 144, 144);



        }

        ul.op1  li  a:hover {
           color: #DD0000

;
        }

        ul.submenu {
            width: auto;
            height: auto;
            display: none;
           position: absolute;
           background-color: #f9f9f9;
           margin-left: 60px;
           margin-top: 0px;
           background-color: lavenderblush;

           z-index: 1;
           
           

}
        ul.submenu  li{
            /* margin-bottom: 10px; */
            margin-left: 0px;
            padding: 10px;

            

        }


        ul.submenu  li  a {
            border-bottom: 1px solid green;
            line-height: 40px;
            width: 200px;  
            /* margin-top: 10px; */
            margin-left: 0px;
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
            margin-left: 65px;
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
            margin-left: 210px;
           
        }
        /* DEFINITION OF HEADER. */


        /* DEFINITION OF CONTENT */
        .loadImage{
            display: __autoload;
        }
        /* DEFINITION OF CONTENT */


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
            margin-top: 0px;
            margin-bottom: 0px;
        }

        /* ul  li  a{
            font-family: 'Courier New', Courier, monospace;
            color: rgb(10, 144, 144);
            text-decoration: none;
            margin: 20px;
        } */
        /* DEFINITION OF FOOTER */

        /* DEFINITION FOR Sách Tiêu Biểu */
        ul.products{
            margin: 50px 30px;
            padding-inline-start: 40px;
            padding-inline-end: 40px;
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            
        }
        ul.products li{
            flex-basis: 25%;
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
            padding: 0px;
            margin: 0px;
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
            
            margin: 0px;

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
            margin: 0px;
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
            margin: 0px;
            display:block;
            text-decoration: none;
            padding: 5px 0px;
        }
        ul.products li .product-info a.product-cat{
            margin: 0px;
            color: rgb(171, 100, 147);
            font-family:monospace;
            text-align: center;
        }
        ul.products  li  .product-info a.product-name{
            font-size: 115%;
            color:rgb(10, 144, 144);
            font-family:Arial, Helvetica, sans-serif;
            text-transform:capitalize;
            padding-top: 0px;
            text-align: center;
        }
        ul.products li .product-info .product-price{
            font-weight: bold;
            font-size: 115%;
            color: rgb(236, 93, 37);
            text-align: center;
        }
                /* DEFINITION FOR Sách Tiêu Biểu */

        .h3 {
            text-align: center;
            font-family: cursive;
            font-style: italic;
            font-size: 130%;
            margin-top: 0px;
            padding-top: 10px;
        }
        .under {
            margin-top: 0px;

        }

        .h4 {
            text-align: center;
            font-family: cursive;
            font-size: 200%;
            /* margin-top: 0px;
            padding-top: 10px; */
        }

    </style>
</head>

<body>
    <!-- DESIGN HEADER GOES HERE. -->
    <div id="headPage">

        <!-- <h id="storeBookName" >  &#128210<i>Book Store</i>&#128217 </h> -->
        <img id="logo" src="image/62.png" width="100" height="100px">

        

        <ul class="op1">
            <li>
                <a href=""mainPage_2.php style="color: black hover= #DD0000;"><b>Trang chủ</b></a>
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
    <!-- DESIGN HEADER GOES HERE. -->

<div class="under">
    <!-- DESIGN CONTENT GOES HERE. -->
    <h3 class="h3">Good books, like good friends, are few and chosen; the more select, the more enjoyable. ( Louisa May Alcott )</h3>
    <div >
        <img src = "image/bookStoreImage_6.jpg" width="400" height="500">
        <img src = "image/bia4.jpg" width="700" height="500">
        <img src = "image/bookStoreImage_2jpg.jpg" width="395" height="500">


        <!-- <img src = "image/bookStoreImage_6.jpg"> -->
        <!-- <img src = "bookStoreImage_4.jpg"> -->
    </div>

    <h2 class="h4"> <ins><b>GỢI Ý MỘT SỐ SÁCH HAY NHÀ MÌNH</b></h2></ins>

    <ul class="products" >
        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=TND" class="product-thumb">
                        <img src="image/thien_nga_den.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=TND" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=TND" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=SKD" class="product-cat">Sách kinh doanh</a>
                    <a href="detailProduct.php?idP=TND" class="product-name">Thiên Nga Đen </a>
                    <div class="product-price"><?php echo number_format(200000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=YNDKHH" class="product-thumb">
                        <img src="image/yeu_nhung_dieu_khong_hoan_hao.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=YNDKHH" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=YNDKHH" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=TNVH" class="product-cat">Truyện ngắn văn học</a>
                    <a href="detailProduct.php?idP=YNDKHH" class="product-name">Yêu Những Điều Không Hoàn Hảo</a>
                    <div class="product-price"><?php echo number_format(110000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=HV" class="product-thumb">
                        <img src="image/hoc_vien.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=HV" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=HV" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=STT" class="product-cat">Sách trinh thám</a>
                    <a href="detailProduct.php?idP=HV" class="product-name">Học Viện - The Institute</a>
                    <div class="product-price"><?php echo number_format(225000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=NKXC" class="product-thumb">
                        <img src="image/nhung_ke_xuat_chung.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=NKXC" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=NKXC" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=STK" class="product-cat">Sách tham khảo</a>
                    <a href="detailProduct.php?idP=NKXC" class="product-name">Những Kẻ Xuất Chúng </a>
                    <div class="product-price"><?php echo number_format(200000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=VRCCA" class="product-thumb">
                        <img src="image/va_roi_chang_con_ai.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=VRCCA" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=VRCCA" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=STT" class="product-cat">Sách trinh thám</a>
                    <a href="detailProduct.php?idP=VRCCA" class="product-name">Và Rồi Chẳng Còn Ai</a>
                    <div class="product-price"><?php echo number_format(100000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=SMCTQ" class="product-thumb">
                        <img src="image/suc_manh_cua_thoi_quen.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=SMCTQ" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=SMCTQ" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=SKN" class="product-cat">Sách kỹ năng</a>
                    <a href="detailProduct.php?idP=SMCTQ" class="product-name">Sức Mạnh Của Thói Quen</a>
                    <div class="product-price"><?php echo number_format(150000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=DDD" class="product-thumb">
                        <img src="image/dai_duong_den.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=DDD" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=DDD" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=STLH" class="product-cat">Sách tâm lý học</a>
                    <a href="detailProduct.php?idP=DDD" class="product-name">Đại Dương Đen</a>
                    <div class="product-price"><?php echo number_format(190000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=TLMNDK" class="product-thumb">
                        <img src="image/tron_len_mai_nha_de_khoc.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=TLMNDK" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=TLMNDK" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=T" class="product-cat">Truyện</a>
                    <a href="detailProduct.php?idP=TLMNDK" class="product-name">Trốn Lên Mái Nhà Để Khóc</a>
                    <div class="product-price"><?php echo number_format(80000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=KDKSDSH" class="product-thumb">
                        <img src="image/khong_diet_khong_sinh_dung_so_hai.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=KDKSDSH" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=KDKSDSH" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=STLTG" class="product-cat">Sách tâm linh - tôn giáo</a>
                    <a href="detailProduct.php?idP=KDKSDSH" class="product-name">Không Diệt Không Sinh Đừng Sợ Hãi</a>
                    <div class="product-price"><?php echo number_format(75000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=TTHVTCX" class="product-thumb">
                        <img src="image/toi_thay_hoa_vang_tren_co_xanh.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=TTHVTCX" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=TTHVTCX" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=SKN" class="product-cat">Sách kỹ năng</a>
                    <a href="detailProduct.php?idP=TTHVTCX" class="product-name">Tôi Thấy Hoa Vàng Trên Cỏ Xanh</a>
                    <div class="product-price"><?php echo number_format(80000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=TTTL" class="product-thumb">
                        <img src="image/thao_tung_tam_ly.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=TTTL" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=TTTL" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=STLH" class="product-cat">Sách tâm lý học</a>
                    <a href="detailProduct.php?idP=TTTL" class="product-name">Thao Túng Tâm Lý</a>
                    <div class="product-price"><?php echo number_format(80000) ?></div>
                </div>
            </div>

        </li>

        <li>
            <div class="product-item">
                <div class = "product-top">
                    <a  href = "detailProduct.php?idP=TDKTPCTKD" class="product-thumb">
                        <img src="image/ke_toan_phai_co_trong_kinh_doanh.png" alt="">
                    </a>
                    <div class="container">
                        <a href="add_to_cart.php?idP=TDKTPCTKD" class="cart-shopping" style="color: white;">&#x1F6D2</a>
                        <a href="click_buy_now.php?idP=TDKTPCTKD" class="buy-now"><b>Mua ngay</b></a>
                    </div>
                    
                </div>
                <div class="product-info">
                    <a href="productLine.php?idPL=SKD" class="product-cat">Sách kinh doanh</a>
                    <a href="detailProduct.php?idP=TDKTPCTKD" class="product-name">Tư Duy Kế Toán Phải Có Trong Kinh Doanh</a>
                    <div class="product-price"><?php echo number_format(80000) ?></div>
                </div>
            </div>

        </li>

    </ul>
</div>   
    <!-- DESIGN CONTENT GOES HERE. -->


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
                    <a href="" style="text-decoration:none; color:coral; font-family:'Courier New', Courier, monospace;">Facebook</a>
    
                </li>
                <li>
                    <a href="" style="text-decoration:none; color:rgb(10, 144, 144); font-family:'Courier New', Courier, monospace;"><b>Instagram</b></a>
                </li>
                <li>
                    <a href="" style="text-decoration:none; color:coral; font-family:'Courier New', Courier, monospace;">Tiktok</a>
                </li>
                <li>
                    <a href="" style="text-decoration:none; color:rgb(10, 144, 144); font-family:'Courier New', Courier, monospace;"><b>Youtube</b></a>
                </li>
            </ul>
        </div>
    

</body>
</html>

