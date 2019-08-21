<?php

namespace Patterns\Strategy\DuckExample\Src\Behaviors;

use Patterns\Strategy\DuckExample\Src\Contracts\QuackBehavior;

class MuteQuack implements QuackBehavior
{

    /**
     * @return string
     */
    public function quack(): string
    {
        return "Quack muted";
    }
}