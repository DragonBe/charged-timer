<?php

declare(strict_types=1);

namespace DragonBe\ChargedTimer\Client\Model;

interface ClientInterface
{
    /**
     * Retrieve the first name of the client
     *
     * @return string
     */
    public function getFirstName(): string;

    /**
     * Retrieve the last name of the client
     *
     * @return string
     */
    public function getLastName(): string;
}
