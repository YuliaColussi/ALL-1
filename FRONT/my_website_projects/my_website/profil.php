<?php
require_once('include/init.php');

if(!internauteEstConnecte())
{
    header("Location: index.php");
}


require_once('include/header.php');


?>

<h2 class="display-4 text-center">Bonjour<strong class="text-info"><?=$_SESSION['member_form']['pseudo']; ?></strong></h2><hr>

<div class="container">
<table class="table table-dark">
<?php foreach($_SESSION['member_form'] as $key => $value): ?>
<?php if($key != 'id_membre' && $key != 'statut'): ?>
<th>
<?= $key ?>
</th>
<td>
<?= $value ?>
</td>
<?php endif; ?>
</tr>
<?php endforeach; ?>

</table>
<?php

if($_SESSION['member_form']['statut'] == 1)
    $statut = 'ADMIN';
else {
    $statut = 'MEMBRE'; 
}

?>

<h2 class="text-center">Vous etes <strong class="text-info"><?= $statut ?></strong> du site</h2><br><br><br>

<ul class="col-md-6 offset-md-3 list-group mt-2 text-center">
            <li class="list-group-item"><a class="alert-link text-dark" href="<?= URL ?>admin/gestion_projects.php">Gestion de Projects</a></li>
            <li class="list-group-item"><a class="alert-link text-dark" href="<?= URL ?>admin/gestion_membre.php">Gestion de Membre</a></li>
            <li class="list-group-item"><a class="alert-link text-dark" href="<?= URL ?>admin/gestion_messages.php">Gestion de Messages</a></li>

</ul>
</div>

<?php
require_once('include/footer.php');
?>