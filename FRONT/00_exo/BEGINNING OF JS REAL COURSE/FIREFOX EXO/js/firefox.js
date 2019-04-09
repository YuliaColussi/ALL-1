// alert('coucou');

// fonction qui va switcher l'image lorsqu'on click dessus


// on stock notre variable dans la variable monImage le première image de document
// quearySelectorAll récupérerait toutes les img

var monImage = document.querySelector('img');

// this combination will create a table and then we need to look for this élément with the sign [] - like we look for the elements
// in the table
// var monImage = document.querySelector('img')[0];


console.log(monImage);

//   ON va utiliser la méthod addEventListener pour ajouter un écouter de click sur l'image

// addEventListener attend 2 paramètres:
//  l'événement et l'action (click) à réaliser lorsque l'événement survient (changer la source l'image)
monImage.addEventListener('click', function(){
// function anonyme cuz of this () (empty)
    // récupérer dans une variable maSrc, la valeur actualle de l'attribut src de monImage. On va utiliser la méthod:
    // getAttrribute() - its a navite méthod. L'argument attendu pour cette méthod est le nom d'un attribut de balise html(ici ça sera src).


    // alert('click');
    var maSrc = monImage.getAttribute('src');
    console.log(maSrc);

    // SI (la valeur de la variable maSrc est égale à 'images/logo_firefox_1.png' )
    // ALORS
    // alert('je suis l'image 1)
    // SINON
    // alert(maSrc + "n'est pas l'image 1")

    // première version de cette condition pour tester

    // if(condition){
    //     instruction1;
    // }else{
    //     instruction2;
    // }


    // version pas finale

    // if (maSrc === 'images/logo_firefox_1.png'){
    //     alert('je suis limage 1, ma sourse est ' + maSrc);
    // }else{
    //     alert('je ne suis pas limage 1');
    // }


    //  SECOND VERSION : ici on va intervenir les images avec ma méthod setAttribute qui attend 2 arguments
    // : la 1ere attribute ciblé (ici ça sera src)
    // 2eme ça nouvelle valeur (ici ça sera images/logo_firefox_2.png)
    // on va remplacer la source par la source de la deuxieme image

         if (maSrc === 'images/logo_firefox_1.png'){
            //  alert('je suis limage 1, ma sourse est ' + maSrc);
             monImage.setAttribute('src', 'images/logo_firefox_2.png');
     }else{
            //  alert('je ne suis pas limage 1');
             monImage.setAttribute('src', 'images/logo_firefox_1.png');
     }
     
    }); // Fin de la fonction d'inversion des images

    // Dans la code précedent on a fait:
// 1. Quand on lique sur l'image (dans la fonction addEventListener)
// 2. On a utilisé la structure conditionnelle IF ELSE pour voir si la valeur de 
// l'attribute src est égal au chamin de l'image originale
// 3. Si c'est la cas, on change la valeur de cet attribut en lui indiquant le chemin vers la second image
// 4. Si ça n'est pas le cas (ce qui signifie que l'image a été change), la valeur
// de l'attribut src revient à sa valeur initiale

// Prochaine recette (fonction) : ajouter un message d'accueil personalisé

// On va changer le titre de la page pour inclure un message pour le visiteur du site
// Ce message sera conservé quand l'utilisateur quittera le site et si il y revient plus tard.


// On va conserver ce message dans le cache du navigateur en utilisant l'API Webstorage
// API  - boite des utilises de navigateur
// Итак, начнём с определения. API (Application Programming Interface) — это интерфейс программирования, интерфейс создания приложений. Если говорить более понятным языком, то API — это готовый код для упрощения жизни программисту. API создавался для того, чтобы программист реально мог облегчить задачу написания того или иного приложения благодаря использованию готового кода (например, функций). Всем известный jQuery, написанный на JavaScript является тоже своего рода API. Если рассматривать конкретно данный пример, то jQuery позволяет намного облегчить написание кода. То что обычными средствами JavaScript можно было сделать 
// за 30 строк, через jQuery пишется через 5-6. Если рассматривать
//  API в общем, то можно найти очень много сервисов, представляющих решения для разработки. 

// Au final, on ajoutera une option sur le bouton pour pouvoir changer l'utilisateur et le message d'accueil si besoin

// 1er étape: récupérer dans une variable monTitre le 1er h1 du document
// 2 eme l'affiche dans la console


var monTitre = document.querySelector('h1');
console.log(monTitre);


// 2eme étape: récupérer dans une variable monBouton la première balise button du document

var monBouton = document.querySelector('button');
console.log(monBouton);

// prépare la fonction du message d'accueil (qui sera
// invoquée, déclenchée plus tard)

function  definirNomUtilisateur() {
    var monNom = prompt('Ecris ton prénome');
    localStorage.setItem('nomUtilisateur', monNom);
    // ici on a stocker la nom dans la cache
    monTitre.textContent = "Bienvenue " + monNom;
}

// EXPLICATION DE LA FONCTION
// Cette fonction utilise la méthode prompt() qui affiche une boite de dialogue, un peu comme une alert(), 
// sauf qu'elle permet à l'utilisateur de saisir des données et des les enregistrer dans une variable quand
// l'utilisateur clique sur OK.

// Dans notre exemple on demande à l'utilisateur de saisir son nom
//Ensuite nous appelons l'API localStorage qui permet de stocker des données dens la navigateur pour pouvoir les
// réutiliser ultérierument.

// Nous utilisons la fonction setItem des cet API pour stocker la donnée
// qui nous interesse dans un conteneur appelé nomUtilisateur. La valeur
// stockée ici rest la valeur de la variable monNom qui contient le nom 
// saisi par l'utilisateur dans la prompt.
// Au final on utilise la propriété textContent du titre pour lui affecter un nouveau contenu.

// Le block de IF ELSE utilise l'operateur de négation NON  (le point d'exclamation) pour verifier
// si le navigateur possède une donnée enregistrée appelée nomUtilisateur ou pas.
// Sinon, la fonction definirNomUtilisateur() est invoquée pour créer cette donnée.
// Si elle existe (ce qui correspond au cas ou l'utilisateur est déjà
// venu sur la page, on la récupère avec la méthode getItem() . Pour EXT_texture_filter_anisotropicon définit
// le contenu de TextContent pour le titre
// avec une concanénation de chaine suivie du nom de l'utilisateur.
// // Enfin, on associe le gestionnaire d'événement click au bouton. 
// Quand l'utilisateur cliquera sur la bouton, ça déclenchera l'éxécution
// de la fonction definirNomUtilisateur();
// Cette bouton permet donc à l'utilisateur de modifier son nom s'il le souhaite.







// La suiter va etre : tester si le nom n'est pas dans la cache. S'il n'y a pas, on demaande avec prompt son nom à l'utilisateur (déclenche la fonction definirNomUtilisateur)

// Si il y aest, si le nom est déjà dans la cache, on le recupère et on l'affiche dans le titre


// if(){
//     //instruction1
// }else{
//     // instruction2
// }


// pour tester : vider le localstorage
localStorage.clear();

if(!localStorage.getItem('nomUtilisateur')){
    alert('cache est vide');
    definirNomUtilisateur();
}else{
    var nomEnregistre = localStorage.getItem('NomUtilisateur');
    monTitre.textContent = 'Bienvenue à nouveau' + nomEnregistre;
}



//  Au click sur la bouton , invoquer la fonction definirNomUtilisateur()

// monBouton.addEventListener('click', definirNomUtilisateur());

monBouton.addEventListener('click',function(){
    definirNomUtilisateur

})

