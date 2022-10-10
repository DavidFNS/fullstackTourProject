<?php   
session_start(); 

require_once "../connect_php/db.php";

error_reporting(0);


if (isset($_POST['submit_replies'])){
    $_SESSION['user_id'] = $_POST['user_id'];
    $_SESSION['subject_id'] = $_POST['subject_id'];
    $_SESSION['forum_id'] = $_POST['forum_id'];
    $_SESSION['toWhom'] = $_POST['toWhom'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['comment'] = $_POST['comment'];
    $_SESSION['date'] = date (format: 'Y-m-d H:i:s');

    $sql = "INSERT INTO forum_replies (user_id, subject_id, forum_id, toWhom, name, email,  comment, date) VALUES ('{$_SESSION['user_id']}', '{$_SESSION['subject_id']}', '{$_SESSION['forum_id']}', '{$_SESSION['toWhom']}', '{$_SESSION['name']}', '{$_SESSION['email']}', '{$_SESSION['comment']}', current_timestamp())";

    $result = mysqli_query($conn,$sql);
    if ($result) {
        echo "<script>alert('Ответ успешно отправлено!')</script>";
    } else {
        echo "<script>alert('Ошибка, проверьте данные!')</script>";
    }
}

$results_id = $_GET['id'];
$results = mysqli_query($conn, query: "SELECT * FROM forum_subject WHERE id = '$results_id' ");
$result_subject = mysqli_fetch_assoc($results);


?>
<!DOCTYPE html>
<html>

<head>
    <title>Обсуждение</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.scss" />
    <link rel="stylesheet" type="text/css" href="../scss/comment.scss" />
  
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



    <div class="zagalovok1">
    <div class="title">
        <span><a href="../index.php">Главная </a></span>/
        <span><a href="../forum/forum.php">Форум </a></span>/
        <span>Обсуждение</span>
        <p>Обсуждение</p>
    </div>
    </div>

 <!--Меню-->   
 <?php require "../connect_php/container_menu.php"?>
        
    <div class="content">
    <div class="prev_comments" >
    <?php  
                    $results_id = $_GET['id'];
                    $sql = "SELECT * From forum where subject_id = '$results_id' ORDER BY forum.id DESC LIMIT 1";
                    $result = mysqli_query($conn, $sql);
                
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
        <div class="single-item">
            <div class="number" style="font-size: 16px; font-weight:bold;">Номер вопроса #<?php echo $row['id'];?></div>
            <h4>От пользователя: <span style="color: rgb(9, 84, 170)"> <?php echo $row['name'];?></span></h4>
            <span style="font-size:18px">✉ Email: <a style="color:rgb(9, 84, 170)" href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a></span>
            <p>📝 <?php echo $row['comment'];?></p>
            <p style="font-weight: bold;">⏲ <?php echo $row['date'];?></p>
            <div class="submit" >
                <a style="height: 30px; padding: 3px 6px;" href="#" class="btn btn-primary buy" >Ответить</a>
            </div> 
        </div>  
        <?php
                }
            }
            ?>
    </div>
    <div style="width:1000px" class="prev_comments1">
                <?php  
                    $results_id = $_GET['id'];
                    $sql = "SELECT * FROM forum_replies where subject_id = '$results_id' ";
                    $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="single-item">
                <div class="number" style="font-size: 16px; font-weight:bold;">Номер ответа #<?php echo $row['id'];?></div>
                
                <h4>От пользователя:<span style="color: rgb(9, 84, 170)"> <?php echo $row['name'];?></span></h4>
                <span style="font-size:18px">✉ Email: <a style="color:rgb(9, 84, 170);" href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a></span>
                <p><span style="font-size:18px; font-weight:bold"> &#8618; Ответ пользователю </span><span style="color:rgb(9, 84, 170); font-weight:bold"><?php echo $row['toWhom'];?>, </span><?php echo $row['comment'];?></p>
                <p style="font-weight: bold; font-size:16px">⏲ <?php echo $row['date'];?></p>
                <div class="submit">
                <a style="height: 30px; padding: 3px 6px;" href="#" class="btn btn-primary buy">Ответить</a>
                </div> 
            </div>     
            <?php
                }
            }
            ?>
    </div>
    </div>
    


    <div class="modal fade" id="cart" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ответ</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>   
                <div class="modal-body">
                <form id="buy" method="post">
                <div class="input-group">
                    <input type="hidden" name="user_id" value="<?=$_SESSION['users']['user_id'];?>" readonly>           
                </div>
                <div class="input-group">
                    <input type="hidden" name="subject_id" value="<?=$result_subject['id'];?>" readonly>           
                </div>
                    <div class="input-group" >   
                        <label label for="name">Номер вопроса</label>    
                        <select style="margin-bottom: 10px; width: 450px; margin-left: 15px; border:1px solid #b4b7b8; height:30px" name="forum_id">
                            <optgroup label="№">
                                <?php 
                                    $sql = "SELECT `id` FROM forum ";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option><?=$row['id'];?></option>
                                <?php
                                    }
                                }
                                ?>
                        </select>
                    </div>
                    <div class="input-group">   
                        <label label for="name">Кому</label>    
                        <select name="toWhom" style="margin-bottom: 10px; width: 450px; margin-left: 15px; border:1px solid #b4b7b8; height:30px">
                            <optgroup label="Кому отправить">
                                <?php 
                                    $sql = "SELECT `username` FROM users ";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <option><?=$row['username'];?></option>
                                <?php
                                    }
                                }
                                ?>
                        </select>
                    </div>
                    <div class="form_group">
	                    <input type="hidden" name="name" value="<?=$_SESSION['users']['username'];?>" id="name" class="form-control" readonly>
                    </div>
                    <div class="form_group">
                        <input type="hidden" name="email" value="<?=$_SESSION['users']['email'];?>" id="email" class="form-control" readonly/>
  	                </div>
                    <div class="form_group" textarea>
                        <label for="comment">Сообщение</label>
	                    <textarea style="max-width: 450px;" id="comment" name="comment" required class="form-control" cols="30" rows="10"></textarea>
                    </div>
                            <button type="submit" name="submit_replies" class="btn btn-primary" style="margin:0 190px;">Отправить</button>                        
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