<?php


namespace Patterns\Factory\FactoryMethod;


use Exception;
use Patterns\Strategy\AdventureGame\Src\Behaviors\AxeBehavior;
use Patterns\Strategy\AdventureGame\Src\Behaviors\knifeBehavior;
use Patterns\Strategy\AdventureGame\Src\Behaviors\SwordBehavior;
use Patterns\Strategy\AdventureGame\Src\Contracts\Weapon;

class WeaponFactory extends AbstractWeaponFactory
{

    static public function make($situation): Weapon
    {
        if ($situation == "use a sword") {
            return new SwordBehavior();

        } elseif ($situation == "use a knife") {
            return new knifeBehavior();

        } elseif ($situation == "use an axe") {
            return new AxeBehavior();

        } else {
            throw new Exception("not recognised behavior");
        }
    }
}