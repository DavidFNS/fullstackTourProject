<?php
   
include "../admin/db.php";

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
    <link rel="stylesheet" type="text/css" href="../scss/mobile.adap.css" />
    <link rel="stylesheet" type="text/css" href="../scss/registr.css" />
    <title>Спиcок пользователей</title>
</head>
<body>
    

    <div class="zagalovok">
        <span><a href="../admin/index.php">Панель Администратора /</a></span>
        <span><a href="../admin/users.php">Спиcок пользователей</a></span>
        </br>

    </div>


    <div class="prev_comments">
        <div class="content">
        
        <section>
        <h3>Спиcок пользователей и их данные</h3>
            <table border="2" width="800px" height="200px" align="justify">
                <tr>
                    <th>&#128273; ID</th>
                    <th>&#9998; Имя пользователя</th>
                    <th>&#9993; Email</th>
                    <th>&#128274; Пароль</th>
                </tr>
                <?php 
                    $result = mysqli_query($conn, "SELECT * FROM users");
                    $result = mysqli_fetch_all($result);
                    foreach ($result as $result){
                ?>

                <tr>
                    <td><?=$result[0]?></td>
                    <td><?=$result[1]?></td>
                    <td><?=$result[2]?></td>
                    <td><?=$result[3]?></td>
                </tr>

                <?php

                    }    
                ?>

            </table>
        </section>
        </div>   
    </div>



</body>
</html>