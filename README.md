# Peppol
Create PEPPOL BIS 3.0 documents

```php
$peppolGenerator = new PeppolGenerator();
$invoice = new Invoice();
$invoice->setCurrency('SEK');

$peppolDocument = $peppolGenerator->createInvoiceDocument($invoice);
echo $peppolDocument->saveXML();
```

