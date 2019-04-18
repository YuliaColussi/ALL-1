
<?php

echo '<div class="col-md-4 offset-md-4 alert alert-success text-dark mx-auto text-center">';
foreach($_GET as $key => $value)
// echo print_r($_GET);
if($key != 'id')
{
    echo "Vous avez choisy <strong>$value</strong>";
}
echo '</div>'


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