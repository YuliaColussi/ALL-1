<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
            <h1 class="display-4 text-center">Formulaire 4</h1><hr>
            <?php
            echo '<pre>'; print_r($_POST); echo '</pre>';
            echo '<div class="col-md-2 offset-md-5 alert alert-success text-center mx-auto">';
            foreach($_POST as $key => $value)
            {
                echo "$key : $value<br>";
            }
            echo '</div>';

// EXO : si nous n'avions pas de BDD et que nous voudrions récupérer les emails
// de visiteurs du site, il serait interessant de les enregistrer dans un fishiee.txt
// Il existe des fonctions en php qui permettent de le faire
// fopen() / fwrite() / fclose()

// $value = $_POST['pseudo']; // Здесь будет значение инпута с name атрибутом "value"
// $email =  $_POST['email']; // А здесь с name "email"

$f = fopen('file.txt', 'a'); // Открываем файл
fwrite($f, $_POST['speudo'] . ' - ' . $_POST['email'] . "\r\n"); // Записываем данные
// $f - we can write whatever we want
//"\r\n" allows us to go to another line like enter

fclose($f); //closing file
?>
</body>
</html>