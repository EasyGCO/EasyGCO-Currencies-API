<?php

/* 

*** EasyGCO Currencies Exchange Rates - Example ***

* Path parameters ( a,b... ) for all path parameters please review our official documenation

- a = rates
- b = fiats | crypto

* data[ ] parameters are optional

- data[code]: Single or comma separated currency 3-Letter codes ( MAX 50 currency )

* In case no code provided, all supported currencies will be returned

-----------

- data[convert]: Specify the rate prices in result by providing a currency code for conversion

* In case no convert code provided all response prices will be in USD

-----------

*/

$requestURL = "https://easygco.com/api/currencies/?a=rates&b=fiats&data[code]=EUR,AED,GBP&data[convert]=USD";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $requestURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$responseData = curl_exec($ch);

curl_close ($ch);

// Check if body is returned
if(!$responseData) exit('Something went wrong');

// Check if response is a valid JSON
json_decode($responseData);
if(json_last_error() !== JSON_ERROR_NONE) exit('Invalid Response');

// Decode JSON response
$responseData = json_decode($responseData, true);

// Dump Results
var_dump($responseData);