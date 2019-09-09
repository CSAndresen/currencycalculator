<?php

$url = "https://www.nationalbanken.dk/_vti_bin/DN/DataService.svc/CurrencyRatesXML?lang=da";
$xml = simplexml_load_file($url);
$long = count( $xml->dailyrates->children()) ;
$ling = $xml->dailyrates->currency->children() ; 

foreach ($xml->dailyrates as $x) {
    for( $i = 0; $i < $long  ; $i++  ){
            echo "<tr> <td>". $x->currency[$i]["code"]. "</td> " ; 
            echo "<td>". $x->currency[$i]["desc"]. "</td> " ; 
            echo "<td>". $x->currency[$i]["rate"]. "</td> </tr>" ; 
    }
}

?> 