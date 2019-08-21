<?php


namespace Patterns\Strategy\AdventureGame\Src\Classes;


use Patterns\Strategy\AdventureGame\Src\Contracts\Weapon;

abstract class Character
{

    /**
     * @var Weapon
     */
    protected $weaponBehavior;

    /**
     * Character constructor.
     * @param $weaponBehavior
     */
    public function __construct(Weapon $weaponBehavior)
    {
        $this->weaponBehavior = $weaponBehavior;
    }

    public function setWeapon (Weapon $weapon)
    {
        $this->weaponBehavior = $weapon;
    }

    public function getWeapon ()
    {
        return $this->weaponBehavior;
    }

    public function fight ()
    {
        return $this->weaponBehavior->useWeapon();
    }

}