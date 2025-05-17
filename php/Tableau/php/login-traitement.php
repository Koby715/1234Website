<?php
session_start();

// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pprojet"; 

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Sécuriser les données reçues du formulaire
$email = htmlspecialchars(trim($_POST['email']));
$mot_de_passe = htmlspecialchars(trim($_POST['mot_de_passe']));

// Vérifier si email et mot de passe sont remplis
$errors = [];

if (empty($email)) {
    $errors[] = "L'email est requis.";
}
if (empty($mot_de_passe)) {
    $errors[] = "Le mot de passe est requis.";
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: login.php'); // retourne à ta page de connexion
    exit();
}

// Vérifier si l'utilisateur existe
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// S'il trouve un utilisateur
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Vérification du mot de passe
    if (password_verify($mot_de_passe, $user['mot_de_passe'])) {
        // Authentification réussie
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_email'] = $user['email'];

        // Rediriger vers index-tableau.php
        header('Location: index-tableau.php');
        exit();
    } else {
        $_SESSION['errors'] = ["Mot de passe incorrect."];
        header('Location: login.php');
        exit();
    }
} else {
    $_SESSION['errors'] = ["Aucun compte trouvé avec cet email."];
    header('Location: login.php');
    exit();
}

$conn->close();
?>
