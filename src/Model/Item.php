<?php

namespace JGI\Peppol\Model;

class Item
{
    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var TaxCategory|null
     */
    private $taxCategory;

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
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
