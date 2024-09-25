<?php

try {
  $host = getenv("DB_HOST");
  $dbname = getenv("DB_DATABASE");
  $username = getenv("DB_USERNAME");
  $password = getenv("DB_PASSWORD");
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
}
catch (PDOException $e) {
  echo 'Erreur : ' . $e->getMessage();
  die();
}
