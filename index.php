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


    echo "<br> Le héros " . $hero->getName() . " utilise " . $hero->getWeaponName() . " qui inflige " . $hero->getWeaponDamage() . " points de dégats ", "<br>Il porte le " . $hero->getShieldName() . " qui lui prodigue " . $hero->getShieldValue() . " points d'armure <br>" . $hero->getName() . " n'a que 1000 points de vie";

    echo "<hr><br> l'Orc a " . $orc->getHealth() . " points de vie, " . $orc->getRage() . " point de rage et est de type " . $orc->getRage();



    while ($hero->isAlive() && $orc->isAlive()) {
        // Le héros attaque l'orc
        $heroAttackValue = $hero->getWeaponDamage(); // Vous pouvez ajuster cette valeur si nécessaire
        $orcDamageReceived = $orc->beAttacked($heroAttackValue);

        // Affichage des informations sur l'attaque du héros et les dégâts reçus par l'orc
        echo $hero->getName() . " attaque de " . $heroAttackValue . ".<br>";
        echo "L'Orc reçoit " . $orcDamageReceived . " de dégâts : Il lui reste " . $orc->getHealth() . " pts de vie.<br>";

        // Vérification si l'orc est mort après l'attaque du héros
        if (!$orc->isAlive()) {
            echo "L'Orc meurt, " . $hero->getName() . " a gagné.<br>";
            break; // Fin du combat
        }

        // L'orc attaque le héros
        $orc->attack();

        // Gestion des dégâts reçus par le héros
        $heroDamageReceived = $hero->beAttacked($orc->getDamage());

        // Affichage des informations sur l'attaque de l'orc et les dégâts reçus par le héros
        echo "L'Orc attaque de " . $orc->getDamage() . ".<br>";
        echo $hero->getName() . " reçoit " . $heroDamageReceived . " de dégâts : Il lui reste " . $hero->getHealth() . " pts de vie.<br>";

        // Vérification si le héros est mort après l'attaque de l'orc
        if (!$hero->isAlive()) {
            echo $hero->getName() . " meurt, l'Orc a gagné.<br>";
            break; // Fin du combat
        }
    }
    ?>
</body>

</html>