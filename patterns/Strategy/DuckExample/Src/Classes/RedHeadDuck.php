<?php

namespace Patterns\Strategy\DuckExample\Src\Classes;

use Patterns\Strategy\DuckExample\Src\Contracts\FlyBehavior;

class RedHeadDuck extends Duck
{
    public function display()
    {
        return "red";
    }
}