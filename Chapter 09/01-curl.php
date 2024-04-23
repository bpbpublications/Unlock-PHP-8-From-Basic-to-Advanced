<?php
$ch = curl_init();

// Request configuration
curl_setopt($ch, CURLOPT_URL, "http://phpbook.local/api/v1/tasks");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

//Executing the request and storing the response
$response = curl_exec($ch);

//Terminate cURL session
curl_close($ch);

//Display results
echo $response;