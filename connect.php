<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'usa_arbolado');


if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['message'];


    $query = "INSERT INTO contact (`email`, `name`, `message`) VALUES ('$email', '$name', '$message')";
    $query_run = mysqli_query($connection, $query);


}



?>