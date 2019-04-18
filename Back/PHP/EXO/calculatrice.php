<?php


if (isset($_POST['summ']))
{
$a = $_POST['a'];
$b = $_POST['b'];
$radio=$_POST['operation'];



if ($radio=='+')
{
    $c = $a + $b; echo "sum =" . $c.'<br>';
}
elseif ($radio=='-')
{
    $d = $a - $b; echo "minus=" . $d.'<br>';
}
elseif ($radio=='*')
{
    $e = $a *$b;  echo  "multipl=" . $e.'<br>';
}
elseif ($radio=='/')
{
    if($b==0)
    {
        echo '<h3>Vous ne pouvez pas devise par 0</h3>';
    }
    else{
           $f = $a / $b; echo "devis=" . $f;
    }
}
else echo "erreur";
}
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Calculatrice :: EXO</title>
</head>
<body>
<h1 class="text-center">Calculatrice</h1>
<form method="post" action="">
<div class="container">
  <div class="form-group">
    <input type="text" class="form-control" name="a">
  </div>
  <div class="form-group">
    <select class="form-control" name="operation">
      <option>+</option>
      <option>-</option>
      <option>*</option>
      <option>/</option>
    </select>
  </div>
    <div class="form-group">
    <input type="text" class="form-control" name="b">
  </div>
  <button type="submit" name="summ" class="col-md-12 btn btn-primary">Calculate</button>
  </form>
  </div>
</body>
</html>