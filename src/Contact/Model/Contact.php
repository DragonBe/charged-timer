<?php

declare(strict_types=1);

namespace DragonBe\ChargedTimer\Contact\Model;

final class Contact implements ContactInterface
{
    private string $firstName;
    private string $lastName;

    /**
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName = '', string $lastName = '')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * @inheritDoc
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @inheritDoc
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
}
