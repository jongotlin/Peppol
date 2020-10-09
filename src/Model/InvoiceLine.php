<?php

namespace JGI\Peppol\Model;

class InvoiceLine
{
    const QUANTITY_CODE_EACH = 'AE';
    const QUANTITY_CODE_LABOUR_HOUR = 'LH';

    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $quantityCode;

    /**
     * @var float
     */
    private $quantity = 0;

    /**
     * @var float
     */
    private $extensionAmount = 0;

    /**
     * @var string|null
     */
    private $accountingCost;

    /**
     * @var string|null
     */
    private $orderLineReferenceLineId;

    /**
     * @var Item|null
     */
    private $item;

    /**
     * @var float
     */
    private $priceAmount = 0;

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
     * @return string|null
     */
    public function getQuantityCode(): ?string
    {
        return $this->quantityCode;
    }

    /**
     * @param string|null $quantityCode
     */
    public function setQuantityCode(?string $quantityCode): void
    {
        $this->quantityCode = $quantityCode;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     */
    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getExtensionAmount(): float
    {
        return $this->extensionAmount;
    }

    /**
     * @param float $extensionAmount
     */
    public function setExtensionAmount(float $extensionAmount): void
    {
        $this->extensionAmount = $extensionAmount;
    }

    /**
     * @return float
     */
    public function getTaxExtensionAmount(): float
    {
        return $this->getExtensionAmount() * (100 + $this->getItem()->getTaxCategory()->getPercent()) / 100;
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
    public function getOrderLineReferenceLineId(): ?string
    {
        return $this->orderLineReferenceLineId;
    }

    /**
     * @param string|null $orderLineReferenceLineId
     */
    public function setOrderLineReferenceLineId(?string $orderLineReferenceLineId): void
    {
        $this->orderLineReferenceLineId = $orderLineReferenceLineId;
    }

    /**
     * @return Item|null
     */
    public function getItem(): ?Item
    {
        return $this->item;
    }

    /**
     * @param Item|null $item
     */
    public function setItem(?Item $item): void
    {
        $this->item = $item;
    }

    /**
     * @return float
     */
    public function getPriceAmount(): float
    {
        return $this->priceAmount;
    }

    /**
     * @param float $priceAmount
     */
    public function setPriceAmount(float $priceAmount): void
    {
        $this->priceAmount = $priceAmount;
    }
}
