# egrul-nalog-parser
Pdf parser for 
https://egrul.nalog.ru/

# Instalation

```
composer require "motonix/nalogegr"
```

Parse PDF for Individual Entrepreneur

```php
<?php

$parser = new \antonshell\EgrulNalogParser\Parser();

// parse for Individual Entrepreneur
$pathPe = __DIR__ . '/nalog_pe.pdf';
$results = $parser->parseNalogPe($pathPe);
```

Parse PDF for Organization

```php
<?php

$parser = new \antonshell\EgrulNalogParser\Parser();

// parse for Organization
$pathOrg = __DIR__ . '/nalog_org.pdf';
$parser->parseNalogOrg($pathOrg);
```

[1]: http://demo.antonshell.me/egrul-nalog-parser/
