<?php

namespace Patterns\Strategy\DuckExample\Src\Contracts;

interface FlyBehavior
{

    /**
     * @return string
     */
    public function fly () : string;
}