<?php
$server = 'localhost';
$username = 'root';
$password = '';
$con = mysqli_connect($server, $username, $password);
if (!$con) {
    die("error");
}
echo "connection established";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];

$query = "INSERT INTO `admin2`.`signup1`(`name`, `email`, `password`, `number`, `address`, `pincode`) VALUES ('$name','$email','$password','$number','$address','$pincode')";

$res = $con->query($query);
if (!$res) {
    die("not inserted");
}
echo "<script>alert('registration successfull')</script>";
