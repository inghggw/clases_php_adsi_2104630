<?php
require_once('User.php');

$id = random_int(1, 10000);
$user = new User($id);

$user->setName('Pepe');
$user->setLastname('Perez');

var_dump($user);
echo '<br><br>';
var_dump($user->getFullName());
echo '<br><br>';

//$user->id = 10;
$user->email = 'a@a.a';
var_dump($user);
echo '<br><br>';
?>