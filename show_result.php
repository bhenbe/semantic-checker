<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $url = (!empty($_GET['url'])) ? $_GET['url'] : '';
    $wrapper = (!empty($_GET['wrapper'])) ? $_GET['wrapper'] : '';

    require_once('inc/functions.php');

    if (!empty($url))
        echo show_semantic($url, $wrapper);

