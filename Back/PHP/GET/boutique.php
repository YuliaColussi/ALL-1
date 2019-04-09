<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Boutique</title>
</head>
<body>
    <div class="container text-center">
    <h1 class="display-4 text-center">
    Bienvenue dans notre boutique!
    </h1>

    <!-- le ? permet de délimiter les arguments et l'url de destination -->

    <div class="col-md-2 offset-md-5 border border-dark">
    <img src="https://cdn.laredoute.com/products/362by362/a/a/5/aa5332b1f5cc3ea9e5c86ad06f33978f.jpg" width="50%" alt="tshirt-rouge"><br>
    <a href="fiche_produit.php?id=1&type=tshirt&couleur=rouge&prix=15">Voir le détail du produit 1</a><br></div>
    <a href="fiche_produit.php?id=2&type=jupe&couleur=noir&prix=30">Voir le détail du produit 2</a><br>
    <a href="fiche_produit.php?id=3&type=sweat&couleur=beige&prix=65">Voir le détail du produit 3</a><br>
    <a href="fiche_produit.php?id=4&type=robe&couleur=blue&prix=45">Voir le détail du produit 4</a><br>
    <a href="fiche_produit.php?id=5&type=chausseures&couleur=noir&prix=150">Voir le détail du produit 5</a><br>
    </div>
    </div>
</body>
</html>