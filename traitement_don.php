<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $montant = (float) $_POST['montant'];

    // Ici tu peux stocker dans une base ou envoyer par email
    echo "<script>alert('Merci $nom pour votre don de $montant Fcfa !'); window.location='campagne.php';</script>";
}
?>
