<?php

namespace JGI\Peppol\Model;

class AllowanceCharge
{
    /**
     * @var bool
     */
    private $chargeIndicator = true;

    /**
     * @var string|null
     */
    private $allowanceChargeReason;

    /**
     * @var float
     */
    private $amount = 0;

    /**
     * @var TaxCategory|null
     */
    private $taxCategory;

    /**
     * @return bool
     */
    public function isChargeIndicator(): bool
    {
        return $this->chargeIndicator;
    }

    /**
     * @param bool $chargeIndicator
     */
    public function setChargeIndicator(bool $chargeIndicator): void
    {
        $this->chargeIndicator = $chargeIndicator;
    }

    /**
     * @return string|null
     */
    public function getAllowanceChargeReason(): ?string
    {
        return $this->allowanceChargeReason;
    }

    /**
     * @param string|null $allowanceChargeReason
     */
    public function setAllowanceChargeReason(?string $allowanceChargeReason): void
    {
        $this->allowanceChargeReason = $allowanceChargeReason;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
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
