<?php

namespace Patterns\Strategy\AdventureGame\Src\Behaviors;

use Patterns\Strategy\AdventureGame\Src\Contracts\Weapon;

class SwordBehavior implements Weapon
{

    /**
     * @return string
     */
    public function useWeapon(): string
    {
        return "Stabbing with a sword";
    }
}