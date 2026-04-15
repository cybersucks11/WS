<?php

// Replace with your API key
$apiKey = "apikey";


$from = "USD";
$to = "INR";
$amount = 100;


$url = "https://v6.exchangerate-api.com/v6/$apiKey/latest/$from";


$response = @file_get_contents($url);

if ($response === FALSE) {
    die("Error: Unable to connect to API");
}

$data = json_decode($response, true);

if ($data["result"] != "success") {
    die("Error: Invalid API response");
}


if (!isset($data["conversion_rates"][$to])) {
    die("Error: Invalid currency code");
}


$rate = $data["conversion_rates"][$to];

$converted = $amount * $rate;


echo "From Currency: $from <br>";
echo "To Currency: $to <br>";
echo "Exchange Rate: 1 $from = $rate $to <br>";
echo "Converted Amount: $amount $from = $converted $to <br>";

?>

