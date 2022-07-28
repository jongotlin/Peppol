<?php

namespace JGI\Peppol\Model;

class PartyTaxScheme
{
    const TAX_SCHEME_GST = 'GST';
    const TAX_SCHEME_VAT = 'VAT';
    const TAX_SCHEME_SWT = 'SWT';

    /**
     * @var string|null
     */
    private $companyId;

    /**
     * @var string|null
     */
    private $taxSchemeId;

    /**
     * @var string|null
     */
    private $companySchemeId;

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

    /**
     * @return string|null
     */
    public function getCompanySchemeId(): ?string
    {
        return $this->companySchemeId;
    }

    /**
     * @param string|null $companySchemeId
     */
    public function setCompanySchemeId(?string $companySchemeId): void
    {
        $this->companySchemeId = $companySchemeId;
    }
}
