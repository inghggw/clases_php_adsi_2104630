<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
echo json_encode(['email' => $email, 'password' => $password]);
exit;

if ($email === 'a@a.co' && $password === '1234') {
  // CREAMOS SESION
  $_SESSION['email'] = $email;
  $_SESSION['id'] = random_int(1, 1000);
  header("Location: http://localhost:8888/clases_php_adsi_2104630/ejercicios/inicio.php");
} else {
  $msg = "Las credenciales ingresadas no coinciden";
  $aPathOrigin = explode('?', $_SERVER['HTTP_REFERER']);
  $pathOrigin = $aPathOrigin[0];
  
  // echo json_encode(['msg' => 'Datos incorrectos!']);
  header("Location: $pathOrigin?msg=$msg");
}
?>





