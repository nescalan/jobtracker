<?php
require_once './app/clases/Session.class.php';

// Instantiate the Session class
$session = new Session();

// Validate the session
$session->validateSession();

// If the session is valid, continue with the page content
// Your protected page content goes here...
?>