<?php
// CONNEXION BDD

$bdd = new PDO('mysql:host=localhost;dbname=mon_site', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// ---------- SESSION

// session_start();

// ---------CHEMIN
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/ALL/FRONT/my_website_projects/my_website/');
//  $_SERVER['DOCUMENT_ROOT'] --> C:/xampp/htdocs 
// lors de enregistrement d'image/ photos, nous  aurons bedoins du chemin physique complet pour enregistret la photo dans la bonne dosier
// echo RACINE_SITE;

define("URL", "http://localhost/ALL/FRONT/my_website_projects/my_website/");
// echo URL;

// cette constante servira entre autre à enregistreer
// l'URL d'une photo / image de la BDD, on ne conserve jamais le photo elle meme, ce serait trop lourd pour la BDD

// ------------VARIABLES
$error = "";//message d'erreur
$validate = "";// message de validation
$content = "";//permettra de placer du contenu ou l'on souhaite 


// -----------------FAILLES XSS

foreach($_GET as $key => $value)
{
    $_GET[$key] = strip_tags(trim($value));
}

// strip_tags() --> supprime les balises HTML
// trim() -->supprime les aspaces en début et fin de chaine

// ----------------INCLUSIONS
// on inclu directement le fishier fonction.php dans init, cela évitera de l'appeler sur chaque page


require_once("fonction.php");

// ----------------WE REALLY INITIALISE OUR PAGE HERE
// -------------------ITS A NECESSARY BEGINNING

?>