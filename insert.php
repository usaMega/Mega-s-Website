<?php
require_once("connect.php");

if (isset($_POST)) {
   $email = $_POST['email'];
   $name = $_POST['name'];
   $message = $_POST['message'];

   $query = "INSERT INTO contact (email, name, message) VALUES ('$email', '$name', '$message')";
   $query_run = mysqli_query($connection, $query);

   if ($query_run) {
      echo '<script> alert ("COMMENTED"); </script>';
      header('Location: index.php');
   } else {
      echo '<script> alert("ERROR"); </script>';
   }
}