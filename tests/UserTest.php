<?php

use Jokes\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /** @test */
    public function it_set_change_and_get_firstname()
    {
        $user = new User('Emmanuel');

        $firstname = $user->getFirstName();

        $this->assertEquals($firstname, 'Emmanuel');

        $user->setFirstName('Doe');

        $firstname = $user->getFirstName();

        $this->assertEquals($firstname, 'Doe');
    }

    /** @test */
    public function set_get_and_change_lastname()
    {
        $user = new User('', 'Adeniyi');

        $lastname = $user->getLastName();

        $this->assertEquals($lastname, 'Adeniyi');

        $user->setLastName('John');

        $lastname = $user->getLastName();

        $this->assertEquals($lastname, 'John');
    }

    /** @test */
    public function it_get_user_fullname()
    {
        $user = new User('Obagunwa', 'Adeniyi');

        $fullname = $user->getFullName();

        $this->assertEquals($fullname, 'Obagunwa Adeniyi');

        $user->setFirstName('Doe');
        $user->setLastName('John');

        $fullname = $user->getFullName();

        $this->assertEquals($fullname, 'Doe John');
    }

    /** @test */
    public function names_get_trimmed()
    {
        $user = new User('   Obagunwa  ', '   Adeniyi');

        $fullname = $user->getFullName();

        $this->assertEquals($fullname, 'Obagunwa Adeniyi');

        $user->setFirstName('Doe');
        $user->setLastName('John');

        $fullname = $user->getFullName();

        $this->assertEquals($fullname, 'Doe John');
    }

    /** @test */
    public function can_get_and_set_email()
    {
        $email = 'emmanuel@test.com';
        $user = new User();

        $user->setEmail($email);

        $this->assertEquals($user->getEmail(), $email);
    }

    /** @test */
    public function email_variable_provide_valid_information()
    {
        $email = 'emmanuel@test.com';
        $user = new User('   Obagunwa  ', '   Adeniyi');
        $user->setEmail($email);

        $emailVariable = $user->emailVariable();

        $this->assertArrayHasKey('name', $emailVariable);
        $this->assertArrayHasKey('email', $emailVariable);

        $this->assertEquals($emailVariable['name'], 'Obagunwa Adeniyi');
        $this->assertEquals($emailVariable['email'], $email);
    }
}
