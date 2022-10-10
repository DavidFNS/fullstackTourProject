<?php
session_start();
require_once "../connect_php/db.php";
    
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
    <link rel="stylesheet" type="text/css" href="../scss/buy_tour.scss" />
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.scss"/>
    <title>Управление бронированием</title>
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
    <div class="title">
        <span><a href="../index.php">Главная страница </a></span>/
        <span><a href="../tours/tour1.php">Туры в Узбекистан </a></span>/
        <span><a href="../tours/tours_user.php">Управление бронированием </a></span>
        <p>Управление бронированием</p>
    </div>
    </div>

 
 <div class="content">
        <section>
        <h3>Спиcок брони и их данные</h3>
        <div style="font-size: 20px;"> 
            <span> Имя пользователя: <a style="color: #1962e9; text-decoration:none; font-weight:bold;"><?php echo $_SESSION['users']['username']?></a></span>
            <span>Email: <a style="color: #1962e9; text-decoration:none; font-weight:bold; margin-rigth:0px"><?php echo $_SESSION['users']['email']?></a></span>
        </div>
            <table border="1" width="1280px" align="center" style="margin-left: 30px">
                <tr>
                    <th> Название тура</th>
                    <th> Место проживания</th>
                    <th style="width: 100px;"> Начала тура</th>
                    <th> Завершение тура</th>
                    <th>Количество взрослых</th>
                    <th>Количество детей(до 2 лет)</th>
                    <th>Количество детей(до 12 лет)</th>
                    <th> Стоимость на одного человека</th>
                    <th>Другие услуги на одного человека</th>
                    <th> Удаление данных</th>
                </tr>
                <?php 
                
                $sql = "SELECT * FROM orders where user_id = '{$_SESSION['users']['user_id']}'";
                $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {    
                        while ($row = mysqli_fetch_assoc($result)) {
                           
                ?>
                <tr>
                    <td><?php echo $row['product'];?></td>
                    <td><?php echo $row['place_of_residence'];?></td>
                    <td><?php echo $row['tour_start_date'];?></td>
                    <td><?php echo $row['tour_end_date'];?></td>
                    <td><?php echo $row['numb_seniors'];?></td>
                    <td><?php echo $row['child_2'];?></td>
                    <td><?php echo $row['child_12'];?></td>
                    <td><?php echo $row['price'];?>$</td>
                    <td><?php echo $row['services'];?>$</td>
                    <td><a style="color:red;" href="../tours/delete_tour_users.php?id=<?=$row['id']?>">Удалить</a></td>
                </tr>
                <?php
                    }
                 }
                ?>
            </table>           
                <?php
                $sql = "SELECT Sum(orders.numb_seniors) AS seniors, Sum(orders.child_2) AS child_2,Sum(orders.child_12) AS child_12, 
                Sum(orders.price * orders.numb_seniors) AS seniors_price, 
                Sum(orders.services * orders.numb_seniors) AS seniors_services,
                Sum((orders.price * orders.child_2) / 10) AS child_2_price, 
                Sum((orders.price * orders.child_12) / 2) AS child_12_price ,
                Sum((orders.price+orders.services) * orders.numb_seniors) + 
                Sum((orders.price * orders.child_2) / 10) + 
                Sum((orders.price * orders.child_12) / 2) AS sum_price FROM orders WHERE orders.user_id = '{$_SESSION['users']['user_id']}'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                $seniors = $row['seniors'];
                $child_2 = $row['child_2'];
                $child_12 = $row['child_12'];
                $seniors_price = $row['seniors_price'];
                $seniors_services = $row['seniors_services'];
                $child_2_price = $row['child_2_price'];
                $child_12_price = $row['child_12_price'];
                $sum_price = $row['sum_price'];
                ?>
                <table border="0" width="1000px" align="justify" style="margin-bottom: 30px">
                <tr>
                    <th>Путешественники</th>
                    <th>Количество</th>
                    <th> Стоимость (&sum;)</th>
                    <th> Другие услуги (&sum;)</th>
                </tr>
                <tr>
                    <td>Взрослые</td>
                    <td><?php echo $seniors;?></td>
                    <td><?php echo $seniors_price ?>₽</td>
                    <td><?php echo $seniors_services ?>₽</td>
                </tr>
                <tr>
                    <td>Дети(до 2 лет)</td>
                    <td><?php echo $child_2;?></td>
                    <td><?php echo $child_2_price ?>₽</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Дети(до 12 лет)</td>
                    <td><?php echo $child_12;?></td>
                    <td><?php echo $child_12_price ?>₽</td>
                    <td>-</td>
                </tr>
                </table>  
                <?php
                    }
                 } 
                ?>
             

           
                <?php
                $sql = "SELECT Sum((orders.price+orders.services) * orders.numb_seniors) + Sum((orders.price * orders.child_2) / 10) + Sum((orders.price * orders.child_12) / 2)
                AS a FROM orders WHERE orders.user_id = '{$_SESSION['users']['user_id']}'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                $result1 = $row['a'];
                ?>
                <h3>Итого к оплате: <?php echo $result1?>₽ </h3>
                <?php
                    }
                }      
                ?>
                <p>&#9989; Вы можете совершить оплату банковской картой</p>
                 <div class="submit2">
                    <a href="../pay-online/pay-online.php" class="btn "target="_blanck">Перейти к оплате</a>
                </div>
                </br>
          

        </section>
    </div>
</body>
</html>

              