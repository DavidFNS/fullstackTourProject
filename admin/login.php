<?php include('../admin/server.php') ?>



<!DOCTYPE html>
<html>

<head>
    <title>Авторизация / Вход для администратора</title>
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
<style>
	html,body {
        background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url("../images/background2.png");
        background-size:cover;
        background-attachment: fixed;
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

    <div class="zagalovok" style="width: 1200px;">
    <div class="title">
    <span><a href="../index.php">Главная страница /</a></span>
        <span><a href="../admin/login.php">Вход для администратора </a></span>
        <p>Вход для администратора</p>
    </div>
        
    </div>


 <form class="registr" method="post" action="../admin/login.php">
  	<?php include('../admin/errors.php'); ?>
  	<div class="input-group">
  		<label>Логин</label>
  		<input type="text" name="userAdmin" >
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Войти</button>
  	</div>

<!--
	<p>
  	<a href="../admin/register.php">Зарегистрироваться</a>
  	</p>
-->
  </form>
  </br>


</body>

</html>