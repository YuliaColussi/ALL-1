<?php 

require __DIR__.'/vendor/autoload.php';


$contentFile = file_get_contents(__DIR__.'/data/Customer.json');
$data = json_decode($contentFile);

$client = new MongoDB\Client(
    'mongodb+srv://user_bdd:7s8hf2f5pKOPMBSd@host_mongodb/hotel_pro11'
);

$collection = $client->hotel_pro11->customers;


// ou
//$collection = $client->selectCollection('hotel_pro11','customers');
// ou
//$db = $client->selectDatabase('hotel_pro11');
//$collection = $db->selectCollection('customers');

$collection->drop();
$collection->insertMany($data);


db.customers.distinct();
db.rooms.distinct("['bookings' => '0']");

