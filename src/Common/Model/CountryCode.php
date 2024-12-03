<?php

declare(strict_types=1);

namespace DragonBe\ChargedTimer\Common\Model;

class CountryCode
{
    /**
     * The ISO 3166-1 alpha-2 two-letter code
     * for the country or region
     *
     * @var string
     */
    private string $iso2Code;

    /**
     * The ISO 3166-1 alpha-3 three-letter
     * code for the country or region
     *
     * @var string
     */
    private string $iso3Code;

    /**
     * The English name of the country or region
     *
     * @var string
     */
    private string $country;

    /**
     * The numeric phone prefix for a country
     * or region
     *
     * @var int
     */
    private int $phonePrefix;

    private function __construct(
        string $iso2Code,
        string $iso3Code,
        string $country,
        int $phonePrefix
    ) {
        $this->iso2Code = $iso2Code;
        $this->iso3Code = $iso3Code;
        $this->country = $country;
        $this->phonePrefix = $phonePrefix;
    }

    /**
     * This value object can only be provisioned
     * through its static create method.
     *
     * @param string $iso2Code
     * @param string $iso3Code
     * @param string $country
     * @param int $phonePrefix
     * @return self
     */
    public static function create(
        string $iso2Code,
        string $iso3Code,
        string $country,
        int $phonePrefix
    ): self {
        return new self($iso2Code, $iso3Code, $country, $phonePrefix);
    }

    /**
     * Retrieve the ISO 3166-1 alpha-2
     * two-letter code for the country or region
     *
     * @return string
     */
    public function getIso2Code(): string
    {
        return $this->iso2Code;
    }

    /**
     * Retrieve the ISO 3166-1 alpha-3
     * three-letter code for the country or region
     *
     * @return string
     */
    public function getIso3Code(): string
    {
        return $this->iso3Code;
    }

    /**
     * Retrieve the English name of the country or region
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * Retrieve the numeric phone prefix for a country
     * or region
     *
     * @return int
     */
    public function getPhonePrefix(): int
    {
        return $this->phonePrefix;
    }
}
