<?php
$x = 10;
$y = '10';

if ($x == $y) {
  echo 'son iguales';
}

echo PHP_EOL;

if ($x === $y) {
  echo 'son identicos';
} else {
  echo 'NO son identicos';
}

echo PHP_EOL;

if ($x != $y) {
  echo 'Si son diferentes';
}

if ($x !== $y) {
  echo 'Si son diferentes de identicos';
}

echo PHP_EOL;

if ($x > $y) {
  echo "$x es mayor que $y";
} else if ($x < $y) {
  echo "$x es menor que $y";
} else if ($x == $y) {
  echo "$x es igual que $y";
} else {
  echo "ninguna de las anteriores";
}

echo PHP_EOL;

if ( ($x == $y) && ($x > 0) ) {
  echo "$x es igual a $y y $x es mayor que 0";
}

echo PHP_EOL;

if ( ($x == $y) || ($x === $y) ) {
  echo "$x es igual a $y ó $x es identico que $y";
}

echo '<br>';

switch ($x) {
  case '10':
    echo 'Es un 10';
    break;

  case '20':
    echo 'Es un 20';
    break;

  default:
    echo  'Nada';
    break;
}

?>