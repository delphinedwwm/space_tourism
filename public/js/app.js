// js burger ---------------------------------------------------
var burgerMenu = document.querySelector('.burger-menu');

var overlay = document.querySelector('.menu');

burgerMenu.addEventListener('click', function() {
  this.classList.toggle("close");
  overlay.classList.toggle("overlay");
});
// fin js burger ----------------------------------------------



// js logo ------------------------------------
var logo = document.querySelector('.logo');

logo.addEventListener('clic', function() {
  this.classList.toggle('accueil');
});
// fin js logo --------------------------------