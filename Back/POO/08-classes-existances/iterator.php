<?php

// iterator servs us to find the solution for the frequent problems

$perso = array("m" => "Mario", "l" => "Luigi", "t" => "toad", "b" => "Bowser");

$it1 = new ArrayIterator($perso);
echo '<pre>';print_r(var_dump($it1));echo'</pre>';
echo '<pre>';print_r(get_class_methods($it1));echo'</pre>';


$it1->rewind();
while($it1->valid())
{
    echo $it1->key() . '-' . $it1->current() . '<br>';
    $it1->next();
}

/*
rewind() : permet de seplacer au déébut du fishier/array/dossier
valid() : permet de vérifier s'il ya des informations à parcourir
key() : permet d'afficher l'indice
current() : afficher la valeur
next() : permet de passer à l'élément suivant (comparable à $i++ ,incrémentation)

*/

// -----------------------------------------------

$it2 = new SimpleXmlIterator('liste.xml', null, true);
echo '<pre>';var_dump($it2);echo'</pre>';
echo '<pre>';print_r(get_class_methods($it2));echo'</pre>';

$it2->rewind();
while($it1->valid())
{
    echo $it2->key() . '-' . $it2->current() . '<br>';
    $it2->next();
}


//Iterator est ce qu'on appel un design pattern, qui permet de définir une solution pratique à un problème frequent. Un pattern propose un structure commune

// Exo : faire le meme chose avec la classe DirectoryIterator()


// foreach (new DirectoryIterator(..) as $fileInfo) {
//     if($fileInfo->isDot()) continue;
//     echo $fileInfo->getFilename() . "<br>\n";
// }

$it3 = new DirectoryIterator('C://');
echo '<pre>';var_dump($it3);echo'</pre>';
echo '<pre>';print_r(get_class_methods($it3));echo'</pre>';


$it3->rewind();
while($it3->valid())
{
    echo $it3->key() . '-' . $it3->current() . '<br>';
    $it3->next();
}

// Dans les 3 cas , nous avons des données de type différentes, mais nous avons le meme structure de code permettant de parcourir les données, le meme méthodes sont présentes dans les 3 classes différentes


?>