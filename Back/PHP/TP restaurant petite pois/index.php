<?php
// fonction d'affichage d'un var_dump() avec balise <pre>
function debugV($param)
{
    echo '<pre style="background-color: #ebd4cb;">';
    echo '<strong>var_dump()</strong> <br>';
    var_dump($param);
    echo '</pre>';
}

/* les lignes ci-après permettent de voir ce qui se passe lorsque l'on teste les variables prédéfinies 
 * empty() et isset()
 * avant de passer sur la logique de le correction elle-même, vérifier si les vérifications que font
 * isset() et empty() sont bien claires (cf. commentaires jusqu'à la ligne 58)
 */

// debugV($_GET);
// debugV($_POST);

// if($_GET){
//     echo 'if($_GET) <br>';
// } else {
//     echo 'ELSE du if($_GET) <br>';
// }
// if($_POST){
//     echo 'if($_POST) <br>';
// } else {
//     echo 'ELSE du if($_POST) <br>';
// }

//empty() ne vérifie pas si la variable existe ou pas, uniquement si elle est vide (donc les variables suiantes sont vides $zero = 0; $blanc= ''; $nul = NULL; $faux = false;)
// if(empty($_GET)){
//     echo '$_GET empty <br>';
// } else {
//     echo '$_GET NOT empty <br>';
// }
// if(isset($_GET)){
//     echo '$_GET isset <br>';
// } else {
//     echo '$_GET NOT isset <br>';
// }
// if(empty($_POST)){
//     echo '$_POST empty <br>';
// } else {
//     echo '$_POST NOT empty <br>';
// }
// if(isset($_POST)){
//     echo '$_POST isset <br>';
// } else {
//     echo '$_POST NOT isset <br>';
// }

// cas à tester un par un :
// $msg;
// $msg = 0;
// $msg = '';
// $msg = false;
// $msg = NULL;

// if(empty($msg)){
//     echo '$msg empty <br>';
// } else {
//     echo '$msg NOT empty <br>';
// }
// if(isset($msg)){
//     echo '$msg isset <br>';
// } else {
//     echo '$msg NOT isset <br>';
// }


$formule = '';
$photo = '';
$prix = 0;

if (!empty($_GET)) {
    $formule = $_GET['menu'];
    $photo = $_GET['img'];
    $prix = $_GET['prix'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Srisakdi" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>Restaurant de petites pois</title>
</head>
<body>
    <?php
    if(empty($_GET)){  
    ?>
        <section class="contenu">
            <div class="header">
                <i class="fas fa-kiwi-bird"></i>
                <h1>
                    Au Pois Gourmand
                </h1>
            </div>
            <section class="meilleu">
                <div class="card card-left">
                    <img src="images/rome.jpg" alt="image de plat avec les tomates">
                    <h3>
                        Formule Rome
                    </h3>
                    <p>
                        Tomates buratina
                    </p>
                    <p>
                        Rizotto aux asperges
                    </p>
                    <p>
                        Panna cotta
                    </p>
                    <a href="?menu=rome&prix=25&img=images/rome.jpg" class="btn1">Choisir</a>
                    <!-- with ? we say to php that here is my url in php
                        & with this we can associate our values straight in url
                    
                    
                    -->
                </div>
                <div class="card">
                    <img src="images/delhi.jpg" alt="image de plat avec les sauces">
                    <h3>
                        Formule Delhi
                    </h3>
                    <p>
                        Poppadoms
                    </p>
                    <p>
                        Agneau byriani
                    </p>
                    <p>
                        Laissi mangue
                    </p>
                    <a href="?menu=delhi&prix=25&img=images/delhi.jpg" class="btn2">Choisir</a>
                </div>
                <div class="card card-left">
                    <img src="images/nyork.jpg" alt="image de plat avec les burgers">
                    <h3>
                        Formule New-York
                    </h3>
                    <p>
                        César salade
                    </p>
                    <p>
                        Cheeze burger
                    </p>
                    <p>
                        Cheezecake
                    </p>
                    <a href="?menu=nyork&prix=25&img=images/nyork.jpg"class="btn3">Choisir</a>
                </div>
                <div class="card">
                    <img src="images/hanoi.jpg" alt="image de plat avec les tomates">
            <h3>
                Formule Hanoi
            </h3>
            <p>
                Nems aux crevettes
            </p>
            <p>
                Poulet saté
            </p>
            <p>
                Perles de coco
            </p>
            <a href="?menu=hanoi&prix=25&img=images/hanoi.jpg" class="btn4">Choisir</a>
        </div>
    </section>
    <div class="footer">
        <i class="fas fa-kiwi-bird"></i>
        <p>.....</p>
        <i class="fas fa-kiwi-bird"></i>
        <p>....</p>
        <i class="fas fa-kiwi-bird"></i>
        <p>...</p>
        <i class="fas fa-kiwi-bird"></i>
        <p>..</p>
        <i class="fas fa-kiwi-bird"></i>
        <p>.</p>
        <h5>Au Pois Gourmand</h5>
    </div>
    <?php }else { ?>
    <section class="rome">
        <div class="merci">
            <h2>
                Merci pour votre commande!
            </h2>
            <div class="card-merci">
                <div class="gauche">
                    <img "<?php echo $photo; ?>" alt="image de plat avec les tomates">
                </div>
            <div class="droite">
                <h6>Votre formule <?php echo $formule; ?> arrive dans quelques instants...</h6>
                <i class="fas fa-kiwi-bird"></i>
                <div class="clear"></div>
                <p>
                    Nous vous souhaitons une bonne dégustation.
                    <br>
                    Un café gourmand vous est proposé pour terminer votre pause gourmande en douceur.
                </p>
                <p class="price">Votre facture sera de 
                    <?php echo $prix; ?>
                </p>
                <a href="?action=click" class="btn">Choisir un autre menu</a>
            </div>
        </div>
        <div class="stars">
            <div class="aime">
                <p class="price">Vouz avez aimé?</p>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <img src="images/pg.jpg" alt="image de pies">
        </div>
    </div>
</section>
<?php } ?>
</body>
</html>
</section>
</body>
</html>