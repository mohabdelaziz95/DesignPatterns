<?php

namespace Patterns\Strategy\DuckExample\Src\Behaviors;

use Patterns\Strategy\DuckExample\Src\Contracts\FlyBehavior;

class FlyWithRocketEngine implements FlyBehavior
{

    /**
     * @return string
     */
    public function fly(): string
    {
        return "flying using jet engine";
    }
}