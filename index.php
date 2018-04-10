<?php

// credentials
$clientId = 't5jZE8F5gS';
$baseURL = 'https://api.quizlet.com/2.0/sets/';

session_start();

if(!empty($_GET['id'])) {
	$_SESSION['id'] = $_GET['id'];
}

echo $baseURL . $_SESSION['id'];

session_destroy();
