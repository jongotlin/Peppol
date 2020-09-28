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
}
