<?php
require_once("connect.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $query= "DELETE FROM contact WHERE id='$id' ";
    $query_run = mysqli_query($connection,  $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header('location: ./Table/table.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
        header('location: ./Table/table.php');
    }
}

?> 