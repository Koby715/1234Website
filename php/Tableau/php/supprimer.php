<?php
// Connexion à la base de données
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pprojet";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

if (isset($_GET['identifiant'])) {
    $id = intval($_GET['identifiant']);

    $sql = "DELETE FROM utilisateurs WHERE identifiant = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: index-tableau.php');
        exit();
    } else {
        echo "Erreur lors de la suppression.";
    }

    $stmt->close();
} else {
    echo "ID non spécifié.";
}

$conn->close();
?>
