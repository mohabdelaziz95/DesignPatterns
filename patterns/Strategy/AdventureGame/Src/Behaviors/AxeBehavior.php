<?php

namespace Patterns\Strategy\AdventureGame\Src\Behaviors;

use Patterns\Strategy\AdventureGame\Src\Contracts\Weapon;

class AxeBehavior implements Weapon
{

    /**
     * @return string
     */
    public function useWeapon() : string
    {
        return "hitting with an axe";
    }
}