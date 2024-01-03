<?php
require_once("Character.php");
require_once("Hero.php");
require_once("Orc.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $hero = new Hero(1000, 0, "Capt'n Rickson", "Dev's Gun", 250, "Dev's Shield", 450);
    $orc = new Orc(2000, 0, "feu");


    echo "<br> Le héros " . $hero->getName() . " porte l'arme " . $hero->getWeaponName() . " et l'armure " . $hero->getShieldName();

    while ($hero->hasNext()) {
    }

    ?>
</body>

</html>