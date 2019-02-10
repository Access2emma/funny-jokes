<?php

class Factory
{
    protected $jokes = [
        'First Joke of the year is not actually funny',
        'This is the second joke',
    ];

    public function __construct(array $jokes = null)
    {
    }
}
