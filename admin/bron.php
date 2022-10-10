<?php
require_once "../admin/db.php";

if (isset($_POST['submit'])){
    $_SESSION['users']['user_id'] = $_POST['user_id'];
    $_SESSION['username'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['product'] = $_POST['product'];
    $_SESSION['place_of_residence'] = $_POST['place_of_residence'];
    $_SESSION['tour_start_date'] = $_POST['tour_start_date'];
    $_SESSION['tour_end_date'] = $_POST['tour_end_date'];
    $_SESSION['numb_seniors'] = $_POST['numb_seniors'];
    $_SESSION['child_2'] = $_POST['child_2'];
    $_SESSION['child_12'] = $_POST['child_12'];
    $_SESSION['price'] = $_POST['price'];
    $_SESSION['services'] = $_POST['services'];
    $_SESSION['date'] = date (format: 'Y-m-d H:i:s');
     
    $sql = "INSERT INTO orders (`user_id`, `name`, `email`, `product`, `place_of_residence`, `tour_start_date`, `tour_end_date`, `numb_seniors`, `child_2`, `child_12`, `price`, `services`, `date_at`) 
    VALUES ('{$_SESSION['users']['user_id']}', '{$_SESSION['username']}', '{$_SESSION['email']}', '{$_SESSION['product']}', '{$_SESSION['place_of_residence']}', '{$_SESSION['tour_start_date']}', '{$_SESSION['tour_end_date']}', '{$_SESSION['numb_seniors']}', '{$_SESSION['child_2']}','{$_SESSION['child_12']}', '{$_SESSION['price']}', '{$_SESSION['services']}', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('Успешно оформлено!')</script>";
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
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <link rel="stylesheet" type="text/css" href="../scss/admin.scss" />
    <link rel="stylesheet" type="text/css" href="../scss/mobile.adap.css" />
    <title>Управление бронированием</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<style>
    html,body{
        background: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url("../images/background2.png");
        background-size:cover;
        background-attachment: fixed;
    }

    .form_group{
    margin: 20px 20px;
    }
</style>
    <div class="zagalovok">
        <span><a href="../admin/index.php">Панель Администратора /</a></span>
        <span><a href="../admin/bron.php">Управление бронированием</a></span>
        </br>
        </br>
    </div>


        <div class="content" >
        <section >
        <h3>Спиcок оформленных туров пользователей</h3>
            <table border="2" width="1280px" height="200px" align="justify">
                <tr>
                    <th>&#128273; ID брони</th>
                    <th style="width: 80px;">&#128273; ID user</th>
                    <th>&#9998; Имя </th>
                    <th>&#9993; Email</th>
                    <th>&#9997; Название тура</th>
                    <th>🏠 Место проживания</th>
                    <th>&#128197; Начала тура</th>
                    <th>&#128197; Завершение тура</th>
                    <th>👨👩 Количество старших</th>
                    <th>🧒 Дети(до 2 лет)</th>
                    <th> 🧒 Дети(до 12 лет)</th>
                    <th>&#128176; Цена</th>
                    <th>&#128176; Другие услуги</th>
                    <th>&#128221; Изменение данных</th>
                    <th>&#10060; Удаление данных</th>
                    
                </tr>
                <?php 
                    $results = mysqli_query($conn, "SELECT * FROM orders");
                    $results = mysqli_fetch_all($results);
                    foreach ($results as $results){
                ?>

                <tr>
                    <td><?=$results[0]?></td>
                    <td><?=$results[1]?></td>
                    <td><?=$results[2]?></td>
                    <td><?=$results[3]?></td>
                    <td><?=$results[4]?></td>
                    <td><?=$results[5]?></td>
                    <td><?=$results[6]?></td>
                    <td><?=$results[7]?></td>
                    <td><?=$results[8]?></td>
                    <td><?=$results[9]?></td>
                    <td><?=$results[10]?></td>
                    <td><?=$results[11]?>₽</td>
                    <td><?=$results[12]?>₽</td>
                    <td><a href="../admin/update_bron.php?id=<?=$results[0]?>">Изменить</a></td>
                    <td><a style="color:red;" href="../admin/vender/delete.php?id=<?=$results[0]?>">Удалить</a></td>
                </tr>

                <?php

                    }    
                ?>

            </table>
            <div class="submit" >
                <a href="#" class="btn btn-primary buy">Добавить новый тур</a>
            </div>
                </br>
        </section>
            
        </div>  

        

        <div class="modal fade" id="cart" style="width: 100%; ">
        <div class="modal-dialog" role="document"> 
            <div class="modal-content" style="width: 650px;margin-left: -50px;">
                <div class="modal-header">
                    <h5 class="modal-title">Оформление тура</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body">
                <form id="buy" method="post"> 
                    <div style="border:1px solid #b3b2ae;">
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                            <label for="name">ID пользователя</label>
                            <input type="name" name="user_id" class="form-control"  id="name" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                            <label for="name">Имя пользователя</label>
                            <input type="name" name="name" class="form-control"  id="name" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                            <label for="email">Email пользователя</label>
                            <input type="email" name="email" class="form-control" id="email" " required>
                        </div>
                        <div class="form_group">
                        <label for="product">Выбранный тур</label>
                            <input type="text" name="product" class="form-control" id="product" required>
                        </div>
                        <div class="form_group">
                        <label for="place_of_residence">Место проживание</label>
                            <input type="text" name="place_of_residence"  class="form-control" id="place_of_residence" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                        <label for="tour_start_date">Дата начала тура:</label>
                            <input type="date" name="tour_start_date" class="form-control"  id="tour_start_date" required/>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;margin-top:0">
                        <label for="tour_end_date">Дата завершение тура:</label>
                            <input type="date" name="tour_end_date" class="form-control"  id="tour_end_date" required/>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 160px; margin-bottom: 0; ">
                            <label for="price">Количество старших</label>
                            <input type="text" name="numb_seniors" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 180px; margin-bottom: 0;margin-left: -10px;">
                            <label for="price">Количество детей(до 2 лет)</label>
                            <input type="text" name="child_2" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 190px; margin-left: -10px;margin-bottom: 0;" >
                            <label for="price">Количество детей(до 12 лет)</label>
                            <input type="text" name="child_12" class="form-control" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px; margin-bottom: 0;">
                        <label for="price">Стоимость на одного человека</label>
                            <input style="width: 150px;" type="hidde" name="price" class="form-control" id="price" required>
                        </div>
                        <div class="form_group" style="display: inline-block; width: 250px;margin-left: 10px;">
                        <label for="services">Допольнителные услуги</label>
                            <input type="hidde" style="width: 150px;" name="services"  class="form-control" id="services" required>
                        </div>
                    </div>
                    <div class="form_group" style="display: inline-block; width: 250px;margin-left: 10px;">
                        <button style="margin-left: 250px; " type="submit" name="submit" class="btn btn-primary">Оформить</button>             
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>




            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="../js/main.js"></script>

</body>
</html>