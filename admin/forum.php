<?php
   
include "../admin/db.php";

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
    <title>Управление форумом</title>
</head>
<body>
   

    <div class="zagalovok">
        <span><a href="../admin/index.php">Панель Администратора /</a></span>
        <span><a href="../admin/forum.php">Управление форумом</a></span>
        </br>
    </div>


    <div class="prev_comments">
    
        
        <div class="content">
        
        <section>
        <h3>Темы форума</h3>
            <table border="2" width="800px" height="200px" align="justify">
                <tr>
                    <th>&#128273; ID темы форума</th>
                    <th>✍ Название темы</th>
                    <th>&#9998; Имя создателя</th>
                    <th>&#10060; Удаление данных</th>
                </tr>
                <?php 
                    $results = mysqli_query($conn, "SELECT * FROM forum_subject");
                    $results = mysqli_fetch_all($results);
                    foreach ($results as $results){
                ?>

                <tr>
                    <td><?=$results[0]?></td>
                    <td><?=$results[1]?></td>
                    <td><?=$results[2]?></td>
                    <td><a style="color:red;" href="../admin/vender/delete4.php?id=<?=$results[0]?>">Удалить</a></td>
                </tr>

                <?php

                    }    
                ?>

            </table>
        </section>
        </div>   
    </div>

    <div class="prev_comments">
    
        
        <div class="content">
        
        <section>
        <h3>Заданные вопросы на форуме</h3>
            <table border="2" width="1200px" height="200px" align="justify">
                <tr>
                    <th>&#128273; ID вопросы</th>
                    <th>&#128273; ID пользователя</th>
                    <th>&#128273; ID темы форума</th>
                    <th>&#9998; Имя пользователя</th>
                    <th>@ Email</th>
                    <th>&#128386; Вопрос</th>
                    <th>&#10060; Удаление данных</th>
                </tr>
                <?php 
                    $results = mysqli_query($conn, "SELECT * FROM forum");
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
                    <td><a style="color:red;" href="../admin/vender/delete5.php?id=<?=$results[0]?>">Удалить</a></td>
                </tr>

                <?php

                    }    
                ?>

            </table>
        </section>
        </div>   
    </div>

    <div class="prev_comments">
    
        
        <div class="content">
        
        <section>
        <h3>Ответы на вопросы на форуме</h3>
            <table border="2" width="1200px" height="200px" align="justify">
                <tr>
                    <th>&#128273; ID ответы</th>
                    <th>&#128273; ID пользователя</th>
                    <th>&#128273; ID темы форума</th>
                    <th>&#128273; ID вопросы</th>
                    <th>&#9998; Имя пользователя</th>
                    <th>&#9998; Кому</th>
                    <th>@  Email</th>
                    <th>&#128386; Сообщения</th>
                    <th>&#10060; Удаление данных</th>
                </tr>
                <?php 
                    $results = mysqli_query($conn, "SELECT * FROM forum_replies");
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
                    <td><a style="color:red;" href="../admin/vender/delete6.php?id=<?=$results[0]?>">Удалить</a></td>
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