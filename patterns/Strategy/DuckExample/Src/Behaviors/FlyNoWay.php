<?php

namespace Patterns\Strategy\DuckExample\Src\Behaviors;

use Patterns\Strategy\DuckExample\Src\Contracts\FlyBehavior;

class FlyNoWay implements FlyBehavior
{

    /**
     * @return string
     */
    public function fly(): string
    {
        return "i cannot fly";
    }
}