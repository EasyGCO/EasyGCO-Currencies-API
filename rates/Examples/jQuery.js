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

var requestURL = 'https://easygco.com/api/currencies/?a=rates&b=fiats&data[code]=EUR,AED,GBP&data[convert]=USD';

$.getJSON(requestURL, function(data){
    console.log(data);   
});