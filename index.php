<?php

// credentials
$clientId = 't5jZE8F5gS';
$baseURL = 'https://api.quizlet.com/2.0/sets/';

session_start();

if(!empty($_GET['id'])) {
	$_SESSION['id'] = $_GET['id'];
}

echo $baseURL . $_SESSION['id'];

$ch     = curl_init($baseURL . $_SESSION['id']);
$ch_set = array(
    CURLOPT_FOLLOWLOCATION => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1
);
curl_setopt_array($ch, $ch_set);
$response = curl_exec($ch);
echo ($response);

session_destroy();
