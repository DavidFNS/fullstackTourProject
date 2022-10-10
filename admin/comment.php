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
    <title>Управление комментариями</title>
</head>
<body>

    <div class="zagalovok">
        <span><a href="../admin/index.php">Панель Администратора /</a></span>
        <span><a href="../admin/comment.php">Управление комментариями</a></span>
        </br>
        </br>
        <p>Управление комментариями</p>
    </div>


    <div class="prev_comments">
    
        
        <div class="content">
        
        <section>
        <h3>Оставленные комментарии пользователей</h3>
            <table border="2" width="800px" height="200px" align="justify">
                <tr>
                    <th>&#128273; ID комменты</th>
                    <th>&#9998; Имя пользователя</th>
                    <th>@ Email</th>
                    <th>&#128386; Оставленные комментарии</th>
                    <th>&#10060; Удаление данных</th>
                </tr>
                <?php 
                    $results = mysqli_query($conn, "SELECT * FROM comments");
                    $results = mysqli_fetch_all($results);
                    foreach ($results as $results){
                ?>

                <tr>
                    <td><?=$results[0]?></td>
                    <td><?=$results[1]?></td>
                    <td><?=$results[2]?></td>
                    <td><?=$results[3]?></td>
                    <td><a style="color:red;" href="../admin/vender/delete2.php?id=<?=$results[0]?>">Удалить</a></td>
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