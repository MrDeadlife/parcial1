<?php

$server = '10.128.0.10';
$username = 'usuario_replicacion';
$password = 'kevin';
$database = 'crud1';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
