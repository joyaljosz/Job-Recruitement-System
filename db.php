<?php 

$con = mysqli_connect("localhost","root","","placement");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>

