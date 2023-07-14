<?php #functions.php

# Checks if the user has an active session
function checkSession()
{
    if (isset($_SESSION['user'])) {
        # Redirect to index.php
        header("Location: index.php");
    }
}

# Sanitize Form - Security Phrase
function sanitizePhrase($pPhrase)
{
    $pPhrase = htmlspecialchars($pPhrase);
    $pPhrase = trim($pPhrase);
    $pPhrase = stripslashes($pPhrase);
    $pPhrase = strip_tags($pPhrase);
    $pPhrase = filter_var($pPhrase, FILTER_SANITIZE_STRING);
    return $pPhrase;
}

# Sanitize Password
function sanitizePassword($pPassword)
{
    $pPassword = htmlspecialchars($pPassword);
    return $pPassword;
}

# Sanitize email
function sanitizeEmail($pEmail)
{
    // Remove all characters except letters, digits, and @.
    $pEmail = htmlspecialchars($pEmail);
    $pEmail = trim($pEmail);
    $pEmail = stripcslashes($pEmail);
    $pEmail = strip_tags($pEmail);
    $pEmail = filter_var($pEmail, FILTER_SANITIZE_EMAIL);
    $pEmail = filter_var($pEmail, FILTER_VALIDATE_EMAIL);

    // Return the sanitized email address.
    return $pEmail;
}




# Check the session of each page
function redirectToActivity($requireOnceFile)
{
    if (isset($_SESSION['user'])) {
        # redirect to actividad.php
        require_once $requireOnceFile;
    } else {
        # Redirect to login.php
        header('Location: login.php');
    }
}




?>