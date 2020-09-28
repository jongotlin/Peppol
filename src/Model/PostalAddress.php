<?php

namespace JGI\Peppol\Model;

class PostalAddress
{
    /**
     * @var string|null
     */
    private $streetName;

    /**
     * @var string|null
     */
    private $additionalStreetName;

    /**
     * @var string|null
     */
    private $cityName;

    /**
     * @var string|null
     */
    private $postalZone;

    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    /**
     * @param string|null $streetName
     */
    public function setStreetName(?string $streetName): void
    {
        $this->streetName = $streetName;
    }

    /**
     * @return string|null
     */
    public function getAdditionalStreetName(): ?string
    {
        return $this->additionalStreetName;
    }

    /**
     * @param string|null $additionalStreetName
     */
    public function setAdditionalStreetName(?string $additionalStreetName): void
    {
        $this->additionalStreetName = $additionalStreetName;
    }

    /**
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string|null $cityName
     */
    public function setCityName(?string $cityName): void
    {
        $this->cityName = $cityName;
    }

    /**
     * @return string|null
     */
    public function getPostalZone(): ?string
    {
        return $this->postalZone;
    }

    /**
     * @param string|null $postalZone
     */
    public function setPostalZone(?string $postalZone): void
    {
        $this->postalZone = $postalZone;
    }

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $countryCode
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }
}
