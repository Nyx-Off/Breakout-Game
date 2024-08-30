<?php
header("Access-Control-Allow-Origin: * ");  // Remplacez * par le domaine spécifique si nécessaire
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "";
$username = ""; 
$password = "";
$dbname = "";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifier que les données POST existent et sont valides
if (isset($_POST['pseudo']) && isset($_POST['score'])) {
    $pseudo = $conn->real_escape_string($_POST['pseudo']);
    $score = (int)$_POST['score'];

    // Préparer la requête pour éviter les injections SQL
    $stmt = $conn->prepare("INSERT INTO scores (pseudo, score) VALUES (?, ?)");
    $stmt->bind_param("si", $pseudo, $score);

    // Exécuter la requête et vérifier le résultat
    if ($stmt->execute()) {
        echo "Nouveau score enregistré avec succès";
    } else {
        echo "Erreur: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Données manquantes ou invalides";
}

$conn->close();
?>
