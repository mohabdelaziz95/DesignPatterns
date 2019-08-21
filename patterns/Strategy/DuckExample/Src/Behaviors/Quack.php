<?php

namespace Patterns\Strategy\DuckExample\Src\Behaviors;

use Patterns\Strategy\DuckExample\Src\Contracts\QuackBehavior;

class Quack implements QuackBehavior
{

    /**
     * @return string
     */
    public function quack(): string
    {
        return "quack quack quack...";
    }
}