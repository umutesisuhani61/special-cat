<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'Github_OAuth_Client.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = '4edb73c9a6f5328a744c';
$clientSecret     = '74398b3af837e20ba103f2be7da7a63f77b34ca0';
$redirectURL     = 'http://localhost/signWithGithub';
// $redirectURL     = 'https://www.codexworld.com/github-login/';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}