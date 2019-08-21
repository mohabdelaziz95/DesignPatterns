<?php

namespace Patterns\Strategy\AdventureGame\Src\Behaviors;

use Patterns\Strategy\AdventureGame\Src\Contracts\Weapon;

class BowAndArrowBehavior implements Weapon
{

    /**
     * @return string
     */
    public function useWeapon(): string
    {
        return "Throwing arrows";
    }
}