<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semantic page viewer</title>
    <link rel="stylesheet" href="./assets/css/styles.css"/>
</head>
<body>
    <div class="container">
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('inc/vars.php');
require_once('inc/functions.php');

//echo show_semantic('https://mediakod.com');

//echo show_semantic('https://aegist.netlify.com/', '#gatsby-focus-wrapper');

include('parts/form.php');
include('parts/result.php');

?>
    </div>
</body>
</html>