<?php
class Character
{
    private $health;
    private $rage;
    private $shieldValue;

    public function __construct($initialHealth, $initialRage, $initialShieldValue)
    {
        $this->health = $initialHealth;
        $this->rage = $initialRage;
        $this->shieldValue = $initialShieldValue;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    public function setShieldValue($newShieldValue)
    {
        $this->shieldValue = $newShieldValue;
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

    public function beAttacked($damage)
    {
        $remainingDamage = max(0, $damage - $this->shieldValue); // Calcul des dégâts restants après avoir utilisé le bouclier
        $this->shieldValue = max(0, $this->shieldValue - $damage); // Réduction du bouclier
        $this->health = max(0, $this->health - $remainingDamage); // Réduction des points de vie
        return $remainingDamage;
    }

}
?>