<?php

namespace JGI\Peppol\Model;

class PartyTaxScheme
{
    const TAX_SCHEME_GST = 'GST';
    const TAX_SCHEME_VAT = 'VAT';

    /**
     * @var string|null
     */
    private $companyId;

    /**
     * @var string|null
     */
    private $taxSchemeId;

    /**
     * @return string|null
     */
    public function getCompanyId(): ?string
    {
        return $this->companyId;
    }

    /**
     * @param string|null $companyId
     */
    public function setCompanyId(?string $companyId): void
    {
        $this->companyId = $companyId;
    }

    /**
     * @return string|null
     */
    public function getTaxSchemeId(): ?string
    {
        return $this->taxSchemeId;
    }

    /**
     * @param string|null $taxSchemeId
     */
    public function setTaxSchemeId(?string $taxSchemeId): void
    {
        $this->taxSchemeId = $taxSchemeId;
    }
}
