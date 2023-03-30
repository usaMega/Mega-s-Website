<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Myself</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="../style.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="mysql/localhost/usa_arbolado/contact">
   <link rel="stylesheet" href="index.php">
   <link rel="stylesheet" href="delete.php">

</head>

<body>
   <div class="container text-center my-5">
      <div class="text-custom fw-bold fs-2 mt-2 mb-4">TABLE</div>
     
     <br>
     <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">EMAIL</th>
      <th scope="col">NAME</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
        <tbody>
           <?php
           $servername = "localhost";
           $username = "root";
           $password = "";
           $database = "contact_db";   

            // Create connection
            $connection = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($connection->connect_error) {
               die("Connection failed: " . $connection->connect_error);
            }

            // read all row from database table
            $sql = "SELECT * FROM contact";
            $result = $connection->query($sql);

            if (!$result) {
               die("Invalid query: " . $connection->error);
            }


            // read data of each row
            foreach ($result->fetch_all() as $key => $value) : ?>
               <tr>
                  <td><?= $value['0'] ?></td>
                  <td><?= $value['1'] ?></td>
                  <td><?= $value['2'] ?></td>
                  <td><?= $value['3'] ?></td>

                 
                     <td>
                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $rows['id']?>">
                                    <input type="submit" name="delete" class="btn btn-outline-danger btn-sm" value="DELETE">
                                </form>
                            </td>
                  
               </tr>
            <?php endforeach ?>
         </tbody>
      </table>
   </div>
   <div class="container">
   <div class="bg-custom text-center py-4">
        <br> <br><br><button class="btn btn-outline-danger " onclick="history.back()">Home</button>
      </div>
      </div>
   <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>