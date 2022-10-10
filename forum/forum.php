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

error_reporting(0);

require_once "../connect_php/db.php";


if (isset($_POST['submit_forum'])){
    // $_SESSION['id'] = $_POST['id'];
    $_SESSION['user_id'] = $_POST['user_id'];
    $_SESSION['subject_id'] = $_POST['subject_id'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['comment'] = $_POST['comment'];
    $_SESSION['date'] = date (format: 'Y-m-d H:i:s');

    $sql = "INSERT INTO forum (user_id, subject_id, name, email, comment,date) VALUES ('{$_SESSION['user_id']}', '{$_SESSION['subject_id']}', '{$_SESSION['name']}', '{$_SESSION['email']}', '{$_SESSION['comment']}',  current_timestamp())";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('Успешно отправлено!')</script>";
    } else {
        echo "<script>alert('Комментарий не отправлен')</script>";
    }
}


if (isset($_POST['submit'])){
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['subject'] = $_POST['subject'];
    $_SESSION['author'] = $_POST['author'];

    $sql = "INSERT INTO forum_subject (`id`, `subject`, `author`) VALUES (NULL, '{$_SESSION['subject']}', '{$_SESSION['author']}')";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('Успешно создано!')</script>";
    } else {
        echo "<script>alert('Ошибка, проверьте данные')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Форум</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../scss/comment.css" />
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.css" />
    
    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>
</head>

<body>

<style>
    header{
        line-height: 1.3;
    }

    
footer {
    display: block;
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("../images/Airlines2.jpg") no-repeat center center;
    background-size: cover;
    padding: 8px 2px;
    left: 0;
    position: absolute;
    width: 100%;
    line-height: 2;
    z-index: 4;
}

footer h4 {
    color: #027585;
    font-size: 20px;
    margin-bottom: 20px;
}

footer .titles {
    margin: 15px 0;
    padding: 30px 0 0 0;
    z-index: 5;
}

footer .titles .links {
    width: 50%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
    justify-content: space-around;
}

footer .titles .links div {
    -ms-flex-preferred-size: 40%;
    flex-basis: 40%;
    padding: 10px;
}

footer p {
    text-align: center;
    font-weight: bold;
    font-size: 18px;
    line-height: 32px;
    color: #dedede;
    margin: 0;
    margin-top: 100px;
}

.links a {
    color: #dedede;
    display: block;
    font-size: 18px;
    margin: 5px 0;
    text-decoration: none;
}

.links a:hover {
    text-decoration: none;
    color: #65cf1f;
}

.links a::before {
    content: "\00BB";
    margin-right: 10px;
    color: #8cc34c;
}


/*karta*/

.right1 {
    position: absolute;
    right: 60px;
}
</style>
<!--Баннер-->
<?php require "../connect_php/header.php"?>

    
    <div class="zagalovok">
    <div class="title">
        <span>Главная /</span>
        <span> Форум</span>
        <p>Форум</p>
    </div>
    </div>

 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>
    

     
                <?php 
                    $sql = "SELECT * FROM forum_subject ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql);
                        if ($numrows = mysqli_num_rows($result)) {
                    ?>
                    
            <h4 style="font-size:34px; text-align: center; width: 600px; margin: 30px auto; font-family:'Courier New'; font-weight:bold; 
                        border-bottom:1px solid #49494b; color:brown">
                Темы нашего сообщества: <?php echo $numrows?>
            </h4>
            <?php 
                 }
            ?>
            <div class="block">
                <div class="block0">№</div>
                <div class="block1">Название темы</div>
                <div class="block2">Автор</div>
                <div class="block3">Дата создания</div>
                <div class="block5"></div>
            </div>
             <?php 
                $sql = "SELECT * FROM forum_subject";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
            ?>  
            <div class="blocks">
                <div class="block0"><?php echo $row['id'];?></div>
                <div class="block1"><?php echo $row['subject'];?></a></div>
                <div class="block2"><?php echo $row['author'];?></div>
                <div class="block3"><?php echo $row['date'];?></div> 
                <div class="block5"><a href="../forum/discussion.php?id=<?=$row['id']?>" target="_blanck">Перейти</a></div>
            </div>
                <?php        
                  }  
                   }    
                ?>
            <div class="submit">
                <a href="#" style="margin-bottom: 20px;" class="btn btn-primary buy" data-price="1170$" data-product="Тур 1" data-place="Отель 1">Добавить тему</a>
            </div>   
            

    <div class="wrapper">
        <h4 style="font-size:30px; text-align: center; width: 700px; margin: 0 auto; font-family:'Courier New'; font-weight:bold; 
                     border-bottom:1px solid #49494b; color:brown">
            Задать вопрос на форуме Узбекистан
        </h4>
        <form class="comment" action="" method="POST">     
            <div class="row1">
                <div class="input-group">
                    <input type="hidden" name="user_id" value="<?=$_SESSION['users']['user_id'];?>" readonly>           
                </div>
                <div class="input-group">   
                    <label label for="name">Выберите тему</label>    
                    <select name="subject_id" style="margin-bottom: 10px; width: 450px; margin-left:5px; border:1px solid; ;height:30px">
                        <optgroup label="№">
                            <?php 
                                $sql = "SELECT `subject`,`id` FROM forum_subject ";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <option  ><?=$row['id'];?> <?=$row['subject'];?></option>
                            <?php
                                }
                            }
                            ?>
                    </select>
                </div>
                <div class="input-group">
                    <input type="hidden" name="name" value="<?=$_SESSION['users']['username'];?>" id="name" readonly>
                </div>
                <div class="input-group">
                    <input type="hidden" name="email" value="<?=$_SESSION['users']['email'];?>" id="email" readonly/>
                </div> 
                <div class="input-group" textarea>
                    <label for="comment">Сообщение</label>
                    <textarea id="comment" name="comment" placeholder="Задайте свой вопрос" required cols="30" rows="5"></textarea>
                </div>
                <div class="input-group">
                    <button name="submit_forum" class="btn">Отправить</button>
                </div> 
            </div> 
        </form>
    </div>

    <div class="modal fade" id="cart" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Создание темы</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body">
                <form id="buy" method="post">
                    <div class="form_group">
                        <label for="subject">Название темы</label>
	                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Введите темы" required>
                    </div>
                    <div class="form_group">
                        <label for="name">Имя создателя</label>
                        <input type="text" name="author" id="author" class="form-control" placeholder="Введите имя" required/>
                    </div>             
                        <button type="submit" name="submit" class="btn btn-primary">Создать</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="../js/main.js"></script>


<?php require "../connect_php/footer.php"?>

</body>

</html>