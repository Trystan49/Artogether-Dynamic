<?php
// paramètres de la BD (à customiser)
$server = "localhost";
$db = "artogether";
$user = "admin";
$passwdBdd = "1234";
// Fin de la déclaration des paramètres

// Cette partie est générique à l'ensemble de vos projets utilisant une base de données.
$dsn = "mysql:host=$server;dbname=$db";
$pdo = new PDO($dsn, $user, $passwdBdd);
try {
  $conn = new PDO($dsn, $user, $passwdBdd);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
