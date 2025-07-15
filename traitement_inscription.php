<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $mot_de_passe = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Vérification si l'email existe déjà
    $stmt = $pdo->prepare("SELECT id FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        echo "Cet email est déjà utilisé.";
        exit();
    }

    // Insertion dans la base
    $photo = 'default.png'; // ou ajouter un champ upload plus tard
    $stmt = $pdo->prepare("INSERT INTO utilisateurs (nom, email, mot_de_passe, photo) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $email, $mot_de_passe, $photo]);


    echo "Inscription réussie. <a href='index.php'>Connectez-vous ici</a>.";
}
?>
