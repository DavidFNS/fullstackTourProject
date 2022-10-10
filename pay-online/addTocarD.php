<?php
session_start();

require_once '../connect_php/db.php'; 

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: log_in/login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: log_in/login.php");
}


$card = filter_var(trim($_POST['input_card']),FILTER_SANITIZE_STRING);
$cvc = filter_var(trim($_POST['input_cvc']),FILTER_SANITIZE_STRING);
$date = filter_var(trim($_POST['input_date']),FILTER_SANITIZE_STRING);
$right_now = date("Y-m");

if (!$card || !$cvc || !$date){
    echo 'Вы ввели не все необходимые сведения!
    <a href="cart.php"> Перейти на страницу корзины</a>';
}else{

$result4 = mysqli_query($conn, "SELECT number_card, cvc, date FROM pay_online WHERE number_card='$card' and cvc = '$cvc' and date = '$date'");
if (mysqli_num_rows($result4) > 0){
$result1 = mysqli_query($conn, "SELECT pay_online.id_users, pay_online.cvc, orders.user_id, Sum(orders.price+orders.services) AS a FROM pay_online, orders WHERE pay_online.id_users = '{$_SESSION['users']['user_id']}' and pay_online.cvc = '$cvc' and orders.user_id = '{$_SESSION['users']['user_id']}'");
if (strtotime($date) > strtotime($right_now)){
if (mysqli_num_rows($result1) > 0) {
    $row = mysqli_fetch_array($result1);
    $total['price'] = $row['a'];
    if ($row["money"] >= $total['price'] && $row["money"] > '0') {
        $mon = $row["money"] - $total['price'] ;
        $row = mysqli_query($conn, "UPDATE pay_online SET money = '$mon' where  pay_online.id_users = '{$_SESSION['users']['user_id']}'and pay_online.cvc = '$cvc'");
        echo '<p>Поздравляем! Оплата прошла успешно</p>
        <a href="../index.php">Вернуться на главную страницу</a>
        ';
        $result2 = mysqli_query($conn, "SELECT balance_admin.id_admin, orders.user_id, Sum(orders.price+orders.services) AS a FROM balance_admin, orders WHERE balance_admin.id_admin = '1' and orders.user_id = '{$_SESSION['users']['user_id']}'");
        if (mysqli_num_rows($result2) > 0) {
            $row = mysqli_fetch_array($result2);
            $total['price'] = $row['a'];
            $monn = $row["money"] + $total['price'];
            $row = mysqli_query($conn, "UPDATE balance_admin SET money = '$monn' where  balance_admin.id_admin = '1'");
        }

    } else {
        echo '<p><center>Не хватает денег</center></p>
        <a href="../pay-online/pay-online.php"> Вернуться назад</a> 
        ';
    }
}
} else {
    echo '<p><center>Срок использования карты истек</center></p>
        <a href="../pay-online/pay-online.php"> Вернуться назад</a>';
}



} else {
    if (strtotime($date) > strtotime($right_now)) {
        $riv = mysqli_query($conn, "INSERT INTO pay_online values(NULL, '{$_SESSION['users']['user_id']}', '$card', '$date', '$cvc')");


        $result5 = mysqli_query($conn, "SELECT pay_online.id_users, pay_online.cvc, pay_online.money, orders.user_id, Sum(orders.price+orders.services) AS a FROM pay_online,orders WHERE pay_online.id_users = '{$_SESSION['users']['user_id']}' and pay_online.cvc = '$cvc' and orders.user_id = '{$_SESSION['users']['user_id']}'");
        if (mysqli_num_rows($result5) > 0) {
            $row = mysqli_fetch_array($result5);
            $total['price'] = $row['a'];
            if ($row["money"] >= $total['price']) {
                $monnn = $row["money"] - $total['price'];
                $row = mysqli_query($conn, "UPDATE pay_online SET money = '$monnn' where  pay_online.id_users = '{$_SESSION['users']['user_id']}'and pay_online.cvc = '$cvc'");
                $results = $row;
                if ($results) {
                    echo "<script>alert('Уважаемый пользователь, поздравляем! Оплата прошла успешно!')</script>";
                } 
                echo '
                </html><!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta name="keywords" content="my site. My web-site" />
                    <meta name="description" content=" My site!" />
                    <link rel="shortcut icon" type="image /x-icon" href="../../favicon.ico" />
                    <link rel="stylesheet" type="text/css" href="../scss/style.css" />
                    <link rel="stylesheet" type="text/css" href="../scss/registr.css" />
                    <title>Сообщение об успешной оплате</title>
                </head>
                <body>
                   
                <form class="comment" action="" method="POST">     
                    <div class="row1">
                        <div class="input-group">
                            
                            <a href="../pay-online/pay-online.php" style="font-size: 24px; margin-left: 20px; text-decoration:none">Вернуться назад</a>
                        </div> 
                    </div> 
                </form>
                
                </body>
                </html>';
                $result6 = mysqli_query($conn, "SELECT balance_admin.id_admin, balance_admin.money, orders.user_id, Sum(orders.price+orders.services) AS a FROM balance_admin, orders WHERE balance_admin.id_admin = '1' and orders.user_id = '{$_SESSION['users']['user_id']}'");
                if (mysqli_num_rows($result6) > 0) {
                    $row = mysqli_fetch_array($result6);
                    $total['price'] = $row['a'];
                    $monnnn = $row["money"] + $total['price'];
                    $row = mysqli_query($conn, "UPDATE balance_admin SET money = '$monnnn' where  balance_admin.id_admin = '1'");

                }

            } else {
                echo "<script>alert('У вас на счете не хватает денег, пожалуйста пополните свой баланс!')</script>";
            }
        }
    }
    else {
        echo "<script>alert('Срок использования карты истек!')</script>";
    }



}

}


