<?php

class Contact{
    private $nom;
    private $phone;
    private $email;
    private $message;

    public function contactAction($nom, $phone, $email, $message){
        $this->nom = strip_tags($nom);
        $this->phone = strip_tags($phone);
        $this->email = strip_tags($email);
        $this->message = strip_tags($message);

        require 'include/init.php';

        $req = $bdd->prepare('INSERT INTO contact_form (nom, phone, email, message) VALUES (:nom, :phone, :email, :message)');

        $req->execute([
        ':nom' => $this->nom,
        ':phone' => $this->phone,
        ':email' => $this->email,
        ':message' => $this->message]);

$req->closeCursor();
    }
}
