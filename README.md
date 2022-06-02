# Peppol
Create PEPPOL BIS 3.0 documents

### Installation
```
composer require jongotlin/peppol
```

### Example
```php
$peppolGenerator = new PeppolGenerator();
$invoice = new Invoice();
$invoice->setCurrency('SEK');

$peppolDocument = $peppolGenerator->createInvoiceDocument($invoice);
echo $peppolDocument->saveXML();
```

