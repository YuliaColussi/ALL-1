<?php require_once 'inc/init.inc.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Lien fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <!-- Lien CDN bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--BS PICKERDATE -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    <!-- Lien CSS personel -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="container">
    

        <header class="row">

            <!-- NavbarPrimaire -->
            <nav class="navbar navbar-expand-lg navbar-light col-md-12 mt-4">

                <div class="col-md-2 text-center"  id="border">

                    <img src="img/logoFavIconAlpha.png" alt="logo préhypno">

                    <!-- + -->

                </div>

                <div class="col-md-3 text-center" id="border">

                            <address><i class="fas fa-map-marker-alt mt-2"></i>&nbsp 23 rue de la folie Méricourt<br> 75011 Paris </address>   
                           
                            <button class="bouton_vert mx-auto badge-2x badge-pill"><i class="fas fa-phone"></i>&nbsp 07 01 02 03 01</button>

                </div>

                <div class="col-md-6 text-center"  id="border">

                    <h2 class="titre1 mt-2">lorem ipsum</h2>

                    <button class="bouton_vert mt-3 badge-2x badge-pill" href="rdv.php?page=rdv" target="_blank"><i class="fas fa-clock"></i> Prendre un RDV </button>
                           
                </div>

                <div class="col-md-2 text-center"  id="border">
                
                    <div class="mt-3">

                        <button class="bouton_vert mt-1 badge-2x badge-pill">Inscription</button>

                    </div>

                    <div class="mt-4">

                    <button class="mt-1 bouton_vert badge-2x badge-pill">Connexion</button>

                    </div>

                </div>

                
            </nav><!-- fin #navbarPrimaire -->

        </header>
    

    <div class="row">
        <div class="col">
            <nav class="navbar navbar-inverse navbar-lg navbar-fixed-bottom navbar-light logo"
                id="navbarSecondaire">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <!-- <button class="navbar-toggler" id="btn_nav" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button> -->

            <div class="collapse navbar-collapse text-align-center" id="navbarNav">
                <ul class="navbar-nav mt-4">
                    <li class="nav-item active ml-2">
                        <a class="nav-link "><span class="border border-light rounded-pill btn hover">L'hypnose pour qui
                                ?</span></a>
                    </li>
                    <li class="nav-item active ml-2">
                        <a class="nav-link"><span class="border border-light rounded-pill btn hover">Déroulé d'une
                                séance</span></a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link"><span class="border border-light rounded-pill btn hover">Articles</span></a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link"><span class="border border-light rounded-pill btn hover">Anne-Cecile
                                ROUGIER</span></a>
                    </li>

                  
                                


            </div>
        </nav>
    </div>
    
    <a href="admin/connexion.php">
        <hr></a>
    <main class="row">