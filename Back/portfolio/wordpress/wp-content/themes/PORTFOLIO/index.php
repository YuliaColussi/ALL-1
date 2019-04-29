
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





<?php get_footer() ?>
<!-- pareil pour la footer -->