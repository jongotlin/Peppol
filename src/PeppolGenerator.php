<?php

namespace JGI\Peppol;

use JGI\Peppol\Model\Invoice;

class PeppolGenerator
{
    /**
     * @param Invoice $invoice
     *
     * @return PeppolDocument
     */
    public function createInvoiceDocument(Invoice $invoice): PeppolDocument
    {
        $peppolDocument = new PeppolDocument();

        $peppolDocument->encoding = 'utf-8';
        $peppolDocument->xmlVersion = '1.0';
        $peppolDocument->formatOutput = true;

        $root = $peppolDocument->createElement('Invoice');
        $root->setAttributeNodeNS(new \DOMAttr('xmlns:cac', 'urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2'));
        $root->setAttributeNodeNS(new \DOMAttr('xmlns:cbc', 'urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2'));
        $root->setAttributeNodeNS(new \DOMAttr('xmlns', 'urn:oasis:names:specification:ubl:schema:xsd:Invoice-2'));
        $root->appendChild($peppolDocument->createElement('cbc:CustomizationID', $invoice->getCustomizationId()));
        $root->appendChild($peppolDocument->createElement('cbc:ProfileID', $invoice->getProfileId()));
        $root->appendChild($peppolDocument->createElement('cbc:ID', $invoice->getId()));
        $root->appendChild($peppolDocument->createElement('cbc:IssueDate', $invoice->getIssueDate()->format('Y-m-d')));
        $root->appendChild($peppolDocument->createElement('cbc:DueDate', $invoice->getDueDate()->format('Y-m-d')));
        $root->appendChild($peppolDocument->createElement('cbc:InvoiceTypeCode', $invoice->getInvoiceTypeCode()));
        $root->appendChild($peppolDocument->createElement('cbc:DocumentCurrencyCode', $invoice->getCurrency()));
        $root->appendChild($peppolDocument->createElement('cbc:AccountingCost', $invoice->getAccountingCost()));
        $root->appendChild($peppolDocument->createElement('cbc:BuyerReference', $invoice->getBuyerReference()));

        $peppolDocument->appendChild($root);

        return $peppolDocument;
    }
}
