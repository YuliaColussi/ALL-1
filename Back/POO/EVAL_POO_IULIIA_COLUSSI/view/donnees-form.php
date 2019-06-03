<?php

echo '<pre>';print_r($_POST);echo'</pre>';

echo '<pre>'; print_r($values);echo'</pre>'; 
// echo '<pre>'; print_r($fields);echo'</pre>'; 

?>



<form method="post" class="col-md-6 offset-md-3 text-center">

    <?php foreach($fields as $value): ?>

        <div class="form-group">
            <label for="<?= $value['Field'] ?>"><?= $value['Field'] ?></label>

            <input type="text" class="form-control" id="<?= $value['Field'] ?>" name="<?= $value['Field'] ?>" placeholder="Enter <?= $value['Field'] ?>" value="<?= ($op == 'select') ? $values[$value['Field']] : '' ?>">
        
        </div>

    <?php endforeach; ?>

    <input type="submit" class="col-md-12 btn btn-dark mb-2">
</form>


<form method="post" class="container">
<h2>Ajouter un conducteur</h2>
  <div class="form-group">
    <label for="prenom">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prenom">
  </div>
  <div class="form-group">
    <label for="prenom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
  </div>
  <button type="submit1" class="btn btn-primary">Ajouter</button>
</form>

<form class="container" method="post">
<h2>Ajouter un vehicule</h2>
  <div class="form-group">
    <label for="prenom">Marque</label>
    <input type="text" class="form-control" id="marque" name="marque" placeholder="Votre marque">
  </div>
  <div class="form-group">
    <label for="prenom">Modele</label>
    <input type="text" class="form-control" id="modele" name="modele" placeholder="Votre modele">
  </div>
  <div class="form-group">
    <label for="prenom">Couleur</label>
    <input type="text" class="form-control" id="couleur" name="couleur" placeholder="Votre couleur">
  </div>
  <div class="form-group">
    <label for="prenom">Immatriculation</label>
    <input type="text" class="form-control" name="immatriculation" id="immatriculation" placeholder="Votre mmatriculation">
  </div>
  <button type="submit2" class="btn btn-primary">Ajouter</button>
</form>
<form class="container" method="post">
<h2>Ajouter un association</h2>
  <form class="container">
  <div class="form-group">
    <label for="conducteur">Choisir le conducteur</label>
    <select class="form-control" id="conducteur" name="conducteur">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="vehicule">Choisir le vehicule</label>
    <select class="form-control" id="vehicule" name="vehicule">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="submit3" class="btn btn-primary">Ajouter</button>
</form>