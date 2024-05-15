<?php

$xml = new XMLWriter();
$xml->openMemory();

$xml->startElement('element');
//$xml->writeAttribute('xmlns', 'http://schemas.openxmlformats.org/package/2006/content-types');
$xml->writeAttribute('not_xmlns', 'http://schemas.openxmlformats.org/package/2006/content-types');
$xml->endElement();

echo $xml->flush();

