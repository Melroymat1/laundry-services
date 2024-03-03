<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $item = $_POST['item'];
    $amount = $_POST['amount'];

    $sql = "insert into `crud`(item,amount) values('$item','$amount')";
    $reult = mysqli_query($con, $sql);
    if ($reult) {
        header('location:admindisplay.php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>oporations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
    margin: 20px auto;
    width: 80%;
}

.form-control {
    margin-bottom: 10px;
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    box-sizing: border-box;
}
.btn{
    margin-left: 11%;
}

    </style>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <input class="form-control" type="text" name="item"  placeholder="Enter Item Name">
            <input class="form-control" type="text" name="amount" placeholder="Enter Item Amount " >

    </div>
    <button type="submit" class="btn btn-primary" name="submit">submit</button>
    </form>
</body>

</html>
