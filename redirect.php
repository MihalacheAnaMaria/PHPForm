<?php

require './connect.php';

$query = "SELECT id, nume, prenume, nr_telefon, email FROM phpform ORDER BY id";
$resultObj = $connection->query($query);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form">
        <div class="title2">Aici sunt datele 'furate'</div>
        <?php while($row=$resultObj->fetch_assoc()) : ?>
            <div class="input-container margin2 ">
            <ul>
                <li>
                <?=$row['id']?>
                </li>
                <ul>
                <li>
                <?=$row['nume']?>
                </li>
                <li>
                <?=$row['prenume']?>
                </li>
                <li>
                <?=$row['nr_telefon']?>
                </li>
                <li>
                <?=$row['email']?>
                </li>
            </div>
            </ul>
        <?php endWhile; ?>
        </div>
        <a href="index.php"><button type="text" class="submit">Hai inapoi sa mai adaugam niste date </button></a>
    </body>
</html>

<?php

$resultObj->close();
$connection->close();

?>