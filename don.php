<?php
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $montant = htmlspecialchars($_POST['montant'] ?? '');

    $conn = new mysqli("localhost", "root", "", "esocial_db");

    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO dons (nom, email, montant) VALUES (?, ?, ?)");
    $stmt->bind_param("ssd", $nom, $email, $montant);

    if ($stmt->execute()) {
        $success = true;
    } else {
        $error_message = "Erreur: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faire un Don</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body { font-family: sans-serif; padding: 20px; }
    .don-section { max-width: 500px; margin: auto; border: 1px solid #ccc; padding: 20px; border-radius: 10px; background: #f9f9f9; }
    .success { background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin-bottom: 15px; }
    .error { background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin-bottom: 15px; }
  </style>
</head>
<body>
<?php include 'header.php'; ?>
<section class="don-section" id="form-don">
  <h1>Faire un Don</h1>

  <?php if ($success): ?>
    <div class="success">Merci pour votre don !</div>
    <script>
      // Ferme le formulaire après 2 secondes
      setTimeout(() => {
        window.location.href = "index.php"; // ou toute autre page
      }, 2000);
    </script>
  <?php elseif (!empty($error_message)): ?>
    <div class="error"><?= $error_message ?></div>
  <?php endif; ?>

  <?php if (!$success): ?>
  <form method="POST" action="">
    <label>Nom:<br><input type="text" name="nom" required></label><br><br>
    <label>Email:<br><input type="email" name="email" required></label><br><br>
    <label>Montant (Fcfa):<br><input type="number" name="montant" step="0.01" required></label><br><br>
    <button type="submit">Valider le don</button>
  </form>
  <?php endif; ?>
</section>
<?php include 'footer.php'; ?>
</body>
</html>
