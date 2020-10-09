<?php

namespace JGI\Peppol\Model;

class Invoice
{
    const INVOICE_TYPE_COMMERCIAL_INVOICE = '380';
    
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
     * @var float
     */
    private $lineExtensionAmount = 0;

    /**
     * @var float
     */
    private $taxExclusiveAmount = 0;

    /**
     * @var float
     */
    private $taxInclusiveAmount = 0;

    /**
     * @var float
     */
    private $invoicePayableAmount = 0;

    /**
     * @var float
     */
    private $taxAmount = 0;

    /**
     * @var float
     */
    private $payableRoundingAmount = 0;

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
        return $this->lineExtensionAmount;
    }

    /**
     * @param float $lineExtensionAmount
     */
    public function setLineExtensionAmount(float $lineExtensionAmount): void
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
    }

    /**
     * @return float
     */
    public function getTaxExclusiveAmount(): float
    {
        return $this->taxExclusiveAmount;
    }

    /**
     * @param float $taxExclusiveAmount
     */
    public function setTaxExclusiveAmount(float $taxExclusiveAmount): void
    {
        $this->taxExclusiveAmount = $taxExclusiveAmount;
    }

    /**
     * @return float
     */
    public function getTaxInclusiveAmount(): float
    {
        return $this->taxInclusiveAmount;
    }

    /**
     * @param float $taxInclusiveAmount
     */
    public function setTaxInclusiveAmount(float $taxInclusiveAmount): void
    {
        $this->taxInclusiveAmount = $taxInclusiveAmount;
    }

    /**
     * @return float
     */
    public function getInvoicePayableAmount(): float
    {
        return $this->invoicePayableAmount;
    }

    /**
     * @param float $invoicePayableAmount
     */
    public function setInvoicePayableAmount(float $invoicePayableAmount): void
    {
        $this->invoicePayableAmount = $invoicePayableAmount;
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
     * @return float
     */
    public function getPayableRoundingAmount(): float
    {
        return $this->payableRoundingAmount;
    }

    /**
     * @param float $payableRoundingAmount
     */
    public function setPayableRoundingAmount(float $payableRoundingAmount): void
    {
        $this->payableRoundingAmount = $payableRoundingAmount;
    }
}
