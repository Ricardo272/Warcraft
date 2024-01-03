<?php
class Character
{
    private $health;
    private $rage;

    public function __construct($initialHealth, $initialRage)
    {
        $this->health = $initialHealth;
        $this->rage = $initialRage;
    }
    public function getHealth()
    {
        return $this->health;
    }
    public function getRage()
    {
        return $this->rage;
    }
    public function setHealth($newHealth)
    {
        $this->health = $newHealth;
    }
    public function setRage($newRage)
    {
        $this->rage = $newRage;
    }
    public function isAlive()
    {
        return $this->health > 0;
    }
}


?>