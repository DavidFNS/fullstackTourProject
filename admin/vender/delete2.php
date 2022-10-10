<?php
   
require_once "../../admin/db.php";

$id = $_GET['id'];
mysqli_query($conn, query: "DELETE FROM comments WHERE `comments`.`id` = '$id' ");

header('Location: ../../admin/comment.php'); 
