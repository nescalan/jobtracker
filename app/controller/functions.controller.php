<?php #functions.php

# Checks if the user has an active session
function checkSession()
{
    if (isset($_SESSION['user'])) {
        # Redirect to index.php
        header("Location: index.php");
    }
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

# Sanitize Form - Security Phrase
function sanitizePhrase($pPhrase)
{
    $pPhrase = htmlspecialchars($pPhrase);
    $pPhrase = trim($pPhrase);
    $pPhrase = stripslashes($pPhrase);
    $pPhrase = strip_tags($pPhrase);
    $pPhrase = filter_var($pPhrase, FILTER_SANITIZE_STRING);
    $pPhrase = strtolower(($pPhrase));
    return $pPhrase;
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

# Sanitize Password
function sanitizePassword($pPassword)
{
    $pPassword = trim($pPassword);
    $pPassword = htmlspecialchars($pPassword);
    return $pPassword;
}

# Check password length
function checkPasswordLength($password)
{
    // Minimum password length
    $minLength = 8;

    // Maximum password length
    $maxLength = 20;

    // Check if the password length is within the minimum and maximum lengths
    if (strlen($password) < $minLength) {
        return false;
    } else if (strlen($password) > $maxLength) {
        return false;
    } else {
        return true;
    }
}

?>