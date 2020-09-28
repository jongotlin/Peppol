<?php

namespace JGI\Peppol\Model;

class Invoice
{
    /**
     * @var string|null
     */
    private $customizationId;

    /**
     * @var string|null
     */
    private $profileId;

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var \DateTimeInterface|null
     */
    private $issueDate;

    /**
     * @var \DateTimeInterface|null
     */
    private $dueDate;

    /**
     * @var string|null
     */
    private $invoiceTypeCode;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $accountingCost;

    /**
     * @var string|null
     */
    private $buyerReference;

    /**
     * @var Party|null
     */
    private $accountingSupplierParty;

    /**
     * @var Party|null
     */
    private $accountingCustomerParty;

    /**
     * @var AllowanceCharge|null
     */
    private $allowanceCharge;

    /**
     * @var TaxSubTotal[]
     */
    private $taxSubTotals = [];

    /**
     * @var InvoiceLine[]
     */
    private $invoiceLines = [];

    /**
     * @var float
     */
    private $chargeTotalAmount = 0;

    /**
     * @var float
     */
    private $chargeVatTotalAmount = 0;

    /**
     * @return string|null
     */
    public function getCustomizationId(): ?string
    {
        return $this->customizationId;
    }

    /**
     * @param string|null $customizationId
     */
    public function setCustomizationId(?string $customizationId): void
    {
        $this->customizationId = $customizationId;
    }

    /**
     * @return string|null
     */
    public function getProfileId(): ?string
    {
        return $this->profileId;
    }

    /**
     * @param string|null $profileId
     */
    public function setProfileId(?string $profileId): void
    {
        $this->profileId = $profileId;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getIssueDate(): ?\DateTimeInterface
    {
        return $this->issueDate;
    }

    /**
     * @param \DateTimeInterface|null $issueDate
     */
    public function setIssueDate(?\DateTimeInterface $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getDueDate(): ?\DateTimeInterface
    {
        return $this->dueDate;
    }

    /**
     * @param \DateTimeInterface|null $dueDate
     */
    public function setDueDate(?\DateTimeInterface $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return string|null
     */
    public function getInvoiceTypeCode(): ?string
    {
        return $this->invoiceTypeCode;
    }

    /**
     * @param string|null $invoiceTypeCode
     */
    public function setInvoiceTypeCode(?string $invoiceTypeCode): void
    {
        $this->invoiceTypeCode = $invoiceTypeCode;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return string|null
     */
    public function getAccountingCost(): ?string
    {
        return $this->accountingCost;
    }

    /**
     * @param string|null $accountingCost
     */
    public function setAccountingCost(?string $accountingCost): void
    {
        $this->accountingCost = $accountingCost;
    }

    /**
     * @return string|null
     */
    public function getBuyerReference(): ?string
    {
        return $this->buyerReference;
    }

    /**
     * @param string|null $buyerReference
     */
    public function setBuyerReference(?string $buyerReference): void
    {
        $this->buyerReference = $buyerReference;
    }

    /**
     * @return Party|null
     */
    public function getAccountingSupplierParty(): ?Party
    {
        return $this->accountingSupplierParty;
    }

    /**
     * @param Party|null $accountingSupplierParty
     */
    public function setAccountingSupplierParty(?Party $accountingSupplierParty): void
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
    }

    /**
     * @return Party|null
     */
    public function getAccountingCustomerParty(): ?Party
    {
        return $this->accountingCustomerParty;
    }

    /**
     * @param Party|null $accountingCustomerParty
     */
    public function setAccountingCustomerParty(?Party $accountingCustomerParty): void
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
    }

    /**
     * @return AllowanceCharge|null
     */
    public function getAllowanceCharge(): ?AllowanceCharge
    {
        return $this->allowanceCharge;
    }

    /**
     * @param AllowanceCharge|null $allowanceCharge
     */
    public function setAllowanceCharge(?AllowanceCharge $allowanceCharge): void
    {
        $this->allowanceCharge = $allowanceCharge;
    }

    /**
     * @return TaxSubTotal[]
     */
    public function getTaxSubTotals(): array
    {
        return $this->taxSubTotals;
    }

    /**
     * @param TaxSubTotal $taxSubTotal
     */
    public function addTaxSubTotals(TaxSubtotal $taxSubTotal): void
    {
        $this->taxSubTotals[] = $taxSubTotal;
    }

    /**
     * @return InvoiceLine[]
     */
    public function getInvoiceLines(): array
    {
        return $this->invoiceLines;
    }

    /**
     * @param InvoiceLine $invoiceLine
     */
    public function addInvoiceLine(InvoiceLine $invoiceLine): void
    {
        $this->invoiceLines[] = $invoiceLine;
    }

    /**
     * @return float
     */
    public function getChargeTotalAmount(): float
    {
        return $this->chargeTotalAmount;
    }

    /**
     * @param float $chargeTotalAmount
     */
    public function setChargeTotalAmount(float $chargeTotalAmount): void
    {
        $this->chargeTotalAmount = $chargeTotalAmount;
    }

    /**
     * @return float
     */
    public function getChargeVatTotalAmount(): float
    {
        return $this->chargeVatTotalAmount;
    }

    /**
     * @param float $chargeVatTotalAmount
     */
    public function setChargeVatTotalAmount(float $chargeVatTotalAmount): void
    {
        $this->chargeVatTotalAmount = $chargeVatTotalAmount;
    }

    /**
     * @return float
     */
    public function getLineExtensionAmount(): float
    {
        $total = 0;
        foreach ($this->getInvoiceLines() as $invoiceLine) {
            $total = $total + $invoiceLine->getExtensionAmount();
        }

        return $total;
    }

    /**
     * @return float
     */
    public function getTaxExclusiveAmount(): float
    {
        return $this->getLineExtensionAmount() + $this->getChargeTotalAmount();
    }

    /**
     * @return float
     */
    public function getTaxInclusiveAmount(): float
    {
        $total = 0;
        foreach ($this->getInvoiceLines() as $invoiceLine) {
            $total = $total + $invoiceLine->getTaxExtensionAmount();
        }

        $total = $total + ($this->getChargeTotalAmount() + $this->getChargeVatTotalAmount());

        return $total;
    }

    /**
     * @return float
     */
    public function getInvoicePayableAmount(): float
    {
        return $this->getTaxInclusiveAmount();
    }

    /**
     * @return float
     */
    public function getTaxAmount(): float
    {
        $total = 0;
        foreach ($this->getTaxSubTotals() as $taxSubTotal) {
            $total = $total + $taxSubTotal->getTaxAmount();
        }

        return $total;
    }
}
