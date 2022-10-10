<?php
   
require_once "../../admin/db.php";

$id = $_GET['id'];
mysqli_query($conn, query: "DELETE FROM forum WHERE `forum`.`id` = '$id' ");

header('Location: ../../admin/forum.php'); 
