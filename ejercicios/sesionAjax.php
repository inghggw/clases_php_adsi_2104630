<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

$email = $data['email'];
$password = $data['password'];

if ($email === 'a@a.co' && $password === '1234') {
  // CREAMOS SESION
  $_SESSION['email'] = $email;
  $_SESSION['id'] = random_int(1, 1000);

  echo json_encode(['redirect' => 'http://localhost:8888/clases_php_adsi_2104630/ejercicios/inicio.php']);
} else {
  $msg = "Las credenciales ingresadas no coinciden";
  echo json_encode(['msg' => $msg]);
}
?>





