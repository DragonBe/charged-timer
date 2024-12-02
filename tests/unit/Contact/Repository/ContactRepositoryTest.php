<?php

declare(strict_types=1);

namespace DragonBe\Test\ChargedTimer\Contact\Repository;

use DragonBe\ChargedTimer\Contact\Model\ContactInterface;
use DragonBe\ChargedTimer\Contact\Repository\PdoContactRepository;
use Laminas\Hydrator\HydratorInterface;
use PDO;
use PDOStatement;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(PdoContactRepository::class)]
class ContactRepositoryTest extends TestCase
{
    #[Test]
    public function testContactRepositoryDoesNotListEntitiesIfThereAreNone(): void
    {
        $data = [];
        $stmt = $this->createStub(PDOStatement::class);
        $stmt->method('fetch')->willReturn(false);

        $pdo = $this->createStub(PDO::class);
        $pdo->method('prepare')->willReturn($stmt);

        $client = $this->createStub(ContactInterface::class);
        $hydrator = $this->createStub(HydratorInterface::class);

        $repository = new PdoContactRepository($pdo, $hydrator, $client);
        $clientList = $repository->list();
        $this->assertCount(0, $clientList);
    }

    #[Test]
    public function testContactRepositoryCanListContactEnitities(): void
    {
        $data = [
            [
                'first_name' => 'First name 1',
                'last_name' => 'Last name 1',
            ],
            [
                'first_name' => 'First name 2',
                'last_name' => 'Last name 2',
            ]
        ];
        $stmt = $this->createStub(PDOStatement::class);
        $stmt->method('fetch')->willReturn($data[0], $data[1], false);

        $pdo = $this->createStub(PDO::class);
        $pdo->method('prepare')->willReturn($stmt);

        $contact = $this->createStub(ContactInterface::class);
        $contact->method('getFirstName')->willReturn(
            $data[0]['first_name'],
            $data[1]['first_name'],
        );
        $contact->method('getLastName')->willReturn(
            $data[0]['last_name'],
            $data[1]['last_name'],
        );

        $hydrator = $this->createStub(HydratorInterface::class);
        $hydrator->method('hydrate')->willReturn($contact);

        $repository = new PdoContactRepository($pdo, $hydrator, $contact);
        $contactList = $repository->list();
        $this->assertCount(2, $contactList);

        $firstContact = $contactList->current();
        $this->assertInstanceOf(ContactInterface::class, $firstContact);
    }
}
