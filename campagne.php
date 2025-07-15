<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Équipe | E-SOCIAL</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php'; ?>
<main style="max-width: 1200px; margin: 50px auto; padding: 0 20px;">

  <!-- Section Nos Campagnes -->
<section id="campagnes" style="margin-top: 50px;">
  <h2 style="text-align: center; color: #2c3e50; margin-bottom: 40px;">Nos campagnes</h2>

  <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 30px;">

    <!-- Campagne 1 -->
    <div style="flex: 1 1 250px; max-width: 300px; padding: 20px; border-radius: 15px; background: #f5f5f5; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
      <img src="images/kits.jpeg" alt="Kit alimentaire" style="width: 100%; margin-bottom: 15px;">
      <h3 style="color: #00b2c7;">Distribution de kits alimentaires</h3>
      <p>Des vivres sont offerts aux familles défavorisées chaque mois.</p>
      <a href="don.php" class="btn-don">Faire un don</a>
    </div>

    <!-- Campagne 2 -->
    <div style="flex: 1 1 250px; max-width: 300px; padding: 20px; border-radius: 15px; background: #f5f5f5; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
      <img src="images/eau.jpeg" alt="Eau potable" style="width: 100%; margin-bottom: 15px;">
      <h3 style="color: #00b2c7;">Accès à l’eau potable</h3>
      <p>Nous creusons des puits et distribuons des filtres dans les zones à risque.</p>
      <a href="don.php" class="btn-don">Faire un don</a>
    </div>

    <!-- Campagne 3 -->
    <div style="flex: 1 1 250px; max-width: 300px; padding: 20px; border-radius: 15px; background: #f5f5f5; text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1); transition: transform 0.3s;">
      <img src="images/vac.jpeg" alt="Vaccination" style="width: 100%; margin-bottom: 15px;">
      <h3 style="color: #00b2c7;">Vaccination communautaire</h3>
      <p>Nos campagnes de santé atteignent les zones rurales oubliées.</p>
      <a href="don.php" class="btn-don">Faire un don</a>
    </div>

    

  </div>
</section>

<!-- Effets CSS -->
<style>
  #campagnes div:hover {
    transform: translateY(-5px);
  }

  .btn-don {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background-color: #00b2c7;
    color: white;
    text-decoration: none;
    border-radius: 20px;
    transition: background 0.3s;
  }

  .btn-don:hover {
    background-color: #009977;
  }
</style>

 <!-- Section Articles/Publicités avec images -->
<section style="margin-top: 60px;">
  <h2 style="text-align: center; margin-bottom: 30px;">Actualités et Campagnes en cours</h2>

  <div class="slider" style="overflow: hidden; position: relative; width: 100%; height: 230px; background: #eefdfb; border-radius: 10px;">
    <div class="slider-track" style="
      display: flex;
      animation: defilement 25s linear infinite;
      gap: 30px;
      padding: 20px;
    ">
      <!-- Article 1 -->
      <div style="min-width: 300px; flex-shrink: 0; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <img src="images/pub1.jpeg" alt="Wave" style="width: 100%;  height: 130px; object-fit: cover;">
        <div style="padding: 10px;">
          <h4 style="color: #00b2c7;"> Campagne Wave 2025</h4>
          <p style="font-size: 14px;">Tournée wave mobile sénégal toujours proche de vous. Sa xaliss yay borom.</p>
        </div>
      </div>

      <!-- Article 2 -->
      <div style="min-width: 300px; flex-shrink: 0; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <img src="images/pub2.jpeg" alt="3FPT" style="width: 100%; height: 130px; object-fit: cover;">
        <div style="padding: 10px;">
          <h4 style="color: #00b2c7;"> 3FPT</h4>
          <p style="font-size: 14px;">Campagne 3FPT 2025 mise tout sur le numérique et les formations pratique.</p>
        </div>
      </div>

      <!-- Article 3 -->
      <div style="min-width: 300px; flex-shrink: 0; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <img src="images/pub3.jpeg" alt="JPS" style="width: 100%; height: 130px; object-fit: cover;">
        <div style="padding: 10px;">
          <h4 style="color: #00b2c7;"> Jeunes Patriotes du Sénégal</h4>
          <p style="font-size: 14px;">lancement campagne agricol 2025 Burok en marche </p>
        </div>
      </div>

      <!-- Article 4 -->
      <div style="min-width: 300px; flex-shrink: 0; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <img src="images/pub4.jpeg" alt="Sédiama" style="width: 100%; height: 130px; object-fit: cover;">
        <div style="padding: 10px;">
          <h4 style="color: #00b2c7;"> Sédima </h4>
          <p style="font-size: 14px;">Sensibilisation des jeunes à la protection de l’environnement.</p>
        </div>
      </div>

      <!-- Article 5 -->
      <div style="min-width: 300px; flex-shrink: 0; background: #fff; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <img src="images/pub5.jpeg" alt="J'adore" style="width: 100%; height: 130px; object-fit: cover;">
        <div style="padding: 10px;">
          <h4 style="color: #00b2c7;"> J'adore</h4>
          <p style="font-size: 14px;">Améliorons l'accès a l'alimentation. Nex sell te sankane.</p>
        </div>
      </div>

    </div>
  </div>

  <!-- Animation CSS -->
  <style>
    @keyframes defilement {
      0% { transform: translateX(0); }
      100% { transform: translateX(-100%); }
    }
  </style>
</section>
</main>
<?php include 'footer.php'?>
</body>
</html>