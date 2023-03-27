<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Myself</title>
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="mysql/localhost/contact_db/contact">
   <link rel="stylesheet" href="index.php">

</head>

<body>
   <div class="container my-5">
      <h2>Table</h2>
     
      <br>
      <table class="table">
         <thead>
            <tr>
               <th scope = "col">ID</th>
               <th scope = "col">Email</th>
               <th scope = "col">Name</th>
               <th scope = "col">Message</th>
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
                     <a class='btn btn-primary btn-sm' href=' /contactt_db/edit.php?id=$row[id]'>Edit</a>
                     <a class='btn btn-primary btn-sm' href='/contact_db/delete.php?id=$row[id]'>Delete</a>
                  </td>
               </tr>
            <?php endforeach ?>
         </tbody>
      </table>
   </div>
   <div class="bg-custom text-center py-5">
        <br> <br><br><button class="btn btn-outline-danger " onclick="history.back()">Home</button>
      </div>
   <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>