<?php

declare(strict_types=1);

namespace DragonBe\Test\ChargedTimer\Contact\Model;

use DragonBe\ChargedTimer\Contact\Model\Contact;
use DragonBe\ChargedTimer\Contact\Model\ContactInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Contact::class)]
class ContactTest extends TestCase
{
    #[Test]
    public function testContactImplementsContactInterface(): void
    {
        $contact = new Contact();
        $this->assertInstanceOf(ContactInterface::class, $contact);
    }

    public function testContactIsEmtpyAtCreation(): void
    {
        $contact = new Contact();
        $this->assertSame('', $contact->getFirstName());
        $this->assertSame('', $contact->getLastName());
    }

    public function testContactInformationCanBeSetAtCreation(): void
    {
        $firstName = 'firstName';
        $lastName = 'lastName';

        $contact = new Contact($firstName, $lastName);
        $this->assertSame($firstName, $contact->getFirstName());
        $this->assertSame($lastName, $contact->getLastName());
    }
}
