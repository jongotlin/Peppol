<?php

use JGI\Peppol\Model\{
    Invoice,
    Party,
    PostalAddress,
    PartyTaxScheme,
    Contact,
    AllowanceCharge,
    TaxCategory,
    TaxSubTotal,
    InvoiceLine,
    Item
};
use JGI\Peppol\{PeppolDocument,PeppolGenerator};

final class PeppolGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_generates_a_peppol_xml_document()
    {
        $invoice = new Invoice();
        $invoice->setCustomizationId('urn:cen.eu:en16931:2017#compliant#urn:fdc:peppol.eu:2017:poacc:billing:3.0');
        $invoice->setProfileId('urn:fdc:peppol.eu:2017:poacc:billing:01:1.0');
        $invoice->setId('Snippet1');
        $invoice->setIssueDate(new \DateTime('2017-11-13'));
        $invoice->setDueDate(new \DateTime('2017-12-01'));
        $invoice->setInvoiceTypeCode('380');
        $invoice->setCurrency('EUR');
        $invoice->setAccountingCost('4025:123:4343');
        $invoice->setBuyerReference('0150abc');
        $invoice->setChargeTotalAmount(25);
        $invoice->setChargeVatTotalAmount(25 * .25);
        $invoice->setTaxAmount(331.25);
        $invoice->setLineExtensionAmount(1300);
        $invoice->setTaxExclusiveAmount(1325);
        $invoice->setTaxInclusiveAmount(1656.25);
        $invoice->setInvoicePayableAmount(1656.25);

        $accountingSupplierParty = new Party();
        $accountingSupplierParty->setEndpointSchemeId('0088');
        $accountingSupplierParty->setEndpointId('9482348239847239874');
        $accountingSupplierParty->setName('SupplierTradingName AB & Ltd.');
        $postalAddress = new PostalAddress();
        $postalAddress->setStreetName('Main street 1 & co');
        $postalAddress->setAdditionalStreetName('Postbox 123');
        $postalAddress->setCityName('London');
        $postalAddress->setPostalZone('GB 123 EW');
        $postalAddress->setCountryCode('GB');
        $accountingSupplierParty->setPostalAddress($postalAddress);
        $partyTaxScheme = new PartyTaxScheme();
        $partyTaxScheme->setCompanyId('GB1232434');
        $partyTaxScheme->setTaxSchemeId('VAT');
        $accountingSupplierParty->setPartyTaxScheme($partyTaxScheme);
        $accountingSupplierParty->setRegistrationName('SupplierOfficialName AB & Ltd');
        $invoice->setAccountingSupplierParty($accountingSupplierParty);


        $accountingCustomerParty = new Party();
        $accountingCustomerParty->setEndpointSchemeId('0002');
        $accountingCustomerParty->setEndpointId('FR23342');
        $accountingCustomerParty->setName('BuyerTradingName AB & AS');
        $postalAddress = new PostalAddress();
        $postalAddress->setStreetName('Hovedgatan 32 & co');
        $postalAddress->setAdditionalStreetName('Po box 878');
        $postalAddress->setCityName('Stockholm');
        $postalAddress->setPostalZone('456 34');
        $postalAddress->setCountryCode('SE');
        $accountingCustomerParty->setPostalAddress($postalAddress);
        $partyTaxScheme = new PartyTaxScheme();
        $partyTaxScheme->setCompanyId('SE4598375937');
        $partyTaxScheme->setTaxSchemeId('VAT');
        $accountingCustomerParty->setPartyTaxScheme($partyTaxScheme);
        $accountingCustomerParty->setRegistrationName('Buyer Official Name & co');
        $contact = new Contact();
        $contact->setName('Lisa Johnson');
        $contact->setTelephone('23434234');
        $contact->setEmail('lj@buyer.se');
        $accountingCustomerParty->setContact($contact);
        $invoice->setAccountingCustomerParty($accountingCustomerParty);

        $allowanceCharge = new AllowanceCharge();
        $allowanceCharge->setChargeIndicator(true);
        $allowanceCharge->setAllowanceChargeReason('Insurance');
        $allowanceCharge->setAmount(25);
        $taxCategory = new TaxCategory();
        $taxCategory->setId('S');
        $taxCategory->setPercent(25);
        $taxCategory->setTaxSchemeId('VAT');
        $allowanceCharge->setTaxCategory($taxCategory);
        $invoice->setAllowanceCharge($allowanceCharge);

        $taxSubTotal = new TaxSubTotal();
        $taxSubTotal->setTaxAmount(331.25);
        $taxSubTotal->setTaxableAmount(1325);
        $taxCategory = new TaxCategory();
        $taxCategory->setId('S');
        $taxCategory->setPercent(25);
        $taxCategory->setTaxSchemeId('VAT');
        $taxSubTotal->setTaxCategory($taxCategory);

        $invoice->addTaxSubTotals($taxSubTotal);


        $invoiceLine = new InvoiceLine();
        $invoiceLine->setId('1');
        $invoiceLine->setQuantity(7);
        $invoiceLine->setQuantityCode('DAY');
        $invoiceLine->setExtensionAmount(2800);
        $invoiceLine->setAccountingCost('Konteringsstreng');
        $invoiceLine->setOrderLineReferenceLineId('123');
        $item = new Item();
        $item->setDescription('Description of item & co');
        $item->setName('item name');
        $taxCategory = new TaxCategory();
        $taxCategory->setId('S');
        $taxCategory->setPercent(25);
        $taxCategory->setTaxSchemeId('VAT');
        $item->setTaxCategory($taxCategory);
        $invoiceLine->setItem($item);
        $invoiceLine->setPriceAmount(400);
        $invoice->addInvoiceLine($invoiceLine);


        $invoiceLine = new InvoiceLine();
        $invoiceLine->setId('2');
        $invoiceLine->setQuantity(-3);
        $invoiceLine->setQuantityCode('DAY');
        $invoiceLine->setExtensionAmount(-1500);
        $invoiceLine->setOrderLineReferenceLineId('123');
        $item = new Item();
        $item->setDescription('Description 2');
        $item->setName('item name 2');
        $taxCategory = new TaxCategory();
        $taxCategory->setId('S');
        $taxCategory->setPercent(25);
        $taxCategory->setTaxSchemeId('VAT');
        $item->setTaxCategory($taxCategory);
        $invoiceLine->setItem($item);
        $invoiceLine->setPriceAmount(500);
        $invoice->addInvoiceLine($invoiceLine);


        $peppolGenerator = new PeppolGenerator();
        $peppolDocument = $peppolGenerator->createInvoiceDocument($invoice);
        $this->assertInstanceOf(PeppolDocument::class, $peppolDocument);

        // Required data from https://github.com/OpenPEPPOL/peppol-bis-invoice-3/blob/master/rules/examples/base-example.xml
        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/expected.xml', $peppolDocument->saveXML());
    }
}
