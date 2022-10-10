<?php
   
require_once "../../admin/db.php";

$id = $_GET['id'];
mysqli_query($conn, query: "DELETE FROM feedback WHERE `feedback`.`id` = '$id' ");

header('Location: ../../admin/feedback.php'); 
