<?php
require_once("connect.php");

// read all row from database table
$query = "SELECT * FROM contact";
$result = mysqli_query($connection, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
