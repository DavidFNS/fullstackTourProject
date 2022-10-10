<?php   
session_start(); 
  if (!isset($_SESSION['users']['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../log_in/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['users']['username']);
  	header("location: ../log_in/login.php");
  }
  
require_once "../connect_php/db.php";

error_reporting(0);

if (isset($_POST['submit'])){
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['comment'] = $_POST['comment'];
    $_SESSION['date'] = date (format: 'Y-m-d H:i:s');

    $sql = "INSERT INTO comments (id, name, email, comment, date) VALUES (NULL, '{$_SESSION['name']}', '{$_SESSION['email']}', '{$_SESSION['comment']}', current_timestamp())";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('Успешно отправлено!')</script>";
    } else {
        echo "<script>alert('Комментарий не отправлен')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Страница комментарии</title>
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
        <span> Комментарии</span>
        <p>Комментарии</p>
    </div>
    </div>

 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>

            
    <div class="wrapper">

    <form class="comment" action="../comments/comment.php" method="POST">     
        <div class="row1">
            <div class="input-group">
	            <input type="hidden" name="name" id="name" value="<?=$_SESSION['users']['username']?>" readonly>
            </div>
            <div class="input-group">
                <input type="hidden" name="email" id="email" value="<?=$_SESSION['users']['email']?>" readonly/>
  	        </div>
            <div class="input-group" textarea>
                <label for="comment">Сообщение</label>
	            <textarea id="comment" name="comment" required cols="30" rows="10"></textarea>
            </div>
            <div class="input-group">
                <input type="hidden" name="date" id="date"/>
  	        </div>
            <div class="input-group">
	            <button name="submit" class="btn">Отправить</button>
            </div> 
        </div> 
    </form>
    <div class="prev_comments" style="margin:20px auto">
                   
                    <?php 
                    $sql = "SELECT * FROM comments ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                        if ($numrows = mysqli_num_rows($result)) {
                    ?>
                     <h3 style="margin-bottom: 20px; width:1000px; text-align:center; ">Оставленные комментарии пользователей: <?php echo $numrows?></h3>
                    <?php 
                        }else{
                        ?>
                        <h3 style="margin-bottom: 20px; width:1000px; text-align:center; ">Оставленные комментарии пользователей: <?php echo $numrows?></h3>
                        <?php 
                        }
                    ?> 
        <?php 
        
        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
        <div class="single-item" style="padding: 20px 20px; margin:20px auto;">
            <h4>От пользователя: <span style="color: rgb(9, 84, 170)"> <?php echo $row['name'];?></span></h4>
            <span style="font-size:18px">✉ Email: <a style="color:rgb(9, 84, 170)" href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a></span>
            <p>📝 <?php echo $row['comment'];?></p>
            <p style="font-weight: bold;">⏲ <?php echo $row['date'];?></p>
        </div>     
        
        <?php

            }
        }
        ?>
        
    </div>
</div>



<?php require "../connect_php/footer.php"?>

</body>

</html>