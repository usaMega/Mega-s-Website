<?php
require_once("connect.php");

if (isset($_POST['submit'])) {
   $email = $_POST['email'];
   $name = $_POST['name'];
   $message = $_POST['message'];


   $query = "INSERT INTO contact (`email`, `name`, `message`) VALUES ('$email', '$name', '$message')";
   $query_run = mysqli_query($connection, $query);

   // Redirect back to index
   header("Location:index.php");
}
