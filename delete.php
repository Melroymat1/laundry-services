<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from crud where id=$id";
    $reult = mysqli_query($con, $sql);
    if ($reult) {
        echo "Deleted Successfully";
        header('location:admindisplay.php');
    } else {
        die(mysqli_error($con));
    }
}
