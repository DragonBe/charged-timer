<?php

declare(strict_types=1);

namespace DragonBe\ChargedTimer\Contact\Model;

interface ContactInterface
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
