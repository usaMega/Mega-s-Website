<?php require_once ('../connect.php');
if (isset($_GET['id'])) {
   $id = $_GET['id'];
 
   $query = "SELECT * FROM contact WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);

    if(mysqli_num_rows($query_run) >0)
    {
      $row = mysqli_fetch_assoc($query_run);
    } else {
        header('location: ../Table/table.php');
    }
}

if(isset($_POST['update'])) {
    $id=$_POST['id'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    $message=$_POST['message'];

    $query = "UPDATE contact SET email='$email', name='$name', message='$message' WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run) 
    {
        echo '<script> alert ("data updated");</script>'; 
        header('location: ../Table/table.php');
    } else{
        echo '<script> alert ("data not updated");</script>';  

    }

}


?>