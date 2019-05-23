<?php

echo '<pre>'; print_r(get_declared_classes());echo'</pre>';

$tab = array('Mario', 'Yoshi', 'Toad', 'Bowser');
$objet = (object) $tab; // cast : transformation d'un ARRAY en objet issu de la classe STDCLASS
echo '<pre>'; var_dump($objet);echo'</pre>'; // Un objet fait parti de la classe STDCLASS (class standart de php) lorsque celui-ci est orphelin et n'a pas été instancié par un 'new', l'objet n'est issu d'aucune classe en particulier

// EXO : afficher Yoshi en passant par l'objet StdClass '$objet'

echo $objet->{1} . "-" . $objet->{2}; //permet d'affciher un élément de l'objet


foreach($objet as $key => $value)
{
    echo "$key - $value<br>";
}

?>