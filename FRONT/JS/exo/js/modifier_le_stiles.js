// var parag = document.getElementById('#parag1');

// function changer_style() {
//     if (document.getElementById('#parag1').style.display == 'none') { 
//         active.classList.add(active.style.fontSize = "11px");
//                             // (active.style.color = "blue");
// }else{
//         document.getElementById('#parag1').style.display == 'none';
// }
// }



// onclick = function changer_style() {
//     var obj;
//     obj = document.getElementById("parag1");
//     obj.onclick = function () { active.style.fontSize = 'size=3'; active.style.color = 'red'; };
//     obj.onclickout = function () { active.style.fontSize = 'size=7'; active.style.color = 'blue'; };
// }


// CORRECTION


// CORRECTION HOW IT CAN BE MADE PROPERLY
// var p = document.getElementById('parag1');
// var bouton = getElementById('btn');

function changer_style() {
    var p = document.getElementById("parag1");
    // j'applique les modifications de style css;
    p.style.backgroundColor = "rosyBrown";
    p.style.color = "white";
    p.style.border = "6px dotted teal";
    p.style.padding = "30px";
    p.style.width = "60%";
    p.style.margin = "0 auto";
}

// bonne pratique : S'afit sur le DOM;
// bonne pratique : bouton.document.addEventListener('onclick', changer_style());
// bonne pratique: changer_style();