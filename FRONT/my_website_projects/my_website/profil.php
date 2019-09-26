<?php
require_once('include/init.php');
require_once('include/header_website.php');

if(!internauteEstConnecte())
{
    header("Location: index.php");
}




?>

<h4 class="display-4 text-center">Bonjour <strong class="text-danger"><?=$_SESSION['member_form']['pseudo']; ?></strong></h4><hr>

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

<h4 class="text-center">Vous etes <strong class="text-danger"><?= $statut ?></strong> du site</h4><br><br><br>

<ul class="col-md-6 offset-md-3 list-group mt-2 text-center profil">
            <li class="list-group-item"><a class="alert-link text-light" href="<?= URL ?>admin/gestion_projects.php">Gestion de Projects</a></li>
            <li class="list-group-item"><a class="alert-link text-light" href="<?= URL ?>admin/gestion_membre.php">Gestion de Membre</a></li>
            <li class="list-group-item"><a class="alert-link text-light" href="<?= URL ?>admin/gestion_messages.php">Gestion de Messages</a></li>

</ul>
<br>
<br>
</div>

<?php
require_once('include/footer.php');
?>