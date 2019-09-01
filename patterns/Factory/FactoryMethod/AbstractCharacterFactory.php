<?php


namespace Patterns\Factory\FactoryMethod;


abstract class AbstractCharacterFactory
{
    abstract public static function makeWith ($weapon);
}