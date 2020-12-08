<?php

require_once 'Hewan.php';

trait Fight
{
    public $attackPower;
    public $defensePower;

    public function getAttackPower()
    {
        return $this->attackPower;
    }

    public function setAttackPower($value)
    {
        $this->attackPower = $value;
    }

    public function getDefensePower()
    {
        return $this->defensePower;
    }

    public function setDefensePower($value)
    {
        $this->defensePower = $value;
    }

    abstract public function serang($attackTo);
    abstract public function diserang($attackFrom);
}
