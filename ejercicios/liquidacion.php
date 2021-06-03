<?php
require_once('../base/functions.php');

$salario = $_GET['salario'] ?? '';
$cedula = $_GET['cedula'] ?? '';
$salud = $pension = $arl = $fps = 0;

if ($salario) {
  $salud = deducible($salario, 'salud');
  $pension = deducible($salario, 'pension');
  $arl = deducible($salario, 'arl');
  $fps = deducible($salario, 'fps');
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
    <input type="number" name="salario" required>
    <br>
    <label>Cédula</label>
    <input type="number" name="cedula" required>
    <br>
    <input type="submit" value="Enviar">
  </form>

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

  </table>
</body>
</html>