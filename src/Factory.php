<?php

namespace Jokes;

class Factory
{
    protected $jokes = [
        'First Joke of the year is not actually funny',
        'This is the second joke'
    ];

    public function __construct(array $jokes = null)
    {
        if (! is_null($jokes) && !empty($jokes)) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJokes()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
