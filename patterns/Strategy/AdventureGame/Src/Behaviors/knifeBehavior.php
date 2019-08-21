<?php

namespace Patterns\Strategy\AdventureGame\Src\Behaviors;

use Patterns\Strategy\AdventureGame\Src\Contracts\Weapon;

class knifeBehavior implements Weapon
{

    /**
     * @return string
     */
    public function useWeapon() : string
    {
        return "Stabbing with a knife";
    }
}