<?php
session_start();
$admin_password = "admin123";

// Connexion admin
if (!isset($_SESSION["admin"])) {
  if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["password"] === $admin_password) {
    $_SESSION["admin"] = true;
    header("Location: admin.php");
    exit;
  } else {
    // Affichage formulaire login
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
      <meta charset="UTF-8">
      <title>Connexion Admin</title>
      <style>
        body {
          font-family: Arial, sans-serif;
          background: #f5f5f5;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }
        form {
          background: white;
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0 0 15px rgba(0,0,0,0.1);
          width: 300px;
        }
        h2 {
          text-align: center;
          color: #2c3e50;
        }
        input {
          width: 100%;
          padding: 10px;
          margin-top: 15px;
          border: 1px solid #ccc;
          border-radius: 5px;
        }
        button {
          width: 100%;
          margin-top: 20px;
          padding: 10px;
          background: #00cc99;
          color: white;
          border: none;
          border-radius: 5px;
          font-weight: bold;
          cursor: pointer;
        }
      </style>
    </head>
    <body>
      <form method="POST">
        <h2>Connexion Admin</h2>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
      </form>
    </body>
    </html>
    <?php
    exit;
  }
}

// Connexion à la BDD
$conn = new mysqli("localhost", "root", "", "esocial_db");
if ($conn->connect_error) die("Erreur connexion : " . $conn->connect_error);

// Récupération des dons
$result = $conn->query("SELECT * FROM dons ORDER BY date_don DESC");

// Statistiques rapides
$stats = $conn->query("SELECT COUNT(*) as total_dons, SUM(montant) as montant_total FROM dons")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>E-SOCIAL | Admin</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 0; padding: 0; background: #f7f9fa; }
    header {
      background: #2c3e50;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header h1 { margin: 0; font-size: 1.8em; }
    nav a {
      color: white;
      text-decoration: none;
      margin-left: 20px;
      font-weight: bold;
      transition: 0.3s;
    }
    nav a:hover { text-decoration: underline; }

    main { padding: 30px; }

    .stats {
      display: flex;
      gap: 30px;
      margin-bottom: 30px;
    }
    .stat-box {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      flex: 1;
      text-align: center;
    }
    .stat-box h3 {
      margin: 0;
      font-size: 16px;
      color: #888;
    }
    .stat-box p {
      font-size: 24px;
      font-weight: bold;
      color: #00cc99;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    }
    th, td {
      border: 1px solid #eee;
      padding: 12px;
      text-align: center;
    }
    th {
      background: #ecf0f1;
      color: #333;
    }
    tr:hover {
      background: #f9f9f9;
    }
  </style>
</head>
<body>

<header>
  <h1>E-SOCIAL Admin</h1>
  <nav>
    <a href="index.php">Retour au site</a>
    <a href="logout.php">Déconnexion</a>
  </nav>
</header>

<main>
  <h2 style="color:#2c3e50;">Tableau de bord</h2>

  <div class="stats">
    <div class="stat-box">
      <h3>Total des dons</h3>
      <p><?= $stats['total_dons'] ?></p>
    </div>
    <div class="stat-box">
      <h3>Montant cumulé</h3>
      <p><?= number_format($stats['montant_total'], 0, ',', ' ') ?> FCFA</p>
    </div>
  </div>

  <h2 style="margin-top: 40px;">Liste des Dons</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Montant</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['nom']) ?></td>
        <td><?= htmlspecialchars($row['email']) ?></td>
        <td><?= $row['montant'] ?> FCFA</td>
        <td><?= $row['date_don'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</main>

</body>
</html>
