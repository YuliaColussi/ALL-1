<?php

require_once('autoload.php');

$controller = new Controller\Controller;

echo '<pre>';var_dump($controller);echo'</pre>';

$controller->handlerRequest(); //on fait appel à la meme méthode handlerRequest() se trouvant dans la fichier controller.php



?>