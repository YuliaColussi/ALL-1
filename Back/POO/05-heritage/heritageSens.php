<?php


class A
{
    public function test1()
    {
        return "test1<hr>";
    }
}
//------------------------------
class B extends A 
{
    public function test2()
    {
        return "test2<hr>";
    }
}

// ------------------------------

class C extends B 
{
    public function test3()
    {
        return "test3<hr>";
    }
}

// -----------------------------

// Exo : créer un objet de la classe C et afficher les méthodes issues de celle-ci et faire les affichages des méthodes

$c1 = new C;

echo '<pre>';print_r(get_class_methods($c1));echo'</pre>';

echo $c1->test1() .'<hr>';
echo $c1->test2() .'<hr>';
echo $c1->test3() .'<hr>';

// Si le classe B hérite de A et que le classe C hérite de B, alors la classe C hérite de A