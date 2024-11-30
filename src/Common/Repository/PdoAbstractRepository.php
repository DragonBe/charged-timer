<?php

namespace DragonBe\ChargedTimer\Common\Repository;

use Iterator;
use Laminas\Hydrator\HydratorInterface;
use PDO;

abstract class PdoAbstractRepository implements RepositoryInterface
{
    protected PDO $pdo;
    protected HydratorInterface $hydrator;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo, HydratorInterface $hydrator)
    {
        $this->pdo = $pdo;
        $this->hydrator = $hydrator;
    }

    /**
     * @inheritDoc
     */
    abstract public function list(): Iterator;
}
