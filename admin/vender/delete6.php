<?php
   
require_once "../../admin/db.php";

$id = $_GET['id'];
mysqli_query($conn, query: "DELETE FROM forum_replies WHERE `forum_replies`.`id` = '$id' ");

header('Location: ../../admin/forum.php'); 
