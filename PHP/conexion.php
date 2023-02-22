<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'Informacion acrediticia';

$conex = mysqli_connect($host, $user, $password, $db);

if (!$conex) {
     die("Error conexion " . mysqli_connect_error());
}
