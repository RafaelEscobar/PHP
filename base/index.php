<?php
require_once('User.php');

$id = random_int(1, 10000);
$user = new User($id);
$user->setName('Pepe');
$user->setLastName('Gonzales');

var_dump($user);
echo '<br><br>';

echo $user->getFullName();