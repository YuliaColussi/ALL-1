<?php
// CONNEXION BDD

$bdd = new PDO('mysql:host=localhost;dbname=mon_site', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

// ---------- SESSION

session_start();

// ---------CHEMIN
define("RACINE_SITE", $_SERVER['DOCUMENT_ROOT'] . '/ALL/FRONT/my_website_projects/my_website/');


define("URL", "http://localhost/ALL/FRONT/my_website_projects/my_website/");


// ------------VARIABLES
$error = "";//message d'erreur
$validate = "";// message de validation
$content = "";//permettra de placer du contenu ou l'on souhaite 


// -----------------FAILLES XSS

foreach($_GET as $key => $value)
{
    $_GET[$key] = strip_tags(trim($value));
}


require_once("fonction.php");

?>