<?php

use PHPUnit\Framework\TestCase;
use Neyosoft\Jokes\Factory;

class JokeFactoryTest extends TestCase
{
    
    /** @test */
    public function it_return_inputted_joke()
    {
        $jokes = Factory(['First joke']);

        $joke = $jokes->getRandomJokes();

        $this->assertEquals($joke, "First joke");
    }
}
