<?php
session_start(); // Toujours démarrer la session pour utiliser $_SESSION

// Connexion à la base
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pprojet";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Sécuriser les données
$nom = htmlspecialchars(trim($_POST['nom']));
$mail = htmlspecialchars($_POST['mail']);
$objet = htmlspecialchars($_POST['objet']);
$contact = htmlspecialchars($_POST['contact']);
$commentaire = htmlspecialchars($_POST['commentaire']);

// Validation
$errors = [];

if (empty($nom) || strlen($nom) < 3)  {
  $errors[] = "Le nom est requis et doit contenir au moins 3 caractères.";
}
if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email invalide.";
}
if (empty($objet)) {
    $errors[] = "L'objet est requis.";
}
if (!preg_match('/^[0-9]{10}$/', $contact)) {
    $errors[] = "Le contact doit être un numéro à 10 chiffres.";
}
if (empty($commentaire)) {
    $errors[] = "Le commentaire est requis.";
}

// Si erreurs
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
} else {
    // Insertion
    $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, mail, objet, contact, commentaire) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nom, $mail, $objet, $contact, $commentaire);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Votre message a été envoyé avec succès !";
    } else {
        $_SESSION['errors'] = ["Erreur lors de l'envoi du message."];
    }

    $stmt->close();
}

$conn->close();

// Rediriger vers index.php
header("Location: ../php/index.php#footer");
exit();
