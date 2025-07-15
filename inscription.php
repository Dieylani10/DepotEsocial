<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
</head>
<body>
  <h2>Inscription</h2>
  <form action="traitement_inscription.php" method="POST">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br>

    <label>Email :</label><br>
    <input type="email" name="email" required><br>

    <label>Mot de passe :</label><br>
    <input type="password" name="password" required><br>

    <button type="submit">S'inscrire</button>
  </form>
</body>
</html>
