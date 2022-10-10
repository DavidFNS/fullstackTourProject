<?php
require_once "../connect_php/db.php";

$results_id = $_GET['id'];
$results = mysqli_query($conn, query: "SELECT * FROM users WHERE user_id = '$results_id' ");
$results = mysqli_fetch_assoc($results);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="my site. My web-site" />
    <meta name="description" content=" My site!" />
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../scss/admin.css" />
    <link rel="stylesheet" type="text/css" href="../scss/update.css" />
    <title>Страница Изменение данные</title>
</head>
<body>
<style>
    body {
        background: url("../images/background1.jpg") repeat center center ;
    }
</style>
    <header>
        <div class="top_wrap">
            <div class="logo"><img src="https://uzbekistan.travel/themes/travel/assets/img/uzlogo_white.png" alt="" /></div>
            <div class="description">
                <p>Туристический информационный портал</p>
                        
            </div>

        </div>
    </header>

    <div class="zagalovok">
        <span><a href="../index.php">Главная /</a></span>
        <span><a href="../pay-online/user_profil.php">Управление учетной записью /</a></span>
        <span><a href="../pay-online/user_update.php?id=">Изменение данные</a></span>
        </br>
        </br>
        <p>Изменение данные</p>
    </div>
        

    <form method="post" action="../user-profil/vender/update.php">
                    <div class="form_group">
                    <input type="hidden" name="id" value="<?= $results['user_id'] ?>"/>
                        <label for="name">Имя пользователя</label>
                        <input type="name" name="username" value="<?= $results['username'] ?>"/>
                    </div>
                    <div class="form_group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?= $results['email'] ?>"/>
                    </div>
                    <div class="form_group">
                        <label for="product">Пароль</label>
                        <input type="password" name="password" value="<?= $results['password'] ?>"/>
                    </div>
                    <div class="form_group">
                        <button type="submit" name="submit">Изменить</button>
                    </div>
            </form> 



</body>
</html>