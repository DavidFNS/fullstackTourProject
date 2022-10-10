<?php
   
require_once "../../admin/db.php";

if (isset($_POST['submit'])){
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql =  "UPDATE users SET `username` = '$username', `email` = '$email', `password` = '$password' WHERE `users`.`user_id` = $id"; 

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
    <title>Учетные записи</title>
</head>
<body>
   
<form class="comment" action="" method="POST">     
    <div class="row1">
        <div class="input-group">
            
            <a href="../../user-profil/user_profil.php" style="font-size: 24px; margin-left: 20px;">Вернуться назад</a>
        </div> 
    </div> 
</form>

</body>
</html>
