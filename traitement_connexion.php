<?php
session_start();
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les champs du formulaire
    $email = trim($_POST['email']);
    $mot_de_passe = $_POST['password'];

    // Vérification de l'existence de l'utilisateur
    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    $utilisateur = $stmt->fetch();

    if ($utilisateur) {
        // Vérification du mot de passe
        if (password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
            // Connexion réussie → démarrer la session
            $_SESSION['user_id'] = $utilisateur['id'];
            $_SESSION['user_nom'] = $utilisateur['nom'];
            $_SESSION['user_photo'] = $utilisateur['photo'];


            // Redirection vers une page protégée
            header("Location:index.php");
            exit();
        } else {
            // Mot de passe incorrect
            echo "<script>alert('Mot de passe incorrect'); window.history.back();</script>";
        }
    } else {
        // Utilisateur non trouvé
        echo "<script>alert('Aucun compte trouvé avec cet email'); window.history.back();</script>";
    }
} else {
    // Si accès direct sans POST
    header("Location: index.php");
    exit();
}
?>
