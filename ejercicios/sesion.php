<?php
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if ($email === 'a@a.co' && $password === '1234') {
  // CREAMOS SESION
  $_SESSION['email'] = $email;
  $_SESSION['id'] = random_int(1, 1000);
  var_dump($_SESSION);
} else {
  $msg = "Las credenciales ingresadas no coinciden";
  $aPathOrigin = explode('?', $_SERVER['HTTP_REFERER']);
  $pathOrigin = $aPathOrigin[0];

  header("Location: $pathOrigin?msg=$msg");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
</head>
<body>
  <h1>Sesión iniciada</h1>
</body>
</html>
