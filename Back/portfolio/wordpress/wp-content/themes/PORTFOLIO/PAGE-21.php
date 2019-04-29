
<!-- WE WILL USE MOSTLY THE FUNCTIONS OF WORDPRESS -->

<?php get_header() ?>
<!-- /fonction wordpress, permet d'inclure le haut du site, je prends le header.php et Je colle ici -->

<!-- la condition if permet de vérifier si les articles ont été posté, si oui, la boucle while les passent en revue et les affiches -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else: ?>
<!-- on tombe dans la condition else dans le cas ou aucun article a été posté, donc on affiche la message d'erreur -->
<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<div class="container">

<div class="col-md-12 box">
<div class="row">

<div class="col-md-8">
<figure class="wp-block-image"><img src="http://localhost/ALL/Back/portfolio/wordpress/wp-content/uploads/2019/04/barbershop-preview-2.jpg" alt="" class="wp-image-194"/></figure>
</div>

<div class="col-md-4">
    <h3>Project details</h3>
<h5>My last projest Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour.</h5>
</div>
</div>
</div>

<div class="col-md-12 box">
<div class="row">

<div class="col-md-4">
    <h3>Project details</h3>
<h5>My last projest Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour .</h5>
</div>


<div class="col-md-8">
<figure class="wp-block-image"><img src="http://localhost/ALL/Back/portfolio/wordpress/wp-content/uploads/2019/04/Capteeure-2.png" alt="" class="wp-image-206"/></figure>
</div>

</div>
</div>


<div class="col-md-12 box">
<div class="row">
<div class="col-md-8">
<figure class="wp-block-image"><img src="http://localhost/ALL/Back/portfolio/wordpress/wp-content/uploads/2019/04/site1-3-1024x553.png" alt="" class="wp-image-204"/></figure>
</div>

<div class="col-md-4">
<h3>Project details</h3>
<h5>My last projest Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour.</h5>
</div>

</div>
</div>
</div>

<style type="text/css">



body {
    background-color: mistyrose;
}

.box {
    margin-top: 40px;
}

.wp-block-image img {
    width: 100%
}


.wp-block-image img:hover{
    width: 100%;
    background-color: rgba(236, 236, 255, 0.657); 
}

h5 {
    display: block;
    position: relative;
    top: 30px;
}

</style>

<?php get_footer() ?>
<!-- pareil pour la footer -->