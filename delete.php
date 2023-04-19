<?php 

if (isset($_GET['id'])){
    include "../connect.php";
    function validate ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
            return $data;
}
 $id = validate($_GET['id']);

 $sql = "DELETE FROM contact
              WHERE id='$id'";
$result = mysqli_query($connection, $sql);
if ($result) {
    header("Location: ../Table/table.php?success=successfuly deleted");
}else{
    header("Location: ../Table/table.php?serror=unknown error&$contents_data");
}
}
else{
    header("Location: ./Table/table.php");
}