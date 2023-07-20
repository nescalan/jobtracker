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
    $pPhrase = trim($pPhrase);
    $pPhrase = htmlspecialchars($pPhrase);
    $pPhrase = filter_var($pPhrase, FILTER_SANITIZE_STRING);
    $pPhrase = strtolower(($pPhrase));
    return $pPhrase;
}

# Sanitize email
function sanitizeEmail($pEmail)
{
    // Remove all characters except letters, digits, @, dot (.), underscore (_), and hyphen (-).
    $sanitizedEmail = preg_replace('/[^\w@.-]/', '', $pEmail);

    // Return the sanitized email address.
    return $sanitizedEmail;
}


# Check if the email is valid
function validateEmail($email)
{
    // Remove any surrounding HTML tags from the email address
    $email = strip_tags($email);

    // Use the filter_var function with FILTER_VALIDATE_EMAIL filter
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
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

# Check name length
function checkNameLength($name)
{
    // Minimum password length
    $minLength = 3;

    // Maximum password length
    $maxLength = 120;

    // Check if the name length is within the minimum and maximum lengths
    if (strlen($name) < $minLength) {
        return false;
    } else if (strlen($name) > $maxLength) {
        return false;
    } else {
        return true;
    }
}

# Check company length
function checkCompanyLength($company)
{
    // Minimum password length
    $minLength = 3;

    // Maximum password length
    $maxLength = 120;

    // Check if the company length is within the minimum and maximum lengths
    if (strlen($company) < $minLength) {
        return false;
    } else if (strlen($company) > $maxLength) {
        return false;
    } else {
        return true;
    }
}


?>