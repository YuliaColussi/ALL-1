<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MembreController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       
    }

    /**
     * @Route("membre/inscription/", name="membre_inscription")
     * 
     */
    public function membreInscriptionAction() {
        $params = array();
        return $this -> render('@App/Membre/inscription.html.twig', $params);
    }

    /**
     * @Route("/membre/connexion/", name="membre_connexion")
     */
    public function membreConnectionAction() {
        $params = array();
        return $this -> render('@App/Membre/connexion.html.twig', $params);
    }

    /**
     * @Route("/membre/profil/", name="membre_profil")
     */
    public function membreProfilAction() {
        $params = array();
        return $this -> render('@App/Membre/profil.html.twig', $params);
    }
}

