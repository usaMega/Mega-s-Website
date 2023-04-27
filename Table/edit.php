<?php include "update.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT MYSELF </title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h2> Edit </h2>
        <hr>
        <form action="update.php" method="POST" id="CommentForm">
        <h1>Comment About Me</h1>
        <input type="hidden" name="id" value="<?=$row['id']; ?>">
         <input type="text" id="email" name="email" class="form-control mb-3" value="<?=$row['email']; ?>" placeholder="Email Address">
         <input type="text" id="name" name="name" class="form-control mb-3" value="<?=$row['name']; ?>" placeholder="Name">
         <textarea name="message" id="message" class="form-control mb-3" placeholder="message"><?=$row['message']; ?> </textarea>
         <button type="submit" name="update" class=" btn btn-primary">Update</button>
         <a href="table.php" class="btn btn-danger">Cancel</a>
      </form> 
      </hr>

</div>
</div>      
    </body>
</html>