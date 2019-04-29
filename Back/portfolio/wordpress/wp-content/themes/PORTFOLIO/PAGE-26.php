
<!-- WE WILL USE MOSTLY THE FUNCTIONS OF WORDPRESS -->

<?php get_header() ?>
<!-- /fonction wordpress, permet d'inclure le haut du site, je prends le header.php et Je colle ici -->

<!-- la condition if permet de vérifier si les articles ont été posté, si oui, la boucle while les passent en revue et les affiches -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2 class="display-4 text-center text-dark mt-3"><a href="<?php the_permalink(); ?>"class="alert-link text-dark"><?php the_title(); ?></a></h2>

<div class="container">
<div class="row news">
<div class="col-md-6">
 <img src="http://localhost/ALL/Back/portfolio/wordpress/wp-content/uploads/2019/04/web-development-t-1024x538.jpg" alt=""/>
  </div>
  <div class="col-md-6 inside-news">
    <h5 class="card-title">Название карточки</h5>
    <p class="card-text">My last projest Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour </p>
    <a href="#" class="btn btn-primary">Переход куда-нибудь</a>
  </div>
</div>

<div class="row news">
<div class="col-md-6">
 <img src="http://localhost/ALL/Back/portfolio/wordpress/wp-content/uploads/2019/04/web-development-t-1024x538.jpg" alt=""/>
  </div>
  <div class="col-md-6 inside-news">
    <h5 class="card-title">Название карточки</h5>
    <p class="card-text">My last projest Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour </p>
    <a href="#" class="btn btn-primary">Переход куда-нибудь</a>
  </div>
</div>



</div>

<?php endwhile; else: ?>
<!-- on tombe dans la condition else dans le cas ou aucun article a été posté, donc on affiche la message d'erreur -->
<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<style type="text/css">



body {
    background-color: #08415C;
}

.container img {
    width: 100%;
 }

.news {
    margin-top: 60px;
    color: white;
    border: white solid 2px;
    padding: 20px;
}

.news:last-child {
    margin-bottom: 60px;

}

.text-dark {
    color: white !important;
}

.btn-primary {
    background-color: #CC2936;
    border: none;
}

.inside-news {
    position: relative;
    top: 50px;
}

</style>




<?php get_footer() ?>
<!-- pareil pour la footer -->