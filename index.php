<?php

require './connect.php';

$query = 'SELECT id, nume, prenume, nr_telefon, email FROM phpform ORDER BY id';
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
       <form metod="post" action="redirect.php">
        <div class="form">
            <div class="title">Buna!</div>
            <div class="subtitle">Am nevoie de cateva date despre tine! </div>
            <div class="subtitle2">(nu te speria, nu le fur)</div>
            <div class="input-container margin1">
              <input id="nume" class="input" type="text" placeholder=" " />
              <div class="cut"></div>
              <label for="nume" class="placeholder">Nume</label>
            </div>
            <div class="input-container margin2">
              <input id="prenume" class="input" type="text" placeholder=" " />
              <div class="cut"></div>
              <label for="prenume" class="placeholder">Prenume</label>
            </div>
            <div class="input-container margin2">
              <input id="email" class="input" type="text" placeholder=" " />
              <div class="cut"></div>
              <label for="nr_telefon" class="placeholder">Numarul de telefon</label>
            </div>
            <div class="input-container margin2">
              <input id="email" class="input" type="text" placeholder=" " />
              <div class="cut cut-short"></div>
              <label for="email" class="placeholder">Email</>
            </div>
            <a href="redirect.php"><button type="submit" class="submit">Trimite datele </button></a>
          </div>
       </form>
        
        
    </body>
</html>


