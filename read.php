<?php
    include "connect.php";

    $query = "SELECT * FROM `contact` ORDER BY id";
    $query_run = mysqli_query($connection, $query);