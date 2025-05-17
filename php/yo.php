<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'pprojet');

if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}

// Infos de l'utilisateur à ajouter
$email = "roroange@yahoo.com"; // ← change par ton email
$mot_de_passe = "123456";     // ← change par ton mot de passe

// Hashage du mot de passe
$mot_de_passe_hache = password_hash($mot_de_passe, PASSWORD_DEFAULT);

// Insertion dans la base de données
$stmt = $mysqli->prepare("INSERT INTO users (email, mot_de_passe) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $mot_de_passe_hache);

if ($stmt->execute()) {
    echo "✅ Utilisateur ajouté avec succès !";
} else {
    echo "❌ Erreur : " . $stmt->error;
}

// Fermer la connexion
$stmt->close();
$mysqli->close();
?>
