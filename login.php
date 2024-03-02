
<?php
if (isset($_POST['email'])) {
    $server = "localhost";
    $user = "root";
    $pass = "";
    $con = mysqli_connect($server, $user, $pass);
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (!$con) {
        die('con error');
    }

    $query = "SELECT * FROM `signup1`.`signup1` WHERE email='$email' and password='$pass';";
    $res = $con->query($query);
    if (!$res->num_rows == 1) {
        echo "<script> alert('Not a Valid User or password');</script>";
    }
    if ($res->num_rows == 1) {
        Header("Location:userpage.html");
    }
}