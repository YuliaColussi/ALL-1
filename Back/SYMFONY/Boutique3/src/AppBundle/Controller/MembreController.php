<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Membre;
use AppBundle\Form\MembreType;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
    public function membreInscriptionAction(Request $request, UserPasswordEncoderInterface $encoder) {

        $membre = New Membre;

        $form = $this -> createForm(MembreType::class, $membre);

        $form -> handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid()) {

        $em = $this -> getDoctrine() -> getManager();
        // ----------
        $em -> persist($membre);
        $membre -> setStatut('0');



        $password = $membre -> getPassword();
        // password saisi dans le formulaire

        $password_crypte = $encoder -> encodePassword($membre, $password);
        // J'encode le password

        $membre -> setPassword($password_crypte);

        $membre -> setSalt(NULL);
        $membre -> setRoles(['ROLE_USER']);
        // on définit un role par défault (dans un array)


        $em -> flush();

        $request -> getSession() -> getFlashBag() -> add('success', 'Un memebre est bien ajoutée');

        return $this ->redirectToRoute('connexion');
        }

        $params = array(
            'MembreForm' => $form -> createView()
        );
        return $this -> render('@App/Membre/inscription.html.twig', $params);
    }

    /**
     * @Route("/membre/profil/", name="membre_profil")
     */
    public function membreProfilAction() {
        $params = array();
        return $this -> render('@App/Membre/profil.html.twig', $params);
    }
}

