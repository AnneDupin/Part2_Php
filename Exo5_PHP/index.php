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


<h2>Exo_5</h2>
<p><b>Initialisez une variable à 200. Tant que cette variable est supérieure à 0, décrémentez avec un pas de 12.</b></p>

<?php

for($i=200; $i>=0; $i -= 12)  {
    var_dump('$i -= 12');
}

?>

</body>
</html>