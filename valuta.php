<?php

$xml = file_get_contents("http://www.nationalbanken.dk/_vti_bin/DN/DataService.svc/CurrencyRatesXML?lang=da");
header("Content-Type: application/xml");

echo $xml;

?>