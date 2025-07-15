<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-SOCIAL</title>
  <link rel="stylesheet" href="style.css">
  <script defer src="script.js"></script>
  <style>
    .don-section {
      display: none;
      padding: 20px;
      background-color: #f9f9f9;
      transition: opacity 0.5s ease;
      opacity: 0;
      position: fixed;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }
    .don-section.active {
      display: flex;
      opacity: 1;
    }
    .don-form-box {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      position: relative;
    }
    .don-close {
      position: absolute;
      top: 10px;
      right: 10px;
      background: crimson;
      color: #fff;
      border: none;
      padding: 5px 10px;
      cursor: pointer;
      font-size: 14px;
    }
    #message-don {
      margin-top: 10px;
      font-weight: bold;
    }
    .temoignage-cards {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .temoignage {
      background: #f1f1f1;
      padding: 15px;
      border-radius: 10px;
      text-align: center;
      width: 200px;
    }
    .temoignage img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 10px;
    }
</style>

  </style>
</head>
<body>
  <header>
    <div class="navbar">
      <div class="logo">E-SOCIAL</div>
      <nav style="text-align:center; margin: 20px;">
       <ul style="display: flex; list-style: none; gap: 20px;">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="campagne.php">Campagne</a></li>
        <li><a href="a_propos.php">À propos</a></li>
        <li><a href="equipe.php">Équipe</a></li>
      </ul>
      </nav>
     <!--  MODAL Authentification -->
<div id="authModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closeModal">&times;</span>

    <!-- Formulaire Connexion -->
    <div id="formConnexion">
      <h2>Connexion</h2>
      <form action="traitement_connexion.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" required>

        <button type="submit">Se connecter</button>
      </form>
      <p>Pas encore de compte ? <a href="#" id="lienInscription">S'inscrire</a></p>
    </div>

    <!-- Formulaire Inscription -->
    <div id="formInscription" style="display: none;">
      <h2>Inscription</h2>
      <form action="traitement_inscription.php" method="POST">
        <label for="nom">Nom</label>
        <input type="text" name="nom" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" required>

        <button type="submit">S'inscrire</button>
      </form>
      <p>Déjà un compte ? <a href="#" id="lienConnexion">Se connecter</a></p>
    </div>
  </div>
</div>

<!--  Bouton Connexion dans le menu -->
<?php session_start(); ?>
<?php if (isset($_SESSION['user_id'])): ?>
  <!--  Utilisateur connecté -->
  <div class="user-menu">
    <img src="images/<?php echo $_SESSION['user_photo'] ?? 'default.png'; ?>" alt="Photo de profil" class="profile-pic">
    <span style="color: white";><?php echo htmlspecialchars($_SESSION['user_nom']); ?></span>
  <form action="deconnexion.php" method="POST">
  <button type="submit" class="btn-connexion">Déconnexion</button>
  </form>


  </div>
<?php else: ?>
  <!--  Non connecté -->
  <button id="btnConnexion" class="btn-connexion">Connexion</button>
<?php endif; ?>



    </div>
  </header>

  <section class="titre">
    <div class="text-titre">
      <h1>Votre contribution transforme des vies et bâtit un avenir meilleur</h1>
      <button class="btn-partenaire">Nos partenaires</button>
    </div>
    <div class="image"></div>
  </section>

  <section class="actions">
    <h2>Nos actions</h2>
    <div class="action-cards">
      <div class="card">
        <img src="images/nou.jpg" alt="Nourriture">
        <p><strong>Nourritures pour tous</strong><br><small>1 jour</small></p>
        <button class="btn-don">Faire un don</button>
      </div>
      <div class="card">
        <img src="images/sante.jpg" alt="Santé">
        <p><strong>Aide médicale pour les sans-abri</strong><br><small>1 semaine</small></p>
        <button class="btn-don">Faire un don</button>
      </div>
      <div class="card">
        <img src="images/abris.jpg" alt="Abris">
        <p><strong>Aménagement d’un abris provisoire</strong><br><small>2 semaines</small></p>
        <button class="btn-don">Faire un don</button>
      </div>
      <div class="card">
        <img src="images/fam.jpg" alt="Famille">
        <p><strong>Collecte de fonds pour les familles</strong><br><small>Aujourd’hui</small></p>
        <button class="btn-don">Faire un don</button>
      </div>
    </div>
  </section>

  <section class="don-section" id="don-form">
    <div class="don-form-box">
      <button class="don-close" id="close-don">✕</button>
      <h2>Faire un Don</h2>
      <form id="don-formulaire">
        <label>Nom:<br><input type="text" name="nom" required></label><br>
        <label>Email:<br><input type="email" name="email" required></label><br>
        <label>Montant (Fcfa):<br><input type="number" name="montant" step="0.01" required></label><br>
        <button type="submit">Valider le don</button>
        <div id="message-don"></div>
      </form>
    </div>
  </section>

  <section class="temoignages">
    <h2>Témoignages</h2>
    <div class="temoignage-cards">
      <div class="temoignage">
        <img src="images/MA.jpg" alt="Profil 1">
        <p>Votre aide a changé ma vie.</p>
      </div>
      <div class="temoignage">
        <img src="images/julie.webp" alt="Profil 2">
        <p>Un grand merci pour votre générosité</p>
      </div>
      <div class="temoignage">
        <img src="images/ange.jpg" alt="Profil 3">
        <p>Je tiens à vous remercier pour l'aide</p>
      </div>
    </div>
  </section>
   <!-- Footer identique -->
  <?php include 'footer.php'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const buttons = document.querySelectorAll(".btn-don");
      const formSection = document.querySelector("#don-form");
      const closeBtn = document.querySelector("#close-don");
      const form = document.querySelector("#don-formulaire");
      const message = document.querySelector("#message-don");

      buttons.forEach(btn => {
        btn.addEventListener("click", () => {
          formSection.classList.add("active");
          message.textContent = "";
        });
      });

      closeBtn.addEventListener("click", () => {
        formSection.classList.remove("active");
        form.reset();
        message.textContent = "";
      });

      form.addEventListener("submit", async (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        const response = await fetch("don.php", {
          method: "POST",
          body: formData,
        });
        const result = await response.json();
        if (result.success) {
          message.style.color = "green";
          message.textContent = result.message;
          setTimeout(() => {
            formSection.classList.remove("active");
            form.reset();
            message.textContent = "";
          }, 2000);
        } else {
          message.style.color = "red";
          message.textContent = result.message || "Une erreur est survenue.";
        }
      });
      
    });
  </script>
</body>
</html>
