<?php
session_start(); 

include "../connect_php/db.php";

error_reporting(0);
    
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
    <link rel="stylesheet" type="text/css" href="../scss/registr.css" />
    <title>Мой профиль</title>
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
        <span><a href="../user-profil/user_profil.php">Мой профиль</a></span>
        </br>
        </br>
        <p>Мой профиль</p>
    </div>


    <div class="content">
    
        <h3 style="border-bottom: 0; background:0">Управление учетной записью</h3>
            <table border="1" width="1200px" height="200px" align="justify">
                <tr>
                    <th>&#128273; ID пользователя</th>
                    <th>&#9998; Имя пользователя</th>
                    <th>&#9993; Email</th>
                    <th>&#128274; Пароль</th>
                    <th>&#128221; Изменение данных</th>
                   
                </tr>
                <?php 
                
                $sql = "SELECT * FROM users where user_id = '{$_SESSION['users']['user_id']}'";
                $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {    
                        while ($row = mysqli_fetch_assoc($result)) {
                           
                ?>
                <tr>
                    <td><?php echo $row['user_id'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><a href="../user-profil/user_update.php?id=<?=$row['user_id']?>">Изменить</a></td>
                </tr>
                <?php
                    }
                 }
                ?>
            </table>
            <h3>Мой баланс:</h3>
                        <?php 
                            $sql = "SELECT * FROM pay_online where id_users = '{$_SESSION['users']['user_id']}'";
                            $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    
                            ?> 
                    <div class="menu2" style=" width: 520px; height: 100px; margin-bottom:30px">
                            <img style="padding: 25px 8px; width: 100px;height: 40px; " src="../images/visa1.png" alt="">
                                
                            <div class="menu3" style="width: 350px; height: 60px;">
                                    
                                        <div class="block">
                                            <p style="font-size: 22px;">Visa Classic</p>
                                            <p style="font-size: 20px; color: rgb(12, 112, 17);" ><?php echo $row['money'];?> ₽</p>
                                        </div>
                                        <p style="margin-top: -10px;font-size: 18px;"><?php echo $row['number_card'];?></p>
                                </div>
                                
                    </div>
                            <?php
                                }
                            } else 
                             {
                                    ?>  
                                    <div class="block">
                                        <p style="font-size: 22px;color:red">Вам нужно добавить свои данные банковских карт!</p>
                                    </div>
                                <?php
                                    }
                                
                            
                            ?>
        </div>


</body>
</html>