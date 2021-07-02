<?php
session_start();
session_unset();
session_destroy();
header("Location: http://localhost:8888/clases_php_adsi_2104630/ejercicios/login.php");
?>
