<?php include('../log_in/server.php') ?>



<!DOCTYPE html>
<html>

<head>
    <title>Авторизация</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <meta name="description" content=" My site!" />
    <link rel="shortcut icon" type="image /x-icon" href="favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.scss" />
	<link rel="stylesheet" type="text/css" href="../scss/registr.css" />
    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>
</head>

<body>
<!--Баннер-->
    <header>
    <p class="admin"><img src="../images/admin.png"><a href="admin/login.php"> Вход для администратора</a></p>
        <div class="top_wrap">
            <div class="logo"><img src="https://uzbekistan.travel/themes/travel/assets/img/uzlogo_white.png" alt="" /></div>
            <div class="description">
            <p>Туристический информационный портал</p>
            
                <div class="contact">
                    <p>Электронная почта:<a href="https://mail.google.com/mail/u/1/#inbox"> david2408bek1997@gmail.com</a></p>
                    <p>По любым вопросам:<a href="tel:++998712000088"> +998 71 200 00 88</a></p>
                    <p>Наш адрес: ул. Айбека 18, Ташкент 100015
                        <p> Узбекистан</p>
                        <div class="soc_icons">
                        <p>Мы в социальных сетях:
                            <a href="https://vk.com"><i class="fa fa-vk"></i></a>
                            <a href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                            <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                            <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                        </p>
                    </div>

                </div>        
            </div>
        </div>
    </header>

    <div class="zagalovok">
    <div class="title">
        <span>Главная /</span>
        <span> Авторизация</span>
        <p>Авторизация</p>
    </div>
    </div>

 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>

 <form class="registr" method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Введите имя</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Введите пароль</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Войти</button>
  	</div>
  	<p>
  	<a href="../log_in/register.php">Зарегистрироваться</a>
  	</p>
  </form>
 


 <!--Подвал--> 
 <?php require "../connect_php/footer.php"?>



</body>

</html>