<?php


namespace Patterns\Factory\FactoryMethod;


use Patterns\Strategy\AdventureGame\Src\Contracts\Weapon;

abstract class AbstractWeaponFactory
{
    /*factory method */
    abstract static public function make($situation) : Weapon;
}