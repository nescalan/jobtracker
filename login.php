<?php #login.controller.php

require_once './app/controller/functions.controller.php';
require_once './app/clases/User.class.php';



// define variables and set to empty values
$successMessage = $errorMessage = $name = $email = "";

$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user->setEmail(sanitizePhrase($_POST["email"]));
    $user->setPassword(sanitizePhrase($_POST["password"]));


    echo "email: {$user->getEmail()} | pwd: {$user->getPassword()}";

    if (empty($user->getEmail()) || empty($user->getPassword())) {

        # Error message
        $errorMessage .= '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';

    } elseif (!validateEmail($user->getEmail()) || !checkPasswordLength($user->getPassword())) {

        # Error message
        $errorMessage .= '<div class="alert alert-danger" role="alert">Usuario o contraseña no válidos. <br/>Por favor, inténtalo de nuevo.</div>';

    } else {

        $successMessage = '<div class="alert alert-succes" role="alert">Todo bien.</div>';
    }


}



require_once './app/views/login.view.php';

?>