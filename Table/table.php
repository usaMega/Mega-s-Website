<<<<<<< HEAD
<?php include "../read.php"?>
 
 <!DOCTYPE html>
=======
<?php
require_once("../showAll.php");
?>

<!DOCTYPE html>
>>>>>>> e8414c733bfc6a416e3250683846c990f3e81bf6
<html lang="en">
<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Table For Database </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="../style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </script>
=======
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Myself</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="../style.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="mysql/localhost/usa_arbolado/contact">
   <link rel="stylesheet" href="index.php">
   <link rel="stylesheet" href="delete.php">

>>>>>>> e8414c733bfc6a416e3250683846c990f3e81bf6
</head>
<body 
   <div class="container text-center my-5">
<<<<<<< HEAD
      <div class="bg-custom fw-bold fs-2 mt-2 mb-4">TABLE</div>
                    </div>
                    <div class="card-body">
                        <?php if(mysqli_num_rows($query_run)) {?>
                        <table class="table table-hover text-center">
                            <thead>
                            <tr class="bg-light text-white">
                                <th scope = "col"> # </th>
                                <th scope = "col"> Email </th>
                                <th scope = "col"> Name </th>
                                <th scope = "col"> Message </th>
                                <th scope = "col"> Edit </th>
                                <th scope = "col"> Delete </th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i=0;
                                while($row = mysqli_fetch_assoc($query_run)) { 
                                $i++;
                                ?>
                                <tr class="text-center">
                                    <th scope="row"><?=$i?></th>
                                    <td><?=$row['email']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['message']; ?></td>
                                    <td><a href="edit.php?id=<?=$row['id'];?>" class="btn btn-outline-success">Edit</a></td>
                                    <td><a href="../delete.php?id=<?=$row['id'];?>" class="btn btn-outline-danger">Delete</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-custom container text-center">
            <a class="text-center fw-bold nav-link active fs-3" href="../index.php">Home</a>
         </div>
   

</body>
</html>
=======
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
            // read data of each row
            foreach ($rows as $key => $value) : ?>
               <tr>
                  <td><?= $value['id'] ?></td>
                  <td><?= $value['email'] ?></td>
                  <td><?= $value['name'] ?></td>
                  <td><?= $value['message'] ?></td>
                  <td>
                     <a class='btn btn-outline-danger btn-sm' href="../edit.php?id=<?= $value['id']; ?>">Edit</a>
                     <a class='btn btn-outline-danger btn-sm' href="../delete.php?id=<?= $value['id']; ?>">Delete</a>
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
>>>>>>> e8414c733bfc6a416e3250683846c990f3e81bf6
