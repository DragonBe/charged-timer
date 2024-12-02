<?php

declare(strict_types=1);

namespace DragonBe\ChargedTimer\Contact\Repository;

use ArrayIterator;
use DragonBe\ChargedTimer\Contact\Model\ContactInterface;
use DragonBe\ChargedTimer\Common\Repository\PdoAbstractRepository;
use Iterator;
use Laminas\Hydrator\HydratorInterface;
use PDO;

final class PdoContactRepository extends PdoAbstractRepository
{
    private ContactInterface $contact;

    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo, HydratorInterface $hydrator, ContactInterface $contact)
    {
        parent::__construct($pdo, $hydrator);
        $this->contact = $contact;
    }

    /**
     * @inheritDoc
     */
    public function list(): Iterator
    {
        $query = 'SELECT * FROM contact ORDER BY last_name ASC';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $data = [];

        while (false !== ($row = $stmt->fetch(PDO::FETCH_ASSOC))) {
            $data[] = $this->hydrator->hydrate($row, $this->contact);
        }

        return new ArrayIterator($data);
    }
}
