<?php
require_once("connect.php");

$id = $_GET['id'];
$query = "SELECT * FROM contact WHERE id = '$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_row($result);

// show what is being requested. comment this out as this only serves for your reference
print_r($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="Table/table.php">
   <link rel="stylesheet" href="connect.php">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
   <form action="update.php" method="POST">
      <div class="modal-body">
         <div class="mb-3">
            <input type="text" value="<?= $row[0] ?>">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="<?= $row[1] ?>" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
         </div>
         <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="<?= $row[2] ?>">
         </div>
         <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" class="form-control" id="message"><?= $row[3] ?></textarea>
         </div>
      </div>
      <button type="submit" class="btn btn-light my-1">Submit</button>
   </form>
</body>

</html>
