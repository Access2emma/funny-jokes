<?php

use Neyosoft\Jokes\Factory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_return_inputted_joke()
    {
        $jokes = Factory(['First joke']);

        $joke = $jokes->getRandomJokes();

        $this->assertEquals($joke, 'First joke');
    }
}
