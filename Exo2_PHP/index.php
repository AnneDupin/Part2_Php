<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1_Partie_1_PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
</head>

<body>

<header>
<div class="header__fixed">
            <h1>PHP PARTIE 1</h1>
        </div>
</header>

<div class="contenu">

<h2>Exo_2</h2>
<p><b>Créez deux variables. L'une initialisée à 0 et l'autre avec un nombre aléatoire de 1 à 100. Tant que la variable n'a pas atteint 20, multiplier la première variable par la deuxième est afficher le résultat.</b></p>

<?php 

$a = 0;
$b = 51;
while ($a <= 20) {
    var_dump($a*$b);
    $a++;
}
?>
</div>
</body>
<html></html>