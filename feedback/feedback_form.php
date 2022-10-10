<?php
include "../connect_php/db.php";

?>

<!DOCTYPE html>
<html>

<head>
    <title>Обратная связь</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.css" />
    <link rel="stylesheet" type="text/css" href="../scss/comment.css" />
    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>
</head>

<body>

<!--Баннер-->
<?php require "../connect_php/header.php"?>

    <div class="zagalovok">
    <div class="title">
        <span>Главная /</span>
        <span> Обратная связь</span>
        <p>Обратная связь</p>
    </div>
    </div>

 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>

<div class="wrapper">

    <form class="comment" action="../feedback/db_form_feedback.php" method="POST">
            <div class="input-group">
                <label for="name">Имя</label>
	            <input type="text" name="name" id="name" placeholder="Введите имя" required>
            </div>
            <div class="input-group">
  	            <label for="email">Email</label>
  	            <input type="email" name="email" id="email" placeholder="Введите Email" required>
  	        </div>
        <div class="input-group" textarea>
            <label for="comment">Сообщение</label>
	        <textarea name="comment" id="comment" required cols="30" rows="10"></textarea>
        </div>
        <div class="input-group">
	        <button value="submit" name="submit" class="btn">Отправить</button>
        </div>    
    </form>
</div>

<?php require "../connect_php/footer.php"?>


</body>

</html>