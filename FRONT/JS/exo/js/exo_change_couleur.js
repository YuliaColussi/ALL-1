// alert('coucou');

var bouton = document.getElementById('toggle-rectangle');
var rectangle = document.querySelector('.rectangle');
// or if I keep the classes .querySelector('.rectangle');

// --------------2 FONCTIONS------------------

// 1- FONCTION ON CLICK SUR LA BOUTON
// La méthod .tongle() va ajouter ou supprimer la class (tel un intérrupteur) 

function surClicBouton() {
    rectangle.classList.toggle('hide');
}

// 2- FONCTION AU DOUBLE-CLICK SUR LE RECTANGLE

function auDoubleClickRectangle() {
    rectangle.classList.toggle('good')
}
/* 3 - L'entree du survol du rectangle 
*/

// La méthod .add() va ajouter la class CSS

function auSurvolSourisRectangle() {
    rectangle.classList.add('important');
}
/* 4- A la sortie du survol du rectangle */

// La méthod .remove() va ajouter la class CSS.

function aSortieSourisRectangle() {
    rectangle.classList.remove('good');
    rectangle.classList.remove('important');
}

// ****************************************ecouteurs d'evenement************************************

// ****************************************PARAM7TRE/ l'evenement
// ******************2ns paramètre: la fonction à executer**************/

// 1- Installation d'un gestionnaire d'événement au clic sur le bouton

bouton.addEventListener('click', surClicBouton);

// le méthod "afddEventListener()" met en place une fonction à appeler chaque fois que l'événement spécifié est remis à la cible. Les cibles courants
// sont un "Element", Le "Document" Lui meme est une "Window", mais 
// elle peut etre tout objet prenant en charge les évènements(comme XMLHttpRequest) 

// 2- initialisation d'un gestionnaire d'evenement au double clic dur le rectangle

rectangle.addEventListener('dbclick',auDoubleClicRectangle);

// 3 - Installation d'un gestionnaire d'évènement au survol sur le rectangle.

rectangle.addEventListener('mouseover', auSurvolSourisRectangle);

// 4 - Installation d'un gestionnaire d'évènement à la sortie du survol sur le rectangle

rectangle.addEventListener('mouseout', aSortieSourisRectangle);








// document.getElementById('toggle-rectangle').onclick = function(rectangle){
//     document.getElementById('rectangle').style.display = 'none';
// } 

// function(rectangle){ 
// if (document.getElementById('rectangle').style.display == 'none') {
//     document.getElementById('rectangle').style.display = 'block';
//     }  else {
//     document.getElementById('rectangle').style.display = 'none';
// }
// }



// function openbox(rectangle) {
//     if (document.getElementById('rectangle').style.display == 'none') {
//         document.getElementById('rectangle').style.display = 'block';
//     } else {
//         document.getElementById('rectangle').style.display = 'none';
//     }
// }


// function openbox(id) {
//     var el = document.getElementById('toggle-rectangle');
//     var display = getComputedStyle(el).display;
//     el.style.display = display === 'none' ? 'block' : 'none';
// }



// document.getElementById('toggle-rectangle').onclick = function(){
//     document.getElementById('rectangle').style.display = 'block';
// }


// function mouseOver() {
//     document.getElementById("rectangle").this.setAttribute("style", "background-color:limegreen;");
// }
// function mouseOut() {
//     document.getElementById("button").this.setAttribute("style", "background-color:royalblue;");
// }


// var rectangle = document.getElementById('rectangle');
// rectangle.onmouseover = function () {
//     this.setAttribute("style", "background-color:limegreen;");
// }
// rectangle.onmouseout = function () {
//     this.setAttribute("style", "background-color:royalblue;");
// }
// rectangle.onclick = function () {
//     this.setAttribute("style", "background-color:firebrick;");
// }
