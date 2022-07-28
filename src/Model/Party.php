<?php

namespace JGI\Peppol\Model;

class Party
{
    const PARTY_ELECTRONIC_ADDRESS_SCHEME_EAN_LOCATION_CODE = '0088';
    const PARTY_ELECTRONIC_ADDRESS_SCHEME_SWEDISH_VAT_NUMBER = '9955';
    const PARTY_ELECTRONIC_ADDRESS_SCHEME_SWEDISH_ORG_NUMBER = '0007';

    /**
     * @var string|null
     */
    private $endpointId;

    /**
     * @var string|null
     */
    private $endpointSchemeId;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var PostalAddress|null
     */
    private $postalAddress;

    /**
     * @var array<int, PartyTaxScheme>
     */
    private $partyTaxSchemes = [];

    /**
     * @var string|null
     */
    private $registrationName;

    /**
     * @var Contact|null
     */
    private $contact;

    /**
     * @return string|null
     */
    public function getEndpointId(): ?string
    {
        return $this->endpointId;
    }

    /**
     * @param string|null $endpointId
     */
    public function setEndpointId(?string $endpointId): void
    {
        $this->endpointId = str_replace('-', '', (string) $endpointId);
    }

    /**
     * @return string|null
     */
    public function getEndpointSchemeId(): ?string
    {
        return $this->endpointSchemeId;
    }

    /**
     * @param string|null $endpointSchemeId
     */
    public function setEndpointSchemeId(?string $endpointSchemeId): void
    {
        $this->endpointSchemeId = $endpointSchemeId;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return PostalAddress|null
     */
    public function getPostalAddress(): ?PostalAddress
    {
        return $this->postalAddress;
    }

    /**
     * @param PostalAddress|null $postalAddress
     */
    public function setPostalAddress(?PostalAddress $postalAddress): void
    {
        $this->postalAddress = $postalAddress;
    }

    /**
     * @return array<int, PartyTaxScheme>
     */
    public function getPartyTaxSchemes(): array
    {
        return $this->partyTaxSchemes;
    }

    /**
     * @param PartyTaxScheme $partyTaxScheme
     */
    public function addPartyTaxScheme(PartyTaxScheme $partyTaxScheme): void
    {
        $this->partyTaxSchemes[] = $partyTaxScheme;
    }

    /**
     * @return string|null
     */
    public function getRegistrationName(): ?string
    {
        return $this->registrationName;
    }

    /**
     * @param string|null $registrationName
     */
    public function setRegistrationName(?string $registrationName): void
    {
        $this->registrationName = $registrationName;
    }

    /**
     * @return Contact|null
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @param Contact|null $contact
     */
    public function setContact(?Contact $contact): void
    {
        $this->contact = $contact;
    }
}
