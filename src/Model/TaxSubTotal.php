<?php

namespace JGI\Peppol\Model;

class TaxSubTotal
{
    /**
     * @var float
     */
    private $taxableAmount = 0;

    /**
     * @var float
     */
    private $taxAmount = 0;

    /**
     * @var TaxCategory|null
     */
    private $taxCategory;

    /**
     * @return float
     */
    public function getTaxableAmount(): float
    {
        return $this->taxableAmount;
    }

    /**
     * @param float $taxableAmount
     */
    public function setTaxableAmount(float $taxableAmount): void
    {
        $this->taxableAmount = $taxableAmount;
    }

    /**
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->taxAmount;
    }

    /**
     * @param float $taxAmount
     */
    public function setTaxAmount(float $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * @return TaxCategory|null
     */
    public function getTaxCategory(): ?TaxCategory
    {
        return $this->taxCategory;
    }

    /**
     * @param TaxCategory|null $taxCategory
     */
    public function setTaxCategory(?TaxCategory $taxCategory): void
    {
        $this->taxCategory = $taxCategory;
    }
}
