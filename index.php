<?php

// credentials
$clientID = 't5jZE8F5gS';
$baseURL = 'https://api.quizlet.com/2.0/sets/';

session_start();

if(!empty($_GET['id'])) {
	$_SESSION['id'] = $_GET['id'];
}

echo $baseURL . $_SESSION['id'];

$curl = curl_init($baseURL.$_SESSION['id']);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization: Bearer '.$cliendID]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($curl);
if ($json) {
	$data = json_decode($json);
	echo "You found {$data}!";
}

session_destroy();
