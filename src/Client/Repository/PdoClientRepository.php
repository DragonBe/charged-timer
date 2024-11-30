<?php

declare(strict_types=1);

namespace DragonBe\ChargedTimer\Client\Repository;

use ArrayIterator;
use DragonBe\ChargedTimer\Client\Model\ClientInterface;
use DragonBe\ChargedTimer\Common\Repository\PdoAbstractRepository;
use Iterator;
use Laminas\Hydrator\HydratorInterface;
use PDO;

final class PdoClientRepository extends PdoAbstractRepository
{
    private ClientInterface $client;

    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo, HydratorInterface $hydrator, ClientInterface $client)
    {
        parent::__construct($pdo, $hydrator);
        $this->client = $client;
    }

    /**
     * @inheritDoc
     */
    public function list(): Iterator
    {
        $query = 'SELECT * FROM client ORDER BY last_name ASC';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $data = [];

        while (false !== ($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
            $data[] = $this->hydrator->hydrate($row, $this->client);
        }

        return new ArrayIterator($data);
    }
}
