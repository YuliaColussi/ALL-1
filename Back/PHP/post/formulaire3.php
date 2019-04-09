<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire 2</title>
</head>
<body>
    <!-- realiser un formulaire HTML(pseudo, email) en récupérant les données directement sur la page formulaire4.php-->
    <form  class="offset-md-3" method="post" action="formulaire4.php">
  <div class="form-row">
          <div class="form-group col-md-6">
            <label for="pseudo">Pseudo</label>
            <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="pseudo">
          </div>
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
        <button type="submit" name="form2" class="col-md-2 btn btn-primary ">Sign in</button>
  </form>
</body>
</html>