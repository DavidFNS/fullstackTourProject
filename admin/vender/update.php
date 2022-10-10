<?php
   
require_once "../../admin/db.php";

if (isset($_POST['submit'])){
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$product = $_POST['product'];
$place_of_residence = $_POST['place_of_residence'];
$tour_start_date = $_POST['tour_start_date'];
$tour_end_date = $_POST['tour_end_date'];
$price = $_POST['price'];
$services = $_POST['services'];

$sql =  "UPDATE orders SET `name` = '$name', `email` = '$email', `product` = '$product', `place_of_residence` = '$place_of_residence', 
`tour_start_date` = '$tour_start_date', `tour_end_date` = '$tour_end_date', `price` = '$price', `services` = '$services' WHERE `orders`.`id` = $id"; 

$result = mysqli_query($conn,$sql);
if ($result) {
    echo "<script>alert('Успешно изменено!')</script>";
} else {
    echo "<script>alert('Ошибка! Проверьте данные')</script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="my site. My web-site" />
    <meta name="description" content=" My site!" />
    <link rel="shortcut icon" type="image /x-icon" href="../../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../../scss/admin.css" />
    <link rel="stylesheet" type="text/css" href="../../scss/mobile.adap.css" />
    <link rel="stylesheet" type="text/css" href="../../scss/registr.css" />
    <title>Изменение данные</title>
</head>
<body>
   
<form class="comment" action="" method="POST">     
    <div class="row1">
        <div class="input-group">
            
            <a href="../../admin/bron.php" style="font-size: 24px; margin-left: 20px;">Вернуться назад</a>
        </div> 
    </div> 
</form>

</body>
</html>
