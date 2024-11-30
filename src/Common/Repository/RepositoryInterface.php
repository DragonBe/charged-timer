<?php

declare(strict_types=1);

namespace DragonBe\ChargedTimer\Common\Repository;

use Iterator;

interface RepositoryInterface
{
    /**
     * List all entities provided by this repository
     *
     * @return Iterator
     */
    public function list(): Iterator;
}
