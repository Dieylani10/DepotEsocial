// script.js

document.addEventListener("DOMContentLoaded", () => {
  const donButtons = document.querySelectorAll(".btn-don");

  donButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      alert("Merci pour votre générosité ! Vous serez redirigé vers la page de don.");
      window.location.href = "don.php";
    });
  });
});

  const btnConnexion = document.getElementById("btnConnexion");
  const modal = document.getElementById("authModal");
  const closeBtn = document.getElementById("closeModal");

  const formConnexion = document.getElementById("formConnexion");
  const formInscription = document.getElementById("formInscription");

  const lienInscription = document.getElementById("lienInscription");
  const lienConnexion = document.getElementById("lienConnexion");

  // Ouvrir modal
  btnConnexion.onclick = () => {
    modal.style.display = "block";
    formConnexion.style.display = "block";
    formInscription.style.display = "none";
  };

  // Fermer modal
  closeBtn.onclick = () => {
    modal.style.display = "none";
  };

  // Cliquer en dehors du modal
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

  // Basculer vers inscription
  lienInscription.onclick = (e) => {
    e.preventDefault();
    formConnexion.style.display = "none";
    formInscription.style.display = "block";
  };

  // Basculer vers connexion
  lienConnexion.onclick = (e) => {
    e.preventDefault();
    formInscription.style.display = "none";
    formConnexion.style.display = "block";
  };



