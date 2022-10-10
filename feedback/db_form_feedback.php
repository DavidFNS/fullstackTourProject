<?php
require_once "../connect_php/db.php";

 $name = $_POST['name'];
 $email = $_POST['email'];
 $comment = $_POST['comment'];


$name = htmlspecialchars($name); // преобразование символов в сущности(мнемоники)
$email = htmlspecialchars($email);
$comment = htmlspecialchars($comment);

$name = urldecode($name);  // декодировариние URL
$email = urldecode($email);
$comment = urldecode($comment);

$name = trim($name);  //удаление пробельных символов с обоих сторон
$email = trim($email);
$comment = trim($comment);

if(mail("davidbek240897@gmail.com",
        "Новое письмо с портала TRAVEL-UZBEKISTAN $email",
        "Имя пользователя: ".$name."\n".
        "Email: ".$email."\n".
        "Письмо: ".$comment,
        "from: @gmail.com \r\n")   
    ) {
        echo ('Письмо успешно отправлено на почту!');
    }
    else {
        echo ('Произошла ошибка, проверьте данные!');
    }

if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];
    
        $sql = "INSERT INTO feedback (name, email, comment) VALUES ('$name', '$email', '$comment')";
    
        $result = mysqli_query($conn,$sql);
        if ($result) {
            echo "<script>alert('Письмо успешно отправлено на почту!')</script>";
        } else {
            echo "<script>alert('Комментарий не отправлен')</script>";
        }
    }
?>

