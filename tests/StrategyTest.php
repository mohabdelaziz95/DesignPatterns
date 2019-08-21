<?php


namespace Patterns\Strategy\tests;


use Patterns\Strategy\AdventureGame\Src\Behaviors\AxeBehavior;
use Patterns\Strategy\AdventureGame\Src\Behaviors\knifeBehavior;
use Patterns\Strategy\AdventureGame\Src\Behaviors\SwordBehavior;
use Patterns\Strategy\AdventureGame\Src\Classes\King;
use Patterns\Strategy\AdventureGame\Src\Classes\Knight;
use Patterns\Strategy\AdventureGame\Src\Classes\Troll;
use Patterns\Strategy\AdventureGame\Src\Contracts\Weapon;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    /** @test */
    function a_troll_stabs_with_a_knife()
    {
        $troll = new Troll(new knifeBehavior());
        $this->assertEquals("Stabbing with a knife", $troll->fight());
    }

    /** @test */
    function a_king_stabs_with_a_sword ()
    {
        $king = new King(new SwordBehavior());
        $this->assertEquals("Stabbing with a sword", $king->fight());
    }

    /** @test */
    function a_knight_may_fight_with_an_axe ()
    {
        $knight = new Knight(new AxeBehavior());
        $this->assertEquals("hitting with an axe", $knight->fight());
    }

    /** @test */
    function a_behavior_may_change_during_run_time ()
    {
        $knight = new Knight(new AxeBehavior());
        $this->assertEquals("hitting with an axe", $knight->fight());

        $knight->setWeapon(new SwordBehavior());
        $this->assertEquals("Stabbing with a sword", $knight->fight());
    }

    /** @test */
    function a_behavior_is_a_type_of_an_interface ()
    {
        $sword = new SwordBehavior();
        $this->assertInstanceOf(Weapon::class, $sword);
    }

    /** @test */
    function a_client_instance_has_a_reference_to_a_behavior_instance ()
    {
        $client = new King(new SwordBehavior());

        $this->assertInstanceOf(SwordBehavior::class, $client->getWeapon());

    }
}