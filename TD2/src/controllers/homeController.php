<?php

$qr = $pdo->query('SELECT * FROM recipes');
$qr->execute();
$recipes = $qr->fetchAll(PDO::FETCH_ASSOC);

require_once('./views/home.php');
