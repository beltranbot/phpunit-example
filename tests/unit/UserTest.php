<?php

use PHPUnit\Framework\TestCase;
use App\Models\User;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertTrue;

class UserTest extends TestCase
{
    protected $user;

    // runs before every test
    protected function setUp(): void
    {
        $this->user = new User;
    }

    /** @test */
    public function myAssertTrue()
    {
        assertTrue(true);
    }

    public function testThatWeCanGetTheFirstName()
    {
        $this->user->setFirstName("Billy");
        assertEquals($this->user->getFirstName(), "Billy");
    }

    public function testThatWeCanGetTheLastName()
    {
        $this->user->setLastName("Garrett");
        assertEquals($this->user->getLastName(), "Garrett");
    }

    public function testFullNameIsReturned()
    {
        $this->user->setFirstName("Billy");
        $this->user->setLastName("Garrett");
        assertEquals($this->user->getFullName(), "Billy Garrett");
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $this->user->setFirstName(" Billy    ");
        $this->user->setLastName("     Garrett");
        assertEquals($this->user->getFirstName(), "Billy");
        assertEquals($this->user->getLastName(), "Garrett");
    }

    public function testEmailAddressCanBeSet()
    {
        $this->user->setEmail("billy@codecourse.com");
        assertEquals($this->user->getEmail(), "billy@codecourse.com");
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->setFirstName(" Billy    ");
        $this->user->setLastName("     Garrett");
        $this->user->setEmail("billy@codecourse.com");
        $emailVariables = $this->user->getEmailVariables();
        $this->assertArrayHasKey("full_name", $emailVariables);
        $this->assertArrayHasKey("email", $emailVariables);
        $this->assertEquals($emailVariables["full_name"], $this->user->getFullName());
        $this->assertEquals($emailVariables["email"], $this->user->getEmail());
    }
}
