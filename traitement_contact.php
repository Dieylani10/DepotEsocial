<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure automatiquement les classes via Composer
require 'vendor/autoload.php';

// Vérification du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));

    if (empty($nom) || empty($email) || empty($message)) {
        $erreur = "Veuillez remplir tous les champs.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreur = "Adresse email invalide.";
    } else {
        $mail = new PHPMailer(true);

        try {
            // Configuration SMTP Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'zolembadji@gmail.com';           //  Ton adresse Gmail
            $mail->Password = 'Utbnl@5469';        //  Mot de passe d'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Expéditeur & destinataire
            $mail->setFrom($email, $nom);
            $mail->addAddress('zolembadji@gmail.com', 'E-SOCIAL'); //  L’adresse qui reçoit

            // Contenu du mail
            $mail->isHTML(true);
            $mail->Subject = ' Nouveau message depuis E-SOCIAL';
            $mail->Body    = "
                <strong>Nom :</strong> $nom<br>
                <strong>Email :</strong> $email<br><br>
                <strong>Message :</strong><br>" . nl2br($message);

            $mail->AltBody = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            $success = " Message envoyé avec succès. Merci !";
        } catch (Exception $e) {
            $erreur = "Erreur : le message n'a pas pu être envoyé. Mailer Error : " . $mail->ErrorInfo;
        }
    }
} else {
    header("Location: a_propos.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact - E-SOCIAL</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>

<main style="max-width: 800px; margin: 100px auto; text-align: center; padding: 0 20px;">
  <?php if (isset($success)): ?>
    <h2 style="color: #00cc99;"><?php echo $success; ?></h2>
  <?php else: ?>
    <h2 style="color: red;"><?php echo $erreur ?? "Une erreur est survenue."; ?></h2>
  <?php endif; ?>

  <a href="a_propos.php" style="display: inline-block; margin-top: 30px; text-decoration: none; color: #00cc99;">⬅️ Retour à la page À propos</a>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
