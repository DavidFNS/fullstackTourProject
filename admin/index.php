<?php 
  session_start(); 

  if (!isset($_SESSION['userAdmin'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: admin/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['userAdmin']);
  	header("location: admin/login.php");
  }

  require_once "../admin/db.php";

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
    <title>Панель администратора</title>
</head>
<body>
    <header>
        <div class="top_wrap">
            <div class="logo"><img src="https://uzbekistan.travel/themes/travel/assets/img/uzlogo_white.png" alt="" /></div>
            <div class="description">
                <p>Туристический информационный портал</p>    
                <div class="panel"><p>Панель управления администратора</div>    
            </div>
            
        </div>
    </header>

<div class="content1">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['userAdmin'])) : ?>
    	<p>Администратор: <strong><?php echo $_SESSION['userAdmin']; ?></strong></p>
    	<div class="log_of">
            <a href="../admin/login.php" style="color: red;">Выйти</a> 
        </div> 
            
    <?php endif ?>
    </div>

        <div class="сontent1">
            <div class="menu1" style="width:350px; top: -30px;">
                <nav>
                    <ul>
                        <li><a href="../admin/users.php">Список пользователей</a></li>
                        <li><a href="../admin/bron.php">Управление бронированием</a></li>
                        <li><a href="../admin/comment.php">Управление комментариями</a>
                        <li><a href="../admin/forum.php">Управление форумом</a>
                    </ul>
                </nav>
                
            </div>
            <div class="menu1" style="color: white; top: 40px; left:40px; width: 250px; height: 120px; text-align: center;">
                <h3>Количество пользователей</h3>
                    <?php 
                    $sql = "SELECT * FROM users ORDER BY user_id DESC";
                    $result = mysqli_query($conn, $sql);
                        if ($numrows = mysqli_num_rows($result)) {
                    ?>
                    <p style="font-size: 25px; color:aqua"><?php echo $numrows?></p>
                    <?php 
                        }
                    ?>

                <div class="menu2" style="top: 30px; right:80px; width: 520px; height: 100px;">
                    <img src="../images/visa1.png" alt="">
                        <div class="menu3" style="width: 350px; height: 60px;">
                            <?php 
                            $sql = "SELECT * FROM balance_admin where id_admin = '1'";
                            $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {    
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    
                            ?>  <div class="block">
                                <p style="font-size: 22px;">Visa Classic</p>
                                <p style="font-size: 20px; color: rgb(12, 112, 17);" ><?php echo $row['money'];?> ₽</p>
                                </div>
                                <p style="margin-top: -10px;font-size: 18px;"><?php echo $row['number_card'];?></p>
                                
                            <?php
                                }
                            }
                            ?>
                         </div>
                </div>
            </div>
            <div class="menu1" style="color: white; bottom:173px; width: 220px; height: 120px; text-align: center;">
                <h3 style="margin-bottom: 50px;">Количество заказов</h3>
                <?php 
                    $sql = "SELECT * FROM orders ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                        if ($numrows = mysqli_num_rows($result)) {
                    ?>
                    <p style="font-size: 25px; color:aqua"><?php echo $numrows?></p>
                    <?php 
                        }
                    ?>
            </div>
        </div>
        
        
    
    

</body>
</html>