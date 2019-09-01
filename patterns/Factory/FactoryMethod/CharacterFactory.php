<?php


namespace Patterns\Factory\FactoryMethod;


use Patterns\Strategy\AdventureGame\Src\Classes\Knight;

class CharacterFactory extends AbstractCharacterFactory
{

    public static function makeWith($weapon)
    {
        return new Knight($weapon);
    }
}