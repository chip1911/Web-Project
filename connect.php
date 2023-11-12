<?php
$conn = new mysqli('localhost', 'root', '400Qu_nT172Yj', 'bookstore');
if($conn->connect_error){
    die("Connect failed". mysqli_connect_error());
}
echo "succesful";
?>