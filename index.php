<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div></div>
    <h1>Ingresa el pais que quieres saber el clima en ingles</h1>
    <form action="webApi.php" method="post">
            <input type="text" name="pais" id="">
            <input type="submit" value="Enviar">
    </form>
</body>
</html>



<?php

    $pais = isset($_POST['pais']);
    echo $pais

?>