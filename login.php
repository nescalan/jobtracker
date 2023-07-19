<?php #login.controller.php

require_once './app/controller/functions.controller.php';


// define variables and set to empty values
$successMessage = $errorMessage = $name = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitizePhrase($_POST["email"]);
    $password = sanitizePhrase($_POST["password"]);

    echo "email: $email | pwd: $password";

    if (empty($email) || empty($password)) {
        # Error message
        $errorMessage .= '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
    } else {

        $response = sanitizeEmail($email);
        echo "<br/>Response: $response";

        if (!$response) {
            # code...
            $errorMessage .= '<div class="alert alert-danger" role="alert">No es un correo valido.</div>';
        } else {
            # code...
            $successMessage .= '<div class="alert alert-success" role="alert">Correo valido.</div>';

        }
    }


}



require_once './app/views/login.view.php';

?>