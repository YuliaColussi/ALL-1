<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me déplace";
    }
    public function manger()
    {
        return "Je mange chaque jour";
    }
}

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un éléphant et " . $this->deplacement() . '<hr>';
    }
}


// ---------------------------------

class Chat extends Animal, Elephant
{
    public function quiSuisJe()
    {
        return "Je suis un chat";
    }
    public function manger()
    {
        return "Je me goinfre comme un gros chat !!";
    }
}



$elephant = new Elephant;
echo '<pre>';print_r(get_class_methods($elephant));echo'</pre>';
echo $elephant->quiSuisJe();

// Créer un objet issu de la classe 'Chat' et afficher le resultat des 2 méthodes déclarées à l'interieur

$chat = new Chat;

echo $chat->quiSuisJe() .'<hr>';
echo $chat->manger() .'<hr>'; // affiche "Je me goinfre comme un gros chat !!"
//et non pas "je mange chaque jour" car le méthode a été redéfinie dans la class 'chat'
// L'interpreteur cherche d'abord dans la class 'Chat' et seulement si la méthode n'avait pas été trouvé, il aurait chercher dans la class doit j'hérite

// Il n'est pas possible d'hériter de plusieurs classe en meme temps --> class Chat extends Animal, Elephant --> erreur



?>