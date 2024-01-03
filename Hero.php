<?php
require_once "Character.php";
class Hero extends Character
{
    private $name;
    private $weaponName;
    private $weaponDamage;
    private $shieldName;
    private $shieldValue;

    public function __construct($initialHealth, $initialRage, $name, $weaponName, $weaponDamage, $shieldName, $shieldValue)
    {
        parent::__construct($initialHealth, $initialRage);
        $this->name = $name;
        $this->weaponName = $weaponName;
        $this->weaponDamage = $weaponDamage;
        $this->shieldName = $shieldName;
        $this->shieldValue = $shieldValue;

    }
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
    public function setName($newName)
    {
        $this->newName = $newName;
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
    public function beAttacked($damage)
    {
        $remainingDamage = max(0, $damage - $this->shieldValue);

        $this->health = max(0, $this->health - $remainingDamage);

        return $remainingDamage;
    }
}
?>