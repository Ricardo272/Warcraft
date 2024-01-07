<?php
require_once 'Character.php';

class Orc extends Character
{
    private $type;
    private $damage;

    // Liste des types disponibles pour l'Orc
    private $availableTypes = ['feu', 'glace', 'vent', 'eau', 'terre'];
    public function __construct($initialHealth, $initialRage, $type = null)
    {
        parent::__construct($initialHealth, $initialRage, 0); // Ajout d'une valeur de bouclier par défaut à 0
        if ($type === null || !in_array($type, $this->availableTypes)) {
            // Si aucun type n'est spécifié ou si le type n'est pas valide, choisissez aléatoirement un type parmi les types disponibles
            $this->type = $this->availableTypes[array_rand($this->availableTypes)];
        } else {
            $this->type = $type;
        }

        $this->damage = 0; // Initialisation des dégâts à 0

    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($newType)
    {
        $this->type = $newType;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage($newDamage)
    {
        $this->damage = $newDamage;
    }

    public function attack()
    {
        $this->damage = rand(600, 800);
    }
    public function displayInformation()
    {
        echo "health : " . $this->getHealth() . "<br>";
        echo "rage : " . $this->getRage() . "<br>";
        echo "type : " . $this->getType();
    }
}
?>