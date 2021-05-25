<?php
$limit = 20;

for ($i=0; $i <= $limit; $i++) {
  echo 'El conteo va en ' . $i . '<br>';
}

$a = 5;
while ($a <= $limit) {
  $a = $a * 2;
  echo "a es $a <br>";
}

// MOSTRAR NÚMEROS PARES E IMPARES DESDE EL 0 HASTA EL 100
$inc = 1;
while ($inc <= 100) {
  $num = "El número $inc es";

  if ($inc % 2 === 0) {
    echo "$num par";
  } else {
    echo "$num impar";
  }
  echo '<br>';

  $inc++;
}

$motos = [
  'Vstrom 650xt',
  'Akt 125',
  'CBR 250R',
  'R1M',
];

foreach ($motos as $key => $value) {
  echo "Llave: $key y Valor: $value <br>";
}

echo '<br>';

$autos = [
  'Mazda' => [
    'CX5',
    '323',
    'CX7',
    '2',
  ],
  'BMW' => [
    'Serie 2',
    'Z4',
    'M1',
  ]
];
var_dump($autos);
echo '<br>';

foreach ($autos as $marca => $modelos) {
  echo "En la marca $marca tenemos los modelos: ";

  foreach ($modelos as $key => $modelo) {
    echo "$modelo, ";
  }

  echo '<br>';
}

?>
