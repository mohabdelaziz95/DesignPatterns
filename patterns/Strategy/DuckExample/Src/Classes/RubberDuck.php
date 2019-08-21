<?php


namespace Patterns\Strategy\DuckExample\Src\Classes;

class RubberDuck extends Duck
{
    public function display()
    {
        return "yellow";
    }
}