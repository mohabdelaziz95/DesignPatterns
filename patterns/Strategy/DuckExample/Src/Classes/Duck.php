<?php

namespace Patterns\Strategy\DuckExample\Src\Classes;

use Patterns\Strategy\DuckExample\Src\Contracts\FlyBehavior;
use Patterns\Strategy\DuckExample\Src\Contracts\QuackBehavior;

abstract class Duck
{
    /**
     * @var FlyBehavior
     */
    protected $flyBehavior;

    /**
     * @var QuackBehavior
     */
    protected $quackBehavior;


    /**
     * Duck constructor.
     * @param  FlyBehavior  $flyBehavior
     * @param  QuackBehavior  $quackBehavior
     */
    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public function setFLyBehavior (FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior (QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function fly ()
    {
        return $this->flyBehavior->fly();
    }

    public function quack ()
    {
        return $this->quackBehavior->quack();
    }

    public function swim ()
    {
        return "swim";
    }

    public abstract function display ();
}