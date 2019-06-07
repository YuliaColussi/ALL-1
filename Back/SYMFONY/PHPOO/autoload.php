<?php

class Autoload
{
    static function chargement($class) // its only from the class and not an object
    {
            require('controller/' . $class . '.php');
            // require('Controller/User.php');

    }
}

// --------------------------
spl_autoload_register(array('Autoload', 'chargement')); // every time we have used 'new' - it worked
//  Il va apporter en argument de notre fonction ce qui suit après le 'new'


Autoload::chargement(); // static we make with :: and we make it inctead

// $a = new Autoload;
// $a -> chargement();


