<?php
require_once('include/init.php');

if(!internauteEstConnecte())// Si l'internaute NEST PAS (!) connecté,il n'a rien à faire sur la page profil, on le redirige vers la page connexion.
{
    header("Location: connexion.php");
}

require_once('include/header.php');


echo '<pre>'; echo print_r($_SESSION); echo '</pre>' 
?>


<!-- Exo: afficher le pseudo de l'internaute en passont par le fishier SESSION -->
<h1 class="display-4 text-center">Bonjour <strong class="text-info"><?=$_SESSION['membre']['pseudo']; ?></strong></h1><hr>


<!-- Réaliser une page profil en affichante toute les données de l'internaute contenu dans la session sauf l'id_membre et le statut-->

<?php 

// if($_SESSION['membre'] != 'id_membre' && $_SESSION['membre'] != 'statut')
// {
    
    //     foreach($_SESSION as $key => $tab)
    //     {
        //         foreach($tab as $key2 => $value)
        //         {
            //             echo '<div class="col-md-4 offset-md-4 alert alert-success text-dark mx-auto text-center">' . $key2 . '=>' . $value . '<br></div>';
            //         }
            //         echo '</div>';
            //     }
            //     echo '<hr>';
            // }
            
            ?>

<table class="table table-dark">
<!-- les ":" et endif / endforeach remplace les accolades {} -->
<?php foreach($_SESSION['membre'] as $key => $value): ?>
<?php if($key != 'id_membre' && $key != 'statut'): ?>
<th><?= $key ?></th><td><?= $value ?></td>
<?php endif; ?>
</tr>
<?php endforeach; ?>

</table>
<?php
// si le statut dans la session, donc dans la bdd est à 1, cela veut dire que l'on est administateur du site, sinon 
if($_SESSION['membre']['statut'] == 1)
    $statut = 'ADMIN';
else {// sinon on tombe dans le else li le statut est agale à 0, donc ca vous dire que voue etes juste la membte normal
    $statut = 'MEMBRE'; 
}
?>
<h3 class="text-center">Vous etes <strong class="text-info"><?= $statut ?></strong> du site</h3><br><br><br>

?>


<?php
require_once('include/footer.php');
?>