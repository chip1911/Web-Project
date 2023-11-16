<?php
$conn = new mysqli('localhost', 'root', 'Conanvskid1!', 'bookstore');
if($conn->connect_error){
    die("Connect failed". mysqli_connect_error());
}
echo "succesful";
?>