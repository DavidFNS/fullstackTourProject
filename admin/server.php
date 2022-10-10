<?php
session_start();

// initializing variables
$userAdmin = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'my_site');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $userAdmin = mysqli_real_escape_string($db, $_POST['userAdmin']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($userAdmin)) { array_push($errors, "Требуется имя пользователя"); }
  if (empty($email)) { array_push($errors, "Требуется Email"); }
  if (empty($password_1)) { array_push($errors, "Требуется пароля"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Пароли не совпадают");
  }

  // first check the database to make sure 
  // a user does not already exist with the same userAdmin and/or email
  $user_check_query = "SELECT * FROM admin WHERE userAdmin='$userAdmin' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['userAdmin'] === $userAdmin) {
      array_push($errors, "Имя пользователя уже существует");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email уже существует");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO admin (userAdmin, email, password) 
  			  VALUES('$userAdmin', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['userAdmin'] = $userAdmin;
  	$_SESSION['success'] = "Вы вошли в систему";
  	header('location: ../admin/index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $userAdmin = mysqli_real_escape_string($db, $_POST['userAdmin']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($userAdmin)) {
  	array_push($errors, "Требуется имя пользователя");
  }
  if (empty($password)) {
  	array_push($errors, "Требуется пароля");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM admin WHERE userAdmin='$userAdmin' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
      
      $admins = (mysqli_fetch_assoc($results));
      $_SESSION['admins'] = [
        "id" => $admins['id'],
        "userAdmin" => $admins['userAdmin'],
        "email" => $admins['email'],    
        "password" => $admins['password']
      ];

  	  $_SESSION['userAdmin'] = $userAdmin;
  	  $_SESSION['success'] = "Добро пожаловать! Вы вошли в систему";
  	  header('location: ../admin/index.php');
  	}else {
  		array_push($errors, "Неправильная имени пользователя и пароля");
  	}
  }
}

?>