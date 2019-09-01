<?php


namespace Patterns\Factory;

use Patterns\Strategy\AdventureGame\Src\Classes\Character;

class SimpleCharacterFactory
{
    public static function makeCharacter($character)
    {
        $character = sprintf("Patterns\Strategy\AdventureGame\Src\Classes\%s", ucfirst($character));
        return new $character;
    }
}