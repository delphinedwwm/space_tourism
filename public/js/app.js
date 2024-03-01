// js burger ---------------------------------------------------
const burgerMenu = document.querySelector('.burger-menu');

const overlay = document.querySelector('.menu');

burgerMenu.addEventListener('click', function() {
  this.classList.toggle("close");
  overlay.classList.toggle("overlay");
});
// fin js burger ----------------------------------------------



// js logo ------------------------------------

const logo = document.querySelector('.logo');

logo.addEventListener('click', function() {
  this.classList.toggle('accueil');
});
// // fin js logo --------------------------------



// js bouton explorer --------------------------------------------------------------

const ctaButton = document.querySelector('.cta-button');
let counter = 0;

ctaButton.addEventListener('mouseover', () => {
    counter++;
    switch (counter % 4) { // Change l'image de fond toutes les 4 survols
        case 0:
            ctaButton.classList.remove('planete2', 'planete3', 'planete4');
            ctaButton.classList.add('planete1');
            break;
        case 1:
            ctaButton.classList.remove('planete1', 'planete3', 'planete4');
            ctaButton.classList.add('planete2');
            break;
        case 2:
            ctaButton.classList.remove('planete1', 'planete2', 'planete4');
            ctaButton.classList.add('planete3' );
            break;
        case 3:
            ctaButton.classList.remove('planete1', 'planete2', 'planete3');
            ctaButton.classList.add('planete4');
        
    }
    // ctaButton.style.backgroundColor = 'white';
});
 
// ctaButton.addEventListener('mouseout', () => {
//  ctaButton.style.backgroundImage = 'none'; // Réinitialise l'image de fond à aucune image
//   ctaButton.style.backgroundColor = 'white'; // Réinitialise le fond du bouton à la couleur blanche
// });

//  fin animation et fond du bouton --------------------------


// texte du bouton ------------------------------------------

// Liste des mots à afficher lors du survol
const words = ["Explorer", "Voyager", "Visiter", "S'aventurer"];

// Sélection de tous les éléments avec la classe .cta-button
const ctaButtons = document.querySelectorAll('.cta-button');

ctaButtons.forEach(button => {
    button.addEventListener('mouseover', () => {
        // Attribution aléatoire d'un mot différent à chaque survol
        const randomIndex = Math.floor(Math.random() * words.length);
        const randomWord = words[randomIndex];
        button.setAttribute('data-hover-text', randomWord);
    });
});



