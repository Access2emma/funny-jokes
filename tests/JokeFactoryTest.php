<?php

use Jokes\Factory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_return_inputted_joke()
    {
        $jokes = new Factory(['First joke']);

        $joke = $jokes->getRandomJokes();

        $this->assertEquals($joke, 'First joke');
    }
}
