<?php
try {
  $host = "db";
  $dbname = "monmvc";
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 'root', 'rootpwd');
}
catch (PDOException $e) {
  echo 'Erreur : ' . $e->getMessage();
  die();
}
