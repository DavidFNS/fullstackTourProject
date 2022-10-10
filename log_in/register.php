<?php include('../log_in/server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <title>Регистрация</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <meta name="description" content=" My site!" />
    <link rel="shortcut icon" type="image /x-icon" href="favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.css" />
    <link rel="stylesheet" type="text/css" href="../scss/registr.css" />
    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>
</head>

<body>

<!--Баннер-->
<?php require "../connect_php/header.php"?>

    <div class="zagalovok">
	<div class="title">
        <span>Главная /</span>
        <span> Регистрация</span>
        <p>Регистрация</p>
	</div>
    </div>

 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>

 <form class="registr" method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Имя пользователя</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Подтверждение пароля</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Войти</button>
  	</div>
  	<p>
  	 <span>Уже участник?</span><a href="login.php"> Вход</a>
  	</p>
  </form>


 <!--Подвал--> 
 <?php require "../connect_php/footer.php"?>



</body>

</html>