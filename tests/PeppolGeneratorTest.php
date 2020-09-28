<?php

use JGI\Peppol\Model\{Invoice};
use JGI\Peppol\{PeppolDocument,PeppolGenerator};

final class PeppolGeneratorTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function shouldReturnInvoicePeppol()
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


        $peppolGenerator = new PeppolGenerator();
        $peppolDocument = $peppolGenerator->createInvoiceDocument($invoice);
        $this->assertInstanceOf(PeppolDocument::class, $peppolDocument);

        // Source from https://github.com/OpenPEPPOL/peppol-bis-invoice-3/blob/master/rules/examples/base-example.xml
        $this->assertXmlStringEqualsXmlFile(__DIR__ . '/expected.xml', $peppolDocument->saveXML());
    }
}
