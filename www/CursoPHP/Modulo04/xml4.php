<?php

$xml = simplexml_load_file('paises2.xml');

echo $xml->geografia->clima;
