<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('114039409878-r04frmg0l9ua40484vt39upoduhk8jcn.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/digital_forencis_vlab/1first.php');

// to get the email and profile 
$google_client->addScope('email');
$google_client->addScope('profile');


?>