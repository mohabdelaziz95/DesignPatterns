<?php

namespace Patterns\Strategy\DuckExample\Src\Behaviors;

use Patterns\Strategy\DuckExample\Src\Contracts\FlyBehavior;

class FlyWithWings implements FlyBehavior
{

    /**
     * @return string
     */
    public function fly(): string
    {
        return "i can fly with my wings";
    }
}