<?php

require 'config.php';
require 'helpers.php';

$url = $_GET['url'];

// index.php?url=home
if ($url == 'home') {
    require "controllers/$url.php";
}
// index.php?url=contacto
elseif ($url == 'contacto') {
    require "controllers/$url.php";
} else {
    header('HTTP/1.0 404 Not Found');
    require "controllers/404.php";
}
