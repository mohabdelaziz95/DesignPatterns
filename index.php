<?php
require "vendor/autoload.php";

use Patterns\Strategy\AdventureGame\Src\Behaviors\AxeBehavior;
use Patterns\Strategy\AdventureGame\Src\Behaviors\knifeBehavior;
use Patterns\Strategy\AdventureGame\Src\Behaviors\SwordBehavior;
use Patterns\Strategy\AdventureGame\Src\Classes\King;
use Patterns\Strategy\AdventureGame\Src\Classes\Knight;
use Patterns\Strategy\AdventureGame\Src\Classes\Queen;
use Patterns\Strategy\AdventureGame\Src\Classes\Troll;
use Patterns\Strategy\DuckExample\Src\Behaviors\FlyNoWay;
use Patterns\Strategy\DuckExample\Src\Behaviors\FlyWithWings;
use Patterns\Strategy\DuckExample\Src\Behaviors\Quack;
use Patterns\Strategy\DuckExample\Src\Behaviors\Squeak;
use Patterns\Strategy\DuckExample\Src\Classes\MallardDuck;
use Patterns\Strategy\DuckExample\Src\Classes\RubberDuck;


/**
 * ------------ Strategy Pattern DuckExample ------------
*/
$mallard_duck = new MallardDuck(new FlyWithWings(), new Quack());
$rubber_duck = new RubberDuck(new FlyNoWay(), new Quack());

//dump($rubber_duck->quack());
//$rubber_duck->setQuackBehavior(new Squeak());
//dump($rubber_duck->quack());
/**
 * ------------ Strategy Pattern DuckExample ------------
 */

/**
 * ------------ Strategy Pattern AdventureGame ------------
 */

$king = new King(new AxeBehavior());
dump($king->fight());
/**
 * ------------ Strategy Pattern AdventureGame ------------
 */