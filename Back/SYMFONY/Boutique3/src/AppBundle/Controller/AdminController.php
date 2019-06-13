<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Produit;
use AppBundle\Entity\Membre;
use AppBundle\Entity\Commande;
use AppBundle\Entity\DetailsCommande;

use AppBundle\Form\ProduitType;
use AppBundle\Form\MembreType;

class AdminController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
       
    }
    /**
     * @Route("/admin/produit/", name="admin_produit")
     * www.maboutique.com/admin/***
     */
    public function adminProduitAction()
    {   

    // A faire la guestion des produits :

    // AdminController
    // -> /admin/produit/

    // $produits qui va récupérer tout les produits du site

    // -> list_produit.html.twig
    // -> tableau avec tous les infos des produits
    // -> action : modifier / supprimer



        $repo = $this ->getDoctrine() -> getRepository(Produit::class);
        $produits = $repo ->findAll();
        
       $params = array(

        'produits' => $produits
       );
       return $this -> render('@App/Admin/list_produit.html.twig', $params); 
    }
    /**
     * @Route("/admin/produit/add/", name="admin_produit_add")
     * www.maboutique.com/admin/***
     */
    public function addProduitAddAction(Request $request)
    {
            $produit = new Produit;

            $form = $this -> createForm(ProduitType::class, $produit);// it's a magic line 

            // On crée un formulaire du type produit, et on le lie à notre objet $produit. On dit que le formulaire va hydrater l'objet (les infos du formulaire vont remplir l'objet).
        
            // $produit -> setReference('XXX');
            // $produit -> setCategorie('pull');
            // $produit -> setPublic('m');
            // $produit -> setPrix('25.99');
            // $produit -> setStock('150');
            // $produit -> setTitre('Pull marinière');
            // $produit -> setPhoto('222.jpg');
            // $produit -> setDescription('super');
            // $produit -> setTaille('L');
            // $produit -> setCouleur('blanc et blue');

            $form -> handleRequest($request); // tous que en Post est parti en objet $request / on gérer le $_POST
            // Lier définitivement l'objet $produit au formulaire... Elle permet de traiter les informations en POST

            if($form -> isSubmitted() && $form -> isValid()) { 

            $em = $this -> getDoctrine() -> getManager();
            $em ->persist($produit); // on enregistre dans le systeme l'objet

            $produit -> uploadedPhoto();

            $em -> flush(); // here we insert into BDD

            $request -> getSession() -> getFlashBag() -> add('success', 'le pdoduit ' . $produit -> getId() . ' a bien été ajouté !'); // message de success

            return $this -> redirectToRoute('admin_produit'); // we make a redirection

            }            

            $params = array (
                'produitForm' => $form -> createView()
            );
            // createView() permet de générer la perti visuel (HTML) du formulaire

            // Test : localhost:8000/admin/produit/add
            
   
       return $this -> render('@App/Admin/form_produit.html.twig', $params); 
    }
    /**
     * @Route("/admin/produit/update/{id}/", name="admin_produit_update") //
     * www.maboutique.com/admin/*** we need an id to be able to update a product 
     */
    public function adminProduitUpdateAction($id, Request $request)
    {
        $em = $this -> getDoctrine() -> getManager();

        // Je récupere le produit à modifier :
        $produit = $em ->find(Produit:: class, $id);


        $form = $this -> createForm(ProduitType::class, $produit);
        // En créant le formulaire on le lie à notre objet produit qui va etre modifié. On dit qu'on hydrate le formulaire.
        // // je le modifie
        // $produit -> setPrix('1000');

        $form -> handleRequest($request);

        if($form -> isSubmitted() && $form -> isValid()) { 
        // Je enregistre
        $em -> persist($produit);
        $produit -> uploadedPhoto();
        $em -> flush(); //only Manager can do persist and flush
        $request -> getSession() -> getFlashBag() -> add('success', 'Le produit ' . $produit -> getTitre() . ' a biene été modifié!');
        return $this -> redirectToRoute('admin_produit');
        }





        // Test : localhost:8000/admin/produit/update/11

       $params = array(
           'id' => $id,
           'produitForm' => $form -> createView(),
           'title' => 'Modifier produit ' . $produit -> getTitre(),
           'photo' => $produit -> getPhoto()
       );
       return $this -> render('@App/Admin/form_produit.html.twig', $params); 
    }

    // localhost:8000/admin/produit/update/5


    /**
     * @Route("/admin/produit/delete/{id}/", name="admin_produit_delete") //
     * www.maboutique.com/admin/*** we need an id to be able to delete a product 
     */
    public function adminProduitDeleteAction($id, Request $request)
    {
        // Récupère l'objet produit

        $em = $this -> getDoctrine() -> getManager();
        $produit = $em -> find(Produit::class, $id);

        // Je supprime le produit
        $produit -> removePhoto();
        $em -> remove($produit);
        $em -> flush();

        // Test : localhost:8000/admin/produit/delete/12

       
        $request -> getSession() -> getFlashBag() -> add('success', 'Felicitations, votre produit a bien été supprimée' . $id
        ); //- array GetFlashBag is an endroit where we can find our message
    
       return $this -> redirectToRoute('admin_produit'); 
    }

    /**
     * @Route("/admin/membre/", name="admin_membre")
     */
        public function adminMembreAction() {

            $repo = $this -> getDoctrine() -> getRepository(Membre::class);
            $membres = $repo -> findAll();

            


         $params = array(
             'membres' => $membres,
             'title' => 'liste de membres'
         );
         return $this -> render('@App/Admin/list_membre.html.twig', $params);
     }

     /**
      * @Route("/admin/membre/add/", name="admin_membre_add")
      */
      public function adminMembreAddAction() {

            $repo = $this -> getDoctrine() -> getRepository(Mmebre::class);
            $membres = $repo -> findAll();


          $params = array();
          return $this -> render('@App/Admin/membre_form.html.list', $params);
      }

      /**
       * @Route("/admin/membre/delete/{id}/", name="admin_membre_delete")
       */
      public function adminMembreDeleteAction($id, Request $request) {
          $params = array();
          $request -> getSession() ->getFlashBag() -> add('success', "votre membre est bien supprimée", $id);
          return $this -> redirectToRoute('admin_membre');
      }

      /**
       * @Route("/admin/membre/update/{id}/", name="admin_membre_update")
       * 
       */
      public function adminMembreUpdateAction($id, Request $request) {

        $em = $this -> getDoctrine() -> getManager();

        $membre = $em -> find(Membre::class,$id);

        $form = $this -> createForm(MembreType::class, $membre, ['statut' => 'admin']);
        $password = $membre -> getPassword();

        $form -> handleRequest($request);
        if($form -> isSubmitted() && $form -> valid()){

            $em -> persist($membre);
            $membre -> setPassword($password);
            $em -> flush();

            $request -> getSession() -> getFlashBag() -> add('success', 'Le profil du membre ' . $id . ' a été mis à jour');
            return $this -> redirectToRoute('admin_membre');

        }

          $params = array (
            'id' => $id,
            'membreForm' => $form -> createView()
          );
          return $this -> render('@App/Admin/membre_form.html.twig', $params);
      }

      /**
       * @Route("/admin/commande/", name="admin_commande")
       */
      public function adminCommandeAction() {

          $repo = $this -> getDoctrine() -> getRepository(Commande::class);
          $commandes = $repo -> findAll();


          $params = array(
              'commandes' => $commandes
          );

          return $this -> render('@App/Admin/liste_commande.html.twig', $params);
      }
      /**
       * @Route("/admin/commande/update/{id}/", name="admin_commande_update")
       */
      public function adminCommandeUpdateAction($id) {
          $params = array(
              'id' => $id
          );
          return $this -> render('@App/Admin/commande_form.html.twig', $params);
      }

      /**
       * @Route("/admin/commande/add/", name="admin_commande_add")
       */
      public function adminCommandeAddAction() {
            $produit = new Produit; // on créé un objet Produit and for now it's empty

          $params = array();
          return $this -> render('@App/Admin/commande_form.html.twig', $params);
      }
      /**
       * @Route("/admin/commande/delete/{id}/", name="admin_commande_delete")
       */
      public function adminCommandeDeleteAction($id, Request $request) {
          $params = array();
          $request ->getSession() ->getFlashBag() -> add('success', 'votre commande a bien été supprimé');
          return $this -> redirectToRoute('admin_commande');
      }
}

