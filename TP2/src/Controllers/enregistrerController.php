<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Libs/PHPMailer/Exception.php';
require 'Libs/PHPMailer/PHPMailer.php';
require 'Libs/PHPMailer/SMTP.php';

if (!isset($_POST['titre']) || !isset($_POST['description']) || !isset($_POST['auteur'])) {
  echo "La recette n'a pas été correctement envoyée";
  return;
}

$titre = $_POST['titre'];
$description = $_POST['description'];
$auteur = $_POST['auteur'];
$type = $_POST['type']; // recette ou contact

if ($type == 'recette') {
  $query = $pdo->prepare('INSERT INTO recettes (titre, description, auteur, date_creation) VALUES (:titre, :description, :auteur, NOW())');
}
else if ($type == 'contact') {
  $mail = new PHPMailer(true);

  try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = getenv("SMTP_HOST");
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv("SMTP_USERNAME");
    $mail->Password   = getenv("SMTP_PASSWORD");
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Recipients
    $mail->setFrom(getenv("SMTP_USERNAME"), 'lacosina');
    $mail->addAddress(getenv("SMTP_DESTINATION"), getenv("SMTP_DESTINATION_NAME"));

    // Content
    $mail->isHTML(false);
    $mail->Subject = "Contact de l'utilisateur '$titre'";
    $mail->Body = $description . "\n\n---\nMessage venant de '" . $auteur . "'";

    $mail->send();
  } catch (Exception $e) {
    echo "Le message n'a pas été envoyé: {$mail->ErrorInfo}";
    return;
  }

  $query = $pdo->prepare('INSERT INTO contacts (titre, description, auteur, date_creation) VALUES (:titre, :description, :auteur, NOW())');
}
else {
  echo "Type de recette inconnu";
  return;
}

$query->bindValue(':titre', $titre, PDO::PARAM_STR);
$query->bindValue(':description', $description, PDO::PARAM_STR);
$query->bindValue(':auteur', $auteur, PDO::PARAM_STR);
$ok = $query->execute();

if ($ok) {
  require_once 'Views/enregistrer.php';
}
else echo "Erreur lors de l'enregistrement";
