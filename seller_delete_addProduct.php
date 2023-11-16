<?php
    // lay du lieu id can xoa tu address
    $idP = $_GET['idP'];
    
    // ket noi voi csdl
    $conn = new mysqli('localhost', 'root', 'Conanvskid1!', 'bookstore');
    if($conn->connect_error){
        die("Connect failed". mysqli_connect_error());
    }

    // cau lenh xoa san pham bang SQL
    $delete_SQL = "DELETE FROM product WHERE productCode = '$idP';";
    //echo $delete_SQL; exit;

    mysqli_query($conn, $delete_SQL);
    header("Location: seller_list_addProduct.php");
?>