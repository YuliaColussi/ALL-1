<!------------------------ EXO 3.1 -->



<?php

for($i=1; $i<=100; $i++)
{
    echo "$i";
}

?>
<br>
<br>
<br>

<!-- ----------------------------------- EXO 3.2 -->

<?php

for($i=0; $i<=100; $i++)
{
if($i == 50)
  {
     ?>
    <p class="text-danger"><?php echo $i; ?></p> 
    <?php
    }
  else
  {
     ?>
    <p class="text-dark"><?php echo $i ?></p> 
    <?php
    }
  }
?>



<!-- -------------------------EXO :: 3.3 -->

<?php

for($i=2000; $i>=1930; $i--)
{
    ?>
    <p class="text-dark"><?php echo $i; ?></p> 
    <?php
}

?>

<!-- -------------------EXO :: 3.4-- -->

<?php

for($i=1; $i<=100; $i++)
{
    echo "<h3>Titre  à  afficher  100  fois</h3>";
}

?>


<!-- -------------------EXO :: 3.5-- -->

<?php

for($i=1; $i<=100; $i++)
{
    echo "<h3>Je  m'affiche  pour  la "  . $i . " fois</h3>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire membre PHP :: EXO</title>
</head>
<body>


</body>
</html>