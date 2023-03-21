<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Esercizzio</title>
    </head>
    <body>

        <?php 

        include 'functions.php';

        $password = $_GET['length'];
        //var_dump($password)
        randomPassword($password);
        ?>

        <form action="" method="GET">
            <input type="text" name="length" placeholder="inserisci la lunghezza password">
            <button type="submit">Invia</button>
        </form>

        <h1>La tua password è :<?php $pass ?></h1>

    </body>
</html>