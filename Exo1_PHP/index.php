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
<h2>Exo_1</h2>
<p><b>Créez une boucle qui affiche les nombres de 0 à 10.</b></p>

<?php 
for($i = 0; $i <= 10; $i++) {
    var_dump($i);
}
?>

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

<h2>Exo_3</h2>
<p><b>Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez 'On y est presque'.</b></p>

<?php 

for($i = 1; $i <= 15; $i++) {
    var_dump('On y arrive presque !');
}

?>

<h2>Exo_4</h2>
<p><b>Initialisez une variable à 1. Tant que cette variable est inférieure à 100, incrémentez avec un pas de 15.</b></p>

<?php 
for($i = 1; $i < 100; $i += 15) {
    var_dump('$i += 15');
}

?>

<h2>Exo_5</h2>
<p><b>Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12.</b></p>

<?php

for($i=200; $i>=0; $i -= 12)  {
    var_dump('$i -= 12');
}

?>

<h2>Bonus</h2>
<form>

<select>

<?php 
$tab = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
$tablength = count($tab);
for($i = 0; $i < $tablength; $i++) {
?>
<option><?= $tab[$i] ?></option>
<?php
}
?>
</select>
<?php 
$tab = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
?>
</select>

</form>  
</div>
</body>
</html>