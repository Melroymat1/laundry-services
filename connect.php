<?php
$con = new mysqli('localhost', 'root', '', 'admin2');
if (!$con) {
    die(mysqli_error($con));
}
