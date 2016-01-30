<?php

require APP_PATH . '/models/Contact.php';

$web = 'http://adsiar.com';

$contactTable = new Contact();

$contacts = $contactTable->all();

view('contacto', compact('web', 'contacts'));
