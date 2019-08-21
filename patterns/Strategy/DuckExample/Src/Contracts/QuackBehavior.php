<?php

namespace Patterns\Strategy\DuckExample\Src\Contracts;

interface QuackBehavior
{

    /**
     * @return string
     */
    public function quack () : string;
}