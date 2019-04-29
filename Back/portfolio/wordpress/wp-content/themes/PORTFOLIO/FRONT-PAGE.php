
<!-- WE WILL USE MOSTLY THE FUNCTIONS OF WORDPRESS -->

<?php get_header() ?>
<!-- /fonction wordpress, permet d'inclure le haut du site, je prends le header.php et Je colle ici -->

<!-- la condition if permet de vérifier si les articles ont été posté, si oui, la boucle while les passent en revue et les affiches -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Le titre h2 permet d'afficher le titre de l'article (the_titlee()) et sont lien URL() -->
<h2 class="display-4 text-center text-dark mt-3"><a href="<?php the_permalink(); ?>"class="alert-link text-dark"><?php the_title(); ?></a></h2>

 <!-- Affiche la Date. -->
 <div class="container">
 <small><?php the_time('F jS, Y'); ?></small>
  <?php the_content(); //  Affiche le corps (Content) de l'Article dans un bloc div. ?>
 </div>

<?php endwhile; else: ?>
<!-- on tombe dans la condition else dans le cas ou aucun article a été posté, donc on affiche la message d'erreur -->
<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<style type="text/css">

/* *{
    margin:0 ;
    padding:0 ;
}

body {
    background: rgba(236, 236, 255, 0.657); 
    overflow-x:hidden;
}

a {
    text-decoration: none !important;
}

.hauteur {
    height: 170px;
}

.h-entetes {
    height: 300px;
}

.ma-section {
    height: 700px;
}

.widget{

    list-style-type: none !important;
}   

.widget img{ 
     display: block; 
     margin: 0 auto; 
 } 


 h1 {
    font-size: 37px;
    line-height: 80px;
    font-family: 'Kaushan Script', cursive;
}

.info {
    text-align: center;
    font-size: 20px;
    line-height: 70px;
}  */


/* MENU */

 /* .menu_header {
    width: 900px;
    margin-right: 400px;
}

.menu_header ul{
    display: flex;
    justify-content: space-around;

}


.menu_header ul li{
    list-style: none;
}

ul.navbar-nav.mr-auto {
    margin-right: 0 !important;
}

.menu_header a {
    color: white !important;
    text-decoration: none;
} */

/* #a2a_follow_widget-2 { 
	   display: block !important; 
     position: relative !important; 
     top: 65px !important; 
     left: 170px;
} 

 .info p{
	margin: 0;
}

.info i::before {
	margin-right: 10px;
}

h1 a {
	color: black;
}

.menu-menu-2-container a{
	color: white;	
	font-size: 18px;
}

.menu-menu-2-container li { 
	list-style: none;
	text-decoration: none;
	}
 
.menu-menu-2-container { 
	 display: block !important; 
     position: relative !important;
     top: 40px !important; 
     left: 115px;
}  


.wp-image-10.aligncenter { 
	display: block !important;
     position: relative !important;
     bottom: 12px !important; 
     left: 5px;
}   */

/* FOOTER */



/* ICONS */


</style>


<?php get_footer() ?>
<!-- pareil pour la footer -->