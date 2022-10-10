<?php
require_once "../admin/db.php";
$results_id = $_GET['id'];
$results = mysqli_query($conn, query: "SELECT * FROM orders WHERE id = '$results_id' ");
$result = mysqli_fetch_assoc($results);
    
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
    <link rel="stylesheet" type="text/css" href="../scss/admin.scss" />
    <link rel="stylesheet" type="text/css" href="../scss/mobile.adap.css" />
    <link rel="stylesheet" type="text/css" href="../scss/update.css" />
    <title>Изменение данные</title>
</head>
<body>
    <header>
        <div class="top_wrap">
            <div class="logo"><img src="https://uzbekistan.travel/themes/travel/assets/img/uzlogo_white.png" alt="" /></div>
            <div class="description">
                <p>Туристический информационный портал</p>
                        
            </div>
        </div>
    </header>
    <div class="zagalovok">
        <span><a href="../admin/index.php">Панель Администратора /</a></span>
        <span><a href="../admin/bron.php">Управление бронированием /</a></span>
        <span><a href="../admin/update_bron.php?id=9">Изменение данные</a></span>
        </br>
        </br>
        <p>Изменение данные</p>
    </div>
    <form method="post" action="../admin/vender/update.php">
                    <div class="form_group">
                    <input type="hidden" name="id" value="<?= $result['id'] ?>"/>
                        <label for="name">Введите имя</label>
                        <input type="name" name="name" value="<?= $result['name'] ?>"/>
                    </div>
                    <div class="form_group">
                        <label for="email">Введите Email</label>
                        <input type="email" name="email" value="<?= $result['email'] ?>"/>
                    </div>
                    <div class="form_group">
                        <label for="product">Выбранный тур</label>
                        <input type="text" name="product" value="<?= $result['product'] ?>"/>
                    </div>
                    <div class="form_group">
                        <label for="place_of_residence">Место проживание</label>
                        <input type="text" name="place_of_residence" value="<?= $result['place_of_residence'] ?>"/>
                    </div>
                    <div class="form_group">
                        <label for="tour_start_date">Дата начала тура:</label>
                        <input type="date" name="tour_start_date" value="<?= $result['tour_start_date'] ?>" />
                    </div>
                    <div class="form_group">
                        <label for="tour_end_date">Дата завершение тура:</label>
                        <input type="date" name="tour_end_date" value="<?= $result['tour_end_date'] ?>"/>
                    </div>
                    <div class="form_group">
                        <label for="price">Цена</label>
                        <input type="text" name="price" value="<?= $result['price'] ?>"/>
                    </div>
                    <div class="form_group">
                        <label for="services">Допольнителные услуги</label>
                        <input type="text" name="services" value="<?= $result['services'] ?>"/>
                    </div>
                    <div class="form_group">
                        <button type="submit" name="submit">Изменить</button>
                    </div>
            </form> 
</body>
</html>