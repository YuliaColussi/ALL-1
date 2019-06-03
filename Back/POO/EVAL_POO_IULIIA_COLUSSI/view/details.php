

<table class="table table-bordered text-center">
<thead>
<tr>

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

