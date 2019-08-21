<?php

namespace Patterns\Strategy\DuckExample\Src\Classes;

class MallardDuck extends Duck
{
    public function display()
    {
        return "blue";
    }
}