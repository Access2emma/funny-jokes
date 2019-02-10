<?php

namespace Jokes\Models;

class User
{
    private $firstname;
    private $lastname;
    protected $email;

    public function __construct(string $firstname = null, string $lastname = null)
    {
        if ($firstname) {
            $this->setFirstName($firstname);
        }

        if ($lastname) {
            $this->setLastName($lastname);
        }
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setFirstName(string $name)
    {
        $this->firstname = trim($name);
    }

    public function setLastName(string $name)
    {
        $this->lastname = trim($name);
    }

    public function setEmail(string $email)
    {
        $this->email = trim($email);
    }

    public function getFullName()
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function emailVariable()
    {
        return [
            'name'  => $this->getFullName(),
            'email' => $this->getEmail(),
        ];
    }
}
