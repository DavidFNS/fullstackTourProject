<?php   
session_start(); 

  if (!isset($_SESSION['users']['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: log_in/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: log_in/login.php");
  }


require_once "../connect_php/db.php";

error_reporting(0);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Оплата заказа</title>
    <meta http-equiv="content-type" content="text/html: charset=utf-8" />
    <meta name="keywords" content="my site. My web-site" />
    <link rel="shortcut icon" type="image /x-icon" href="../favicon.ico" />
    <!--используется всегда,самый обязательный. Можно менят стиль на всех страницах-->
    <link rel="stylesheet" type="text/css" href="../scss/comment.css" />
    <link rel="stylesheet" type="text/css" href="../scss/tashkent.scss" />
    
    <link rel="stylesheet" type="text/css" href="../css/registr.css" />
    <script src="https://use.fontawesome.com/dd40fc69fc.js"></script>
</head>

<body>

<!--Баннер-->
<?php require "../connect_php/header.php"?>
 <div class="zagalovok">
 <div class="title">
        <span><a href="../index.php"> Главная /</a></span>
        <span><a href="../tours/tour1.php">Туры в Узбекистан </a></span>/
        <span><a href="../tours/update_tour_users.php">Управление бронированием </a></span>/
        <span><a href="../pay-online/pay-online.php">Оплата заказа</a></span>
        <p>Оплата заказа</p>
 </div>
    </div> 

   

    

    <form method="post" action="../pay-online/addTocarD.php" name="form">
        <div class="body__pay-online">
            <h4 style="font-size:20px; color:rgb(71, 15, 1);">Оплата банковской картой без комиссии</h4>
            <p style="font-size:18px; color:rgb(71, 15, 1);">Ввведите данные вашей банковской карты</p>
            <div class="card">
                <img src="../images/visa.png" alt="">
                <div id="pass-login" style="text-align:left;">
                    <div class="input-group">
                        <label>Номер карты</label>
                        <input type="text" name="input_card" name="input_card" id="cardcode" pattern="[0-9]{4}\s[0-9]{4}\s[0-9]{4}\s[0-9]{4}" 
                        placeholder="XXXX XXXX XXXX XXXX" required>
                        <input type=hidden name=number value="">
                    </div> 
                    <div class="input-group">
                        <label>Срок действия</label>
                        <input style="width: 220px;" type="month" name="input_date" id="input_date" required/>
                    </div> 
                    <div class="input-group">
                        <label>CVC/CVV</label>
                        <input type="password" style="width: 120px;" name="input_cvc" id="cardcvc" required/>
                        <input type=hidden name=number value="">
                    </div> 
                    <div class="submit_card">
                    <?php
                        $sql = "SELECT Sum((orders.price+orders.services) * orders.numb_seniors) + Sum((orders.price * orders.child_2) / 10) + Sum((orders.price * orders.child_12) / 2)

                                AS a FROM orders WHERE orders.user_id = '{$_SESSION['users']['user_id']}'";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $result1 = $row['a'];
                        ?>
                        <input type="submit" class="btn1" name="submit_enter" id="submit_enter" value="Оплатить <?=$result1?>₽" />
                        <?php
                            }
                        }      
                        ?>
                    </div>
                </div>
            </div>
            
        </div>
    </form>

              

    <script>
    let a=0;
    form.input_card.onkeypress=function(){
        if(a==4){
            a=0;
            form.input_card.value+=" ";
        }
        a++;
    }
    function no_space() {
        form.number.value+=form.input_card.value.substr(form.input_card.value.length-4,4);
    }

    for (var i in ['input', 'change', 'blur', 'keyup']) { cardcode.addEventListener('input', formatCardCode, false); 
    } 
    function formatCardCode() { 
        var cardCode = this.value.replace(/[^\d]/g, '').substring(0,16); 
        cardCode = cardCode != '' ? cardCode.match(/.{1,4}/g).join(' ') : ''; 
        this.value = cardCode; form.number.value=this.value.split(" ").join(""); } 
        
      
    function no_space1() {
        form.number.value+=form.input_cvc.value.substr(form.input_cvc.value.length-3,3);
    }

    for (var i in ['input', 'change', 'blur', 'keyup']) { cardcvc.addEventListener('input', formatCardCvc, false); 
    } 
    function formatCardCvc() { 
        var cardCvc = this.value.replace(/[^\d]/g, '').substring(0,3); 
        cardCvc = cardCvc != '' ? cardCvc.match(/.{1,3}/g).join(' ') : ''; 
        this.value = cardCvc; form.number.value=this.value.split(" ").join(""); } 
    </script>

<?php require "../connect_php/footer.php"?>

</body>

</html>