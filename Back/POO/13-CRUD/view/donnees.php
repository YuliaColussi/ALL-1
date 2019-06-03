<?php

// echo '<pre>';print_r($fields);echo'</pre>';
// $donnees corresponde à l'indice 'donnees' déclaré dans la méthode render() du controller
?>

<div><a href="?op=add" class="btn btn-large btn-info mb-2"><i class="fas fa-plus"></i>Ajouter une nouvelle donnée</a></div>

<?php echo '<pre>'; print_r($_POST);echo'</pre>'; ?>



<table class="table table-bordered text-center">
<thead>
<tr>
<th>ID</th> 
 <!-- On crée manuellement un champ, nous lavons supprimer au moment de la requete SQL dans EntityRepository -->

<?php foreach($fields as $value): ?>
<th><?= $value['Field'] ?></th>
<?php endforeach; ?>
<th>Détail</th>
<th>Modifier</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>
<?php foreach($donnees as $value): ?>
    <tr>
        <td><?= implode('</td><td>', $value) ?></td>
        <td><a href="?op=select&id=<?= $value[$id] ?>" class="text-warning"><i class="fas fa-info-circle"></i></a></td></th>
        <td><a href="?op=update&id=<?= $value[$id] ?>"  class="text-info"><i class="fas fa-edit"></i></a></td>
        <td><a href="?op=delete&id=<?= $value[$id] ?>" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
    </tr>

<?php endforeach; ?>
</tbody>

</table>
