<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require __DIR__.'/vendor/autoload.php';


// $client = new MongoDB\Client(
    // 'mongodb+srv://user_bdd:7s8hf2f5pKOPMBSd@host_mongodb/hotel_pro11'
// );

// $db = $client->hotel_pro11; // Remplacez NOM_DE_VOTRE_BDD le nom de votre bdd ^^

// var_dump($db);




// 2eme objectif tester la connexion avec predis

$options = [
    'parameters' => [
        'password' => '0lzqNn3HiUUjqZzDP4eHoqWwWGmcm7hi'
    ]
];

$client = new Predis\Client('tcp://redis-15281.c11.us-east-1-3.ec2.cloud.redislabs.com:15281', $options);
$client->set('message', 'Hello World');
echo $client->get('message'); // si vous voyez écris "Hello World" sur votre page c'est que vous avez réussi ;-)





// Pour mac :
// cp mongodb.so /usr/lib/php/extensions/no-debug-non-zts-20160303/mongodb.so

