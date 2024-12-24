<?php
require_once '../includes/config.php';

$params = array(
    'serviceKey' => API_KEY,
    'pageNo' => 1,
    'numOfRows' => 100,
    'resultType' => 'json'
);

$url = API_URL . '?' . http_build_query($params);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
echo $response;
?> 