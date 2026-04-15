<?php
$city = "Pune";

// API URL (no key required)
$url = "https://api.open-meteo.com/v1/forecast?latitude=18.52&longitude=73.85&current_weather=true";

// get data
$data = file_get_contents($url);

// convert JSON → PHP array
$result = json_decode($data, true);

// display
echo "Temperature: ".$result['current_weather']['temperature']."°C<br>";
echo "Wind Speed: ".$result['current_weather']['windspeed']." km/h";
?>
