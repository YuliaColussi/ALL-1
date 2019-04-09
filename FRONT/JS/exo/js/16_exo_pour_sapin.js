var branche = 0, vert = 0;
var max = 6;
var space = "",
    star = "";


while (vert < max) {
    space = "";
    star = "";
    for (branche = 0; branche < max - vert; branche++) space = space + " ";
    for (branche = 0; branche < vert + 1; branche++) star = star + "*";
    console.log(space + star);
    vert++;
}


// CORRECTION

// boucle FOR

console.log("FOR");
var diese ="";

for (var i = 1; i<8; i++) {
    diese += "#";
    console.log(diese);
}

// boucle WHILE

console.log("WHILE");
var ligne ="";
var i = 1;
while(i<=7) {
    ligne = ligne + "#";
}