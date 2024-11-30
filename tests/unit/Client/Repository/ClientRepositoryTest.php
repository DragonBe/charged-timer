<?php

declare(strict_types=1);

namespace DragonBe\Test\ChargedTimer\Client\Repository;

use DragonBe\ChargedTimer\Client\Model\ClientInterface;
use DragonBe\ChargedTimer\Client\Repository\PdoClientRepository;
use Laminas\Hydrator\HydratorInterface;
use PDO;
use PDOStatement;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(PdoClientRepository::class)]
class ClientRepositoryTest extends TestCase
{
    #[Test]
    public function testClientRepositoryDoesNotListEntitiesIfThereAreNone(): void
    {
        $data = [];
        $stmt = $this->createStub(PDOStatement::class);
        $stmt->method('fetch')->willReturn(false);

        $pdo = $this->createStub(PDO::class);
        $pdo->method('prepare')->willReturn($stmt);

        $client = $this->createStub(ClientInterface::class);
        $hydrator = $this->createStub(HydratorInterface::class);

        $repository = new PdoClientRepository($pdo, $hydrator, $client);
        $clientList = $repository->list();
        $this->assertCount(0, $clientList);
    }

    #[Test]
    public function testClientRepositoryCanListClientEnitities(): void
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

        $client = $this->createStub(ClientInterface::class);
        $client->method('getFirstName')->willReturn(
            $data[0]['first_name'],
            $data[1]['first_name'],
        );
        $client->method('getLastName')->willReturn(
            $data[0]['last_name'],
            $data[1]['last_name'],
        );

        $hydrator = $this->createStub(HydratorInterface::class);
        $hydrator->method('hydrate')->willReturn($client);

        $repository = new PdoClientRepository($pdo, $hydrator, $client);
        $clientList = $repository->list();
        $this->assertCount(2, $clientList);

        $firstClient = $clientList->current();
        $this->assertInstanceOf(ClientInterface::class, $firstClient);
    }
}
