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
<h2>Exo_3</h2>
<p><b>Créez une variable initialisé à 1. Tant que cette variable n'a pas atteint 15, affichez 'On y est presque'.</b></p>

<?php 

for($i = 1; $i <= 15; $i++) {
    var_dump('On y arrive presque ;)');
}

?>

</div>
</body>
</html>