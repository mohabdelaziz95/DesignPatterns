<?php
require "vendor/autoload.php";

use Patterns\Factory\FactoryMethod\CharacterFactory;
use Patterns\Factory\FactoryMethod\WeaponFactory;

/**
 * ------------ Strategy Pattern DuckExample ------------
*/
/*$mallard_duck = new MallardDuck(new FlyWithWings(), new Quack());
$rubber_duck = new RubberDuck(new FlyNoWay(), new Quack());

dump($rubber_duck->quack());
$rubber_duck->setQuackBehavior(new Squeak());
dump($rubber_duck->quack());*/
/**
 * ------------ Strategy Pattern DuckExample ------------
 */

/**
 * ------------ Strategy Pattern AdventureGame ------------
 */

/*echo "plz provide a valid situation";

$situation = fgets(STDIN);;

if ($situation == "use a sword") {
    $knight = new Knight(new SwordBehavior());

} elseif ($situation == "use a knife") {
    $knight = new Knight(new knifeBehavior());

} elseif ($situation == "use an axe") {
    $knight = new Knight(new AxeBehavior());

} else {
    throw new Exception("not recognised behavior");
}

dd($knight->fight());
/**
 * ------------ Strategy Pattern AdventureGame ------------
 */



/**
 * ------------ Simple Factory AdventureGame ------------
 */
//echo "plz provide a valid situation: \n" ;
//
//$situation = str_replace("\n", '', fgets(STDIN));
//$character = SimpleCharacterFactory::makeCharacter('knight');
//
//try {
//    $knight = SimpleWeaponBehaviorFactory::createAction($situation, $character);
//} catch (Exception $e) {
//    dump($e->getMessage());
//}
//
//
//dd($knight->fight());*/

/**
 * ------------ Simple Factory AdventureGame ------------
 */

/**
 * ------------ Factory Method Pattern ------------
 */

echo "plz provide a valid situation: \n" ;

$situation = str_replace("\n", '', fgets(STDIN));

try {
    $weapon = WeaponFactory::make($situation);
} catch (Exception $e) {
    dump($e->getMessage());
}
$character = CharacterFactory::makeWith($weapon);

dd($character->fight());

/**
 * ------------ Factory Method Pattern ------------
 */