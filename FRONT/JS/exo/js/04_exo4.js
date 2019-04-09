// window.onload = function(){
//     setinterval(fSec, 1000);
//     var sec = 0;
//     function fSec()
// }


// switch (jour) {
//     case 'lundi':
//         alert('Demain nous serons mardi');
//         break;
//     case 'mardi':
//         alert('Demain nous serons mercredi');
//         break;
//     case 'mercredi':
//         alert('Demain nous serons jeudi');
//         break;
//     case 'jeudi':
//         alert('Demain nous serons vendredi');
//         break;
//     case 'vendredi':
//         alert('Demain nous serons samedi');
//         break;
//     case 'samedi':
//         alert('Demain nous serons dimanche');
//         break;
//     case 'dimanche':
//         alert('Demain nous serons lundi');
//         break;
//     default:
//         break;
// }

// var dat1 = document.getElementById("chiffre1");
// function chiffre1(elem) {
//     var left = 0; // начальное значение
//     var top = 70;
//     function frame() { // функция для отрисовки
//         left++;
//         top++;
//         elem.style.left = left + 'px';
//         elem.style.top = top + 'px';
//         if (left == 100) {
//             clearInterval(timer); // завершить анимацию
//         }
//     }
//     var timer = setInterval(frame, 10) // рисовать каждые 10 мс
// }
// chiffre1(chiffre2);

// $(function () {

//     $('chiffre1').css({ "position": "fixed", "z-index": "1", "min-width": "0" });
//     var timespan = 500;
//     cycleEffects();
//     function cycleEffects() {
//         $('div')
//             .animate({ left: "+=100" }, timespan, "linear")
//             .animate({ left: "-=100", top: "+=200" }, timespan, "linear")
//             .animate({ left: "+=100" }, timespan, "linear")
//             .animate({ left: "-=100", top: "-=200" }, timespan, "linear", cycleEffects)
//     }
// });

// function indic = true; tourne() {
//     var x = document.getElementById('chiffre1').value;
//     var y = document.getElementById('chiffre2').value;
//     if (((x || y) < 0) || (x || y) > 1000)
//         return alert("error");
//     else {
//         var ball = document.getElementsById('aiguilleminute')[0];
//         ball.style.left = x + 30 ;
//         ball.style.top = y + 30 ;
//     }
// }

var compteur_minutes = 0;
var compteur_heures = 0;

function tourne() {
    heures = document.getElementById("aiguilleheure");
    minutes = document.getElementById("aiguilleminute");

    switch (compteur_minutes) {
        case 0: minutes.style.top = "123px"; minutes.style.left = "250px"; break;
        case 1: minutes.style.top = "160px"; minutes.style.left = "287px"; break;
        case 2: minutes.style.top = "210px"; minutes.style.left = "300px"; break;
        case 3: minutes.style.top = "260px"; minutes.style.left = "287px"; break;
        case 4: minutes.style.top = "297px"; minutes.style.left = "250px"; break;
        case 5: minutes.style.top = "310px"; minutes.style.left = "200px"; break;
        case 6: minutes.style.top = "297px"; minutes.style.left = "150px"; break;
        case 7: minutes.style.top = "260px"; minutes.style.left = "113px"; break;
        case 8: minutes.style.top = "210px"; minutes.style.left = "100px"; break;
        case 9: minutes.style.top = "160px"; minutes.style.left = "113px"; break;
        case 10: minutes.style.top = "123px"; minutes.style.left = "150px"; break;
        case 11: minutes.style.top = "110px"; minutes.style.left = "200px"; break
        default: alert("Y'a un bug!"); break;
    }

    compteur_minutes = (compteur_minutes + 1) % 12;

    if (compteur_minutes == 0) {
        switch (compteur_heures) {
            case 0: heures.style.top = "123px"; heures.style.left = "250px"; break;
            case 1: heures.style.top = "160px"; heures.style.left = "287px"; break;
            case 2: heures.style.top = "210px"; heures.style.left = "300px"; break;
            case 3: heures.style.top = "260px"; heures.style.left = "287px"; break;
            case 4: heures.style.top = "297px"; heures.style.left = "250px"; break;
            case 5: heures.style.top = "310px"; heures.style.left = "200px"; break;
            case 6: heures.style.top = "297px"; heures.style.left = "150px"; break;
            case 7: heures.style.top = "260px"; heures.style.left = "113px"; break;
            case 8: heures.style.top = "210px"; heures.style.left = "100px"; break;
            case 9: heures.style.top = "160px"; heures.style.left = "113px"; break;
            case 10: heures.style.top = "123px"; heures.style.left = "150px"; break;
            case 11: heures.style.top = "110px"; heures.style.left = "200px"; break
            default: alert("Y'a un bug!"); break;
        }

        compteur_heures = (compteur_heures + 1) % 12;
    }

    if (indic) window.setTimeout("tourne()", "1000");
}