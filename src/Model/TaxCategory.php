<?php

namespace JGI\Peppol\Model;

class TaxCategory
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var float
     */
    private $percent = 0;

    /**
     * @var string|null
     */
    private $taxSchemeId;

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
     * @return float
     */
    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     */
    public function setPercent(float $percent): void
    {
        $this->percent = $percent;
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
