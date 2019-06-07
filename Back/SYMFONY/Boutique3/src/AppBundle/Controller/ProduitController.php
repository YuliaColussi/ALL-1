<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use AppBundle\Entity\Produit;


// 2. Retourner une vue

class ProduitController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    
    
    public function indexAction()
    {
        // 1. Récupérer les infos:
        $repo = $this -> getDoctrine() -> getRepository(Produit::class);
        $produits = $repo -> findAll();
        
        // 1.2 : Récupérer les categories:

        $em = $this -> getDoctrine() -> getManager();

        // create Query: 
        $query = $em -> createQuery("SELECT DISTINCT(p.categorie) FROM AppBundle\Entity\Produit p ORDER BY p.categorie ASC"); // normally we would put produit, but doctrine doesnt work with tables and works only with objects - entities / with ORDER BY we have made that the categories will go by the letter
        $categories = $query -> getResult(); // it's an equivalent to the fetch assoc

        // Query Builder:

        $query = $em -> createQueryBuilder();
        $query
             -> select('p.categorie')
             -> distinct(true)
             -> from(produit::class, 'p')
             -> orderBy('p.categorie', 'ASC');

            //  SELECT DISTINCT(categorie) FROM produit p ORDER BY categorie ASC
            $categories = $query -> getQuery() -> getResult();


        // 2. Retourne une vue:
       $params = array(
           'produits' => $produits,
           'categories' => $categories
       );
       return $this -> render('@App/Produit/index.html.twig', $params); //every time we will send smth to our view - it will be in the params
    }

    /**
     * @Route("/produit/{id}", name="produit")
     * www.maboutique.com/produit/12
     */


    public function produitAction($id)
    {
        //  Méthode 1 : Repository
        $repo = $this -> getDoctrine() -> getRepository(Produit::class);
        $produit = $repo -> find($id); // find is a function that allows us to get a produit from his id

        //  Méthode 2 : EntityManager
        $em = $this -> getDoctrine() -> getManager();
        $produit = $em -> find(Produit::class, $id);




       $params = array(
       'id' => $id,
       'produit' => $produit
       );
       return $this -> render('@App/Produit/show.html.twig', $params);
    }

     /**
     * @Route("/categorie/{cat}", name="categorie")
     * www.maboutique.com/categorie/tshirt
     */
    public function categorieAction($cat)
    {
        // 1. Récuperérer les infos
        $repo = $this ->getDoctrine() -> getRepository(Produit::class);
        $produits = $repo ->findBy(array('categorie' => $cat ));

        $categories = $repo -> getAllCategories();






        // 2. Afficher la vue
       $params = array(

        'produits' => $produits,
        'categories' => $categories

       );
       return $this -> render('@App/Produit/index.html.twig', $params); // here we also have an index cuz its same - a lot of stugg, but filtred
    }

}
