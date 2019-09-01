<?php


namespace Patterns\Factory;


use Exception;
use Patterns\Strategy\AdventureGame\Src\Behaviors\AxeBehavior;
use Patterns\Strategy\AdventureGame\Src\Behaviors\knifeBehavior;
use Patterns\Strategy\AdventureGame\Src\Behaviors\SwordBehavior;

class SimpleWeaponBehaviorFactory
{
    public static function createAction ($situation)
    {
        if ($situation == "use a sword") {
            return new SwordBehavior();

        } elseif ($situation == "use a knife") {
            return new KnifeBehavior();

        } elseif ($situation == "use an axe") {
             return new AxeBehavior();

        } else {
            throw new Exception("not recognised behavior");
        }

    }
}