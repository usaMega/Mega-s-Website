<?php
require_once("connect.php");

<<<<<<< HEAD
if (isset($_POST)) {
=======
if (isset($_POST['submit'])) {
>>>>>>> e8414c733bfc6a416e3250683846c990f3e81bf6
   $email = $_POST['email'];
   $name = $_POST['name'];
   $message = $_POST['message'];

<<<<<<< HEAD
   $query = "INSERT INTO contact (email, name, message) VALUES ('$email', '$name', '$message')";
   $query_run = mysqli_query($connection, $query);

   if ($query_run) {
      echo '<script> alert ("COMMENTED"); </script>';
      header('Location: index.php');
   } else {
      echo '<script> alert("ERROR"); </script>';
   }
}
=======

   $query = "INSERT INTO contact (`email`, `name`, `message`) VALUES ('$email', '$name', '$message')";
   $query_run = mysqli_query($connection, $query);

   // Redirect back to index
   header("Location:index.php");
}
>>>>>>> e8414c733bfc6a416e3250683846c990f3e81bf6
