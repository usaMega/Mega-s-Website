<?php
require_once("connect.php");

<<<<<<< HEAD
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
=======
$id = $_GET['id'];
echo $id;

// Uncomment this to redirect back to tables
// header("Location:Table/table.php");
>>>>>>> e8414c733bfc6a416e3250683846c990f3e81bf6
