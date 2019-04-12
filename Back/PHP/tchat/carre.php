<?php
echo "<pre>";
var_dump($_GET);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style> #rouge{height:250px; width:250px; background:red;}#jeune{height:250px;width:250px; background:yellow;} </style>
    <title>Document</title>
</head>
<body>
    <div>header</div>
    <hr>
    <a href="?action=click">test click</a>
    <hr>
    <?php
    if(empty($_GET)){  
    ?>
    <div id="rouge"></div>
    <?php }else { ?>
    <div id="jeune"></div>
    <?php } ?>
    <div>footer</div>
</body>
</html>
