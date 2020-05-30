<?php
// API URL
$url = 'http://localhost:4000/api/v1/user/register';

// Create a new cURL resource
$ch = curl_init($url);

// Setup request to send json via POST
$data = array(
    'mail' => $_POST['mail']
);
$payload = json_encode($data);

// Attach encoded JSON string to the POST fields
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

// Return response instead of outputting
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the POST request
$result = curl_exec($ch);

$result = json_decode($result, true);

// Close cURL resource
curl_close($ch);

echo($result['token']);
?>