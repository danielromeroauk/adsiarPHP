<?php

require 'config.php';
require 'helpers.php';

$name = 'Daniel';
$secret = 'Algo secreto';
$twitter = '@danielromeroauk';

view('view', compact('name', 'twitter'));
