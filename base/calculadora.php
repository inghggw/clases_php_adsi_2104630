<?php
require_once('functions.php');

$num1 = $_GET['n1'] ?? 0;
$num2 = $_GET['n2'] ?? 0;
$opc = $_GET['opc'] ?? 0;

function calculadora(int $n1, int $n2, string $opc)
{
  $res = '';

  switch ($opc) {
    case 's':
      $res = suma($n1, $n2);
      break;
    case '-':
      $res = resta($n1, $n2);
      break;
    case '*':
      $res = multiplica($n1, $n2);
      break;
    case '/':
      $res = divide($n1, $n2);
      break;
    default:
      $res = 'No eligió una operación válida!';
      break;
  }

  return "$n1 $opc $n2 = $res";
}

echo calculadora($num1, $num2, $opc);
