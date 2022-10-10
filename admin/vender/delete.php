<?php
require_once "../../admin/db.php";
$id = $_GET['id'];
mysqli_query($conn, query: "DELETE FROM orders WHERE `orders`.`id` = '$id' ");
header('Location: ../../admin/bron.php'); 
