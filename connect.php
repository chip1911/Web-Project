<?php
$conn = new mysqli('localhost', 'root', 'password', 'bookstore');
if($conn->connect_error){
    die("Connect failed". mysqli_connect_error());
}
echo "succesful";
?>
