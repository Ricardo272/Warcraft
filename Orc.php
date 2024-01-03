<?php

require_once 'Character.php';

class Orc extends Character
{
    private $type;
    private $damage;
    public function __construct($initialHealth, $initialRage, $type, )
    {
        parent::__construct($initialHealth, $initialRage);
        $this->type = $type;
        echo "health : " . $this->getHealth() . "<br>";
        echo "rage : " . $this->getRage() . "<br>";
        echo "type : " . $this->getType();
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
}

?>