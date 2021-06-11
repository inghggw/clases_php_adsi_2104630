<?php
require_once('../base/functions.php');

$salario = $_GET['salario'] ?? '';
$salario = intval($salario);
$cedula = $_GET['cedula'] ?? '';
$salud = $pension = $arl = $fps = 0;
$errorSalario = '';

if ($salario && $cedula) {
  $salud = deducible($salario, 'salud');
  $pension = deducible($salario, 'pension');
  $arl = deducible($salario, 'arl');
  $fps = deducible($salario, 'fps');
}

if (isset($_GET['salario']) && !$_GET['salario']) {
  $errorSalario = 'Debe ingresar un salario';
}

if (isset($_GET['salario']) && $_GET['salario'] && !$salario) {
  $errorSalario = 'Debe ingresar un número mayor a 0';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liquidación</title>
</head>
<body>
  <form action="">
    <label>Salario</label>
    <input type="number" name="salario">
    <label style="color:red"><?php echo $errorSalario ?></label>
    <br>
    <label>Cédula</label>
    <input type="number" name="cedula">
    <?php
      if (isset($_GET['cedula']) && !$_GET['cedula']) {
        echo '<label style="color:red">Debe ingresar un cédula</label>';
      }
    ?>
    <br>
    <input type="submit" value="Enviar">
  </form>

  <?php
  if ($salario && $cedula) {
  ?>
  <table border="1">
  <tr>
    <th>Cédula</th>
    <th>Salario</th>
    <th>Salud (4%)</th>
    <th>Pensión (4%)</th>
    <th>ARL (0.5%)</th>
    <th>Fondo Pensión Solidario (1% > 4 SMLV)</th>
  </tr>
  <tr>
    <td><?php echo $cedula; ?></td>
    <td><?php echo $salario; ?></td>
    <td><?php echo $salud; ?></td>
    <td><?php echo $pension; ?></td>
    <td><?php echo $arl; ?></td>
    <td><?php echo $fps; ?></td>
  </tr>
  <?php
  }
  ?>

  </table>
</body>
</html>