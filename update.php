<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "select * from `crud` where id=$id";
$reult = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($reult);
$item = $row['item'];
$amount = $row['amount'];

if (isset($_POST['submit'])) {
    $item = $_POST['item'];
    $amount = $_POST['amount'];

    $sql = "update `crud` set id=$id,item='$item',amount=$amount where id=$id";
    $reult = mysqli_query($con, $sql);
    if ($reult) {
        //echo "updated successfully";
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
            <input class="form-control" type="text" name="item" value=<?php echo $item; ?> placeholder="Enter Item Name">
            <input class="form-control" type="text" name="amount" value=<?php echo $amount; ?> placeholder="Enter Item Amount " >

    </div>
    <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
</body>

</html>
