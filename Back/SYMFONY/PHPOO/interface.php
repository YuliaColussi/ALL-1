

<?php 


interface Mouvement {
    public function start();
    public function turnRight();
    public function turnLeft();
}

// interface is a rule that we use that the code is clear - like no matter the function names that will be used, we will apply an implement and they will all be called same finally

// Aurelia 
class Avion extends Vehicule implements Mouvement
{
    public function start(){
    }
    public function turnRight(){
    }
    public function turnLeft(){
    }
} 

// Iuliia 

class Bateau extends Vehicule implements Mouvement
{
    public function start(){
    }
    public function turnRight(){
    }
    public function turnLeft(){
    }
} 

// we will have an erreur because we dont have a vehicule

?>