<?php

declare(strict_types=1);

namespace DragonBe\Test\ChargedTimer\Common\Model;

use DragonBe\ChargedTimer\Common\Model\CountryCode;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(CountryCode::class)]
class CountryCodeTest extends TestCase
{
    public function testCountryCodeIsCreatedAsValueObject(): void
    {
        $countryCode = CountryCode::create('BE', 'BEL', 'Belgium', 32);
        $this->assertSame('BE', $countryCode->getIso2Code());
        $this->assertSame('BEL', $countryCode->getIso3Code());
        $this->assertSame('Belgium', $countryCode->getCountry());
        $this->assertSame(32, $countryCode->getPhonePrefix());
    }
}
