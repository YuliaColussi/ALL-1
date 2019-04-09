// alert('coucou');


// window.addEventListener('DOMContentLoaded', function () {
//     var inp = document.querySelectorAll('[name="count"]');
//     [].forEach.call(document.querySelectorAll('textarea'), function (area, i) {
//         var count = inp[i], limit = count.value;
//         area.addEventListener('input', function () {
//             area.value = area.value.substring(0, limit);
//             count.value = limit - area.value.length;
//         });
//     });
// });



// function limitText(limitField, limitCount, limitNum) {
//     if (limitField.value.length > limitNum) {
//         limitField.value = limitField.value.substring(0, limitNum);
//     } else {
//         limitCount.value = limitNum - limitField.value.length;
//     }
// }




// var el;

// function countCharacters(e) {
//     var textEntered, countRemaining, counter;
//     textEntered = document.getElementById('tweetContent').value;
//     counter = (140 - (textEntered.length));
//     countRemaining = document.getElementById('counterBlock');
//     countRemaining.textContent = counter;
// }
// el = document.getElementById('tweetContent');
// el.addEventListener('keyup', countCharacters, false);


// CORRECTION

// 1 - selectionne l'element textarea et element p#counterBlock
var tweetText = document.querySelector('#tweetContent');
var tweetCount = document.getElementById('counterBlock');


// 2 - we make a function to make the count of letters

function decompte() {
    // la fonction calcule la longeur de la chaine 
    // caractère contenue dans la textarea
    var decompte = (140 - (tweetText.value.length));
    // et afficher cette valeur dans la balise
    // p#counterBlock grace à innerHTML
    tweetCount.innerHTML = decompte;

    // si le countdescend sosu 0 on ajoute la classz red à la balise p#TweetCount
    if(decompte<0){
        tweetCount.classList.add('red');
    }else if(decompte>=0) {
        blockCount.classList.remove('red');
    }
}

tweetText.addEventListener('keyup', decompte);
decompte();