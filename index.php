<?php
 include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="Table/table.php">
   <link rel="stylesheet" href="connect.php">

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
   <div class="bg-custom text-center py-1">   
      <div class= fs-1>
      <span class="fw-semibold">MEGA LANALEE</span>
   </div>
   <nav> 
      <ul class="nav bg-body-tertiary justify-content-end" >
         <li class="nav-item">
           <a class="text-brown nav-link" href="About me/About me.php"> About Me</a>
         </li>
        <li class="nav-item">
         <a class="text-brown  nav-link" href="Motto/Motto.php">Motto</a>
         </li>
         <li class="nav-item">
         <a class="text-brown  nav-link" href="Table/table.php">Table</a>
         </li>
       </ul>
      </nav>
     </div>
         <div class="background-image text-center">
        <div class="fs-1 fw-bold">This is Me!</div> <br> <br>
        <div class="fs-2 ">"Im just me a simple girl <br> Living her life the way one should"</div>
         </div>
         <div class="Contact py-2">
         <div class="container">
            <h1>Contact Me</h1>
            <form action ="insert.php" method ="POST">
            <div class="modal-body">
               <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" name = "email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               </div>
               <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name = "name" class="form-control" id="name">
               </div>
               <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea type="messaget" name = "message" class="form-control" id="message"></textarea>
               </div>
            </div>
            <button type="submit" name="submit" class="btn btn-light my-1">Submit</button>
            </form>
            </form>
         </div>
         <div class="Contact text-center">
            <a class="text-light nav-link active fs-3" href="index.php">Home</a>
         </div>
</div>
<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedbackLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="feedbackLabel">Modal title</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     ...
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
         
      <script src="Script/script.js"></script>

</body>
</html>