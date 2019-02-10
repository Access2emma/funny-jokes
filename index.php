<?php

require_once("vendor/autoload.php");

$joker = new Jokes\Factory();

die($joker->getRandomJokes());
