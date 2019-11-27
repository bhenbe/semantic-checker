<?php

global $baseUrl, $checkUrl, $checkWrapper;

$baseUrl = 'http://localhost:8888/semantic-check/';

$checkUrl = (!empty($_POST['checkUrl'])) ? $_POST['checkUrl'] : '';
$checkWrapper = (!empty($_POST['checkWrapper'])) ? $_POST['checkWrapper'] : '';