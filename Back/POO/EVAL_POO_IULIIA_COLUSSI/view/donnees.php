

<?php echo '<pre>'; print_r($_POST);echo'</pre>'; ?>


 <div class="container">
<nav class="navbar navbar-expand-lg text-light bg-dark">
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link text-light active" href="?op=conducteur">Conducteur</a>
      <a class="nav-item nav-link active text-light"  href="?op=association">Association_vehicule_conducteur</a>
      <a class="nav-item nav-link active text-light" href="?op=vehicule">Vehicule</a>
    </div>
  </div>
</nav>
</div>
<br>

<table class="table table-bordered text-center">
<thead>
<tr>
<th>ID</th> 
<?php foreach($fields as $value): ?>
<th><?= $value['Field'] ?></th>
<?php endforeach; ?>
<th>Modifier</th>
<th>Supprimer</th>
</tr>
</thead>
<tbody>
<?php foreach($donnees as $value): ?>
    <tr>
        <td><?= implode('</td><td>', $value) ?></td>
        <td><a href="?op=select&id=<?= $value[$id] ?>"  class="text-info"><i class="fas fa-edit"></i></a></td>
        <td><a href="?op=delete&id=<?= $value[$id] ?>" class="text-danger"><i class="fas fa-trash-alt"></i></a></td>
    </tr>

<?php endforeach; ?>
</tbody>

</table>
