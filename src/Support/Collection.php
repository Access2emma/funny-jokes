<?php

namespace Jokes\Support;

class Collection implements \IteratorAggregate
{
    protected $items = [];

    public function __construct(array $input = [])
    {
        $this->items = $input;
    }

    public function get()
    {
        return $this->items;
    }

    public function count()
    {
        return count($this->items);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->items);
    }
}
