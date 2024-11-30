<?php

declare(strict_types=1);

namespace DragonBe\Test\ChargedTimer\Client\Model;

use DragonBe\ChargedTimer\Client\Model\Client;
use DragonBe\ChargedTimer\Client\Model\ClientInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(Client::class)]
class ClientTest extends TestCase
{
    #[Test]
    public function testClientImplementsClientInterface(): void
    {
        $client = new Client();
        $this->assertInstanceOf(ClientInterface::class, $client);
    }

    public function testClientIsEmtpyAtCreation(): void
    {
        $client = new Client();
        $this->assertSame('', $client->getFirstName());
        $this->assertSame('', $client->getLastName());
    }

    public function testClientInformationCanBeSetAtCreation(): void
    {
        $firstName = 'firstName';
        $lastName = 'lastName';

        $client = new Client($firstName, $lastName);
        $this->assertSame($firstName, $client->getFirstName());
        $this->assertSame($lastName, $client->getLastName());
    }
}
