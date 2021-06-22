<?php
$salario = $_GET['salario'] ?? '';
$errorSalario = $_GET['errorSalario'] ?? '';
$salud = $_GET['salud'] ?? '';
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
  <form action="liquidacionActions.php" method="POST">
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