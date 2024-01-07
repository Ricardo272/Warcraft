<?php
require_once "Character.php";

class Hero extends Character
{
    private $name;
    private $weaponName;
    private $weaponDamage;
    private $shieldName;
    private $shieldValue;

    public function __construct($initialHealth, $initialRage, $initialShieldValue, $name, $weaponName, $weaponDamage, $shieldName, $shieldValue)
    {
        parent::__construct($initialHealth, $initialRage, $initialShieldValue);
        $this->name = $name;
        $this->weaponName = $weaponName;
        $this->weaponDamage = $weaponDamage;
        $this->shieldName = $shieldName;
        $this->shieldValue = $shieldValue;
    }

    // Getters
    public function getName()
    {
        return $this->name;
    }

    public function getWeaponName()
    {
        return $this->weaponName;
    }

    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    public function getShieldName()
    {
        return $this->shieldName;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    // Setters
    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function setWeaponName($weaponName)
    {
        $this->weaponName = $weaponName;
    }

    public function setWeaponDamage($weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;
    }

    public function setShieldName($shieldName)
    {
        $this->shieldName = $shieldName;
    }

    public function setShieldValue($shieldValue)
    {
        $this->shieldValue = $shieldValue;
    }

    // Override beAttacked method
    public function beAttacked($damage)
    {
        $remainingDamage = max(0, $damage - $this->getShieldValue());
        $damageTaken = parent::beAttacked($remainingDamage);
        return $damageTaken;
    }
}
?>