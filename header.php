<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<header style="background-color: #00cc99; padding: 24px 0;">
  <div class="navbar" style="
    max-width: 1200px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
  ">
    
    <!-- Logo -->
    <div class="logo" style="font-size: 24px; color: white; font-weight: bold;">
      <a href="index.php" style="color: white; text-decoration: none;">E-SOCIAL</a>
    </div>
    
    <!-- Menu navigation -->
    <nav style="flex-grow: 1; text-align: center;">
      <ul style="
        display: inline-flex;
        list-style: none;
        gap: 25px;
        margin: 0;
        padding: 0;
      ">
        <li><a href="index.php" style="font-weight: bold; color: white; text-decoration: none;">Accueil</a></li>
        <li><a href="campagne.php" style="font-weight: bold; color: white; text-decoration: none;">Campagne</a></li>
        <li><a href="a_propos.php" style="font-weight: bold; color: white; text-decoration: none;">À propos</a></li>
        <li><a href="equipe.php" style="font-weight: bold; color: white; text-decoration: none;">Équipe</a></li>
      </ul>
    </nav>

    <!-- Bouton ou menu utilisateur -->
    <div style="display: flex; align-items: center; gap: 10px;">
      <?php if (isset($_SESSION['user_id'])): ?>
        <img src="images/<?php echo htmlspecialchars($_SESSION['user_photo'] ?? 'iconprofil.png'); ?>" alt="Profil" style="width: 35px; height: 35px; border-radius: 50%;">
        <span style="color: white;"><?php echo htmlspecialchars($_SESSION['user_nom']); ?></span>
        <form action="deconnexion.php" method="POST" style="margin: 0;">
          <button type="submit" class="btn-connexion">Déconnexion</button>
        </form>
      <?php else: ?>
        <button id="btnConnexion" class="btn-connexion">Connexion</button>
      <?php endif; ?>
    </div>

  </div>
</header>
