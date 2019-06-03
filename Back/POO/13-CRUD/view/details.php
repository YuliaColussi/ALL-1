

<table class="table table-bordered text-center">
<thead>
<tr>
 <!-- On crée manuellement un champ, nous lavons supprimer au moment de la requete SQL dans EntityRepository -->

<?php foreach($donnees as $tab => $value): ?>
<th><?= $tab ?></th>
<?php endforeach; ?>
</tr>
</thead>
<tbody>
<?php foreach($donnees as $value): ?>
<td><?= $value?></td>
<?php endforeach; ?>
</tbody>
</table>
