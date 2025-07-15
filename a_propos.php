<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>À propos | E-SOCIAL</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Contenu -->
  <main style="padding: 2em;">
    <main style="max-width: 1200px; margin: 50px auto; padding: 0 20px;">

  <!-- Bloc Mission et Objectifs -->
  <section style="display: flex; flex-wrap: wrap; align-items: center; gap: 40px; margin-bottom: 60px;">
    
    <!-- Image à gauche -->
    <div style="flex: 1; min-width: 300px;">
      <img src="images/cou.jpeg" alt="Notre mission" style="width: 100%; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
    </div>

    <!-- Texte à droite -->
    <div style="flex: 1; min-width: 300px;">
      <h2 style="color: #2c3e50;">Notre Mission</h2>
      <p style="font-size: 16px; line-height: 1.6;">
        Nous œuvrons chaque jour pour améliorer les conditions de vie des personnes vulnérables. Notre objectif est de mettre en place des actions concrètes, durables et humaines dans les domaines de la santé, de l’éducation, et du bien-être social.
      </p>

      <h3 style="margin-top: 30px; color: #2c3e50;">Nos Objectifs</h3>
      <ul style="line-height: 1.8;">
        <li>Accompagner les familles dans le besoin</li>
        <li>Organiser des campagnes humanitaires</li>
        <li>Favoriser l'accès à la santé et à l'éducation</li>
        <li>Renforcer la solidarité et l'engagement communautaire</li>
      </ul>
    </div>

  </section>

  <!-- Formulaire de contact -->
  <section>
    <h2 style="text-align: center; color: #2c3e50; margin-bottom: 20px;">Nous écrire</h2>
    <form action="traitement_contact.php" method="POST" style="max-width: 700px; margin: auto;">
      
      <div style="margin-bottom: 20px;">
        <label for="nom" style="display: block; font-weight: bold;">Nom</label>
        <input type="text" name="nom" id="nom" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
      </div>

      <div style="margin-bottom: 20px;">
        <label for="email" style="display: block; font-weight: bold;">Email</label>
        <input type="email" name="email" id="email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
      </div>

      <div style="margin-bottom: 20px;">
        <label for="message" style="display: block; font-weight: bold;">Message</label>
        <textarea name="message" id="message" rows="5" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
      </div>

      <div style="text-align: center;">
        <button type="submit" style="background-color: #00b2c7; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
          Envoyer
        </button>
      </div>

    </form>
  </section>

</main>

  </main>

  <!-- Footer identique -->
  <?php include 'footer.php'; ?>

</body>
</html>
