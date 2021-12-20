# egrul-nalog-parser
Pdf parser for 
https://egrul.nalog.ru/

<p align="center">
    <a href="http://demo.antonshell.me/egrul-nalog-parser/" target="_blank">
        <img src="http://demo.antonshell.me/images/egrul-nalog-parser.png" alt="egrul-nalog-parser" />
    </a>
</p>

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
