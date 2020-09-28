<?php

use JGI\Peppol\Model\Invoice;
use JGI\Peppol\Model\InvoiceLine;
use JGI\Peppol\Model\Item;
use JGI\Peppol\Model\TaxCategory;
use JGI\Peppol\Model\TaxSubTotal;

final class InvoiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_summarize_invoice_totals()
    {
        $invoice = new Invoice();
        $invoice->setChargeTotalAmount(25);
        $invoice->setChargeVatTotalAmount(25 * .25);

        $invoiceLine = new InvoiceLine();
        $invoiceLine->setQuantity(7);
        $invoiceLine->setExtensionAmount(2800);
        $item = new Item();
        $taxCategory = new TaxCategory();
        $taxCategory->setPercent(25);
        $item->setTaxCategory($taxCategory);
        $invoiceLine->setItem($item);
        $invoiceLine->setPriceAmount(400);
        $invoice->addInvoiceLine($invoiceLine);


        $invoiceLine = new InvoiceLine();
        $invoiceLine->setQuantity(-3);
        $invoiceLine->setExtensionAmount(-1500);
        $item = new Item();
        $taxCategory = new TaxCategory();
        $taxCategory->setPercent(25);
        $item->setTaxCategory($taxCategory);
        $invoiceLine->setItem($item);
        $invoiceLine->setPriceAmount(500);
        $invoice->addInvoiceLine($invoiceLine);

        $this->assertEquals(1300, $invoice->getLineExtensionAmount());
        $this->assertEquals(1325, $invoice->getTaxExclusiveAmount());
        $this->assertEquals(1656.25, $invoice->getTaxInclusiveAmount());
    }

    /**
     * @test
     */
    public function it_summarize_vat_totals()
    {
        $invoice = new Invoice();
        $taxSubTotal = new TaxSubTotal();
        $taxSubTotal->setTaxAmount(331.25);
        $invoice->addTaxSubTotals($taxSubTotal);

        $this->assertEquals(331.25, $invoice->getTaxAmount());
    }
}
