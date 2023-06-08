// Fonction pour afficher le popup
function showPopup() {
  document.getElementById('popup').style.display = 'block';
  document.getElementById('overlay').style.display = 'block';
}

// Fonction pour fermer le popup
function closePopup() {
  document.getElementById('popup').style.display = 'none';
  document.getElementById('overlay').style.display = 'none';
}

// Affiche le popup au chargement de la page
window.onload = function() {
  showPopup();
};