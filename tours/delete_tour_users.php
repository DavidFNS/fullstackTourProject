<?php
   
require_once "../connect_php/db.php";

$id = $_GET['id'];
mysqli_query($conn, query: "DELETE FROM orders WHERE `orders`.`id` = '$id' ");

header('Location: ../tours/tours_user.php'); 
