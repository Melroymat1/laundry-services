<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin view</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5"><a class="text-light" href="user.php"> Add Item</a></button>
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th scope="col">SNO</th>
          <th scope="col">Item</th>
          <th scope="col">Price</th>
          <th scope="col">Oporation</th>
        </tr>
      </thead>
      <tbody>
        <?php
$sql = "select * from `crud`";
$reult = mysqli_query($con, $sql);
if ($reult) {
    while ($row = mysqli_fetch_assoc($reult)) {
        $id = $row['id'];
        $item = $row['item'];
        $price = $row['amount'];

        echo '
        <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $item . '</td>
        <td>' . $price . '</td>
        <td>
  <button class="btn btn-primary "><a class="text-light " href="update.php?updateid=' . $id . '">Update</a></button>
  <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteid=' . $id . '">Delete</a></button>
</td>

        </tr>
        ';
    }
}
?>
      </tbody>

    </table>
  </div>
</body>

</html>