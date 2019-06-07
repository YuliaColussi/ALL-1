<?php

namespace POLES\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil") 
     */
    public function indexAction()
    {
        // return $this->render('POLESTestBundle:Default:index.html.twig');
        return $this->render('@POLESTest/Default/index.html.twig');
    }

    // route - url, la nouvelle page

    // Par default its all in commentaires, unless you add @ infront

    // syntaxe : always ** , no ;  simple cot and not quote 

    /**
     * @Route("/bonjour/") 
     * localhost:8000/bonjour
     * www.maboutique.com/bonjour
     */
    public function bonjourAction() {

        echo 'Bonjour';
        
    }
    
    // test : localhost:8000/bonjour


     /**
     * @Route("/bonjour2/") 
     * 
     */
    public function bonjour2Action() {

        return new Response('<h1>Bonjour</h1>');
    }

    // test : http://localhost:8000/bonjour2/




    /**
     * @Route("/hello/{prenom}/") 
     * 
     */
    public function helloAction($id) {

        return new Response('<h3>Hello ' . $id . '!</h3>');
    }

    // test : http://localhost:8000/hello/Iuliia/
    // test : http://localhost:8000/produit/25/


    /**
     * @Route("/hola/{prenom}") 
     * 
     */
    public function holaAction($prenom) {

        $params = array(

            'prenom' => $prenom
        );

        return $this->render("@POLESTest/Default/hola.html.twig", $params); // render() goues to look for 'view' so we can change the way it looks like
    }

    // public function holaAction($prenom) {

    //     return $this->render("@POLESTest/Default/hola.html.twig", $array(  //another version

    //            'prenom' => $prenom
    //            'prenom' => $prenom
    //            'prenom' => $prenom

    //     ));
    // }


    /**
     * @Route("/ciao/{prenom}/{age}") 
     * 
     */
    public function ciaoAction($prenom, $age) {

        return $this->render('@POLESTest/Default/ciao.html.twig', array(
             'prenom' => $prenom,
             'age' => $age,
            //  return new Response ('Vous vous appelez' . $prenom . 'et vous avez' . $age . 'ans!');
            )); // 
    }



    /**
     * @Route("/redirect/") 
     * Redirection vers l'accueil
     */
    public function redirectAction() {
        $route = $this -> get('router') -> generate('accueil'); // this stuff allows us to change our urls and stuff , but all the links pointing at our page will make an automatical redicrection
        return new RedirectResponse($route);
        // $route = $this -> getRouter() -> generate();
        // test : localhost: 8000/redirect/ ---> Accueil
    }

    // -------------------------EASIER METHODE FOR REDIRECT------------------

    /**
     * @Route("/redirect2/") 
     *
     */

     public function redirect2Action() {
        return $this -> redirectToRoute('accueil');

     }

    /**
     * @Route("/message/") 
     *
     */
        public function messageAction(Request $request) { // we dont have it yet anywhere and we need ti declare it above with use
            
            $session = $request -> getSession();
            $session -> getFlashBag() -> add('success', 'Felicitations, vous etes inscrit'); //- array GetFlashBag is an endroit where we can find our message
            $session -> getFlashBag() -> add('error', 'Votre address email n\'est pas validée'); //-array

            return $this -> redirectToRoute('accueil');

            // test : localhost:8000/message ---> redirection vers l'accueil

     }

}

