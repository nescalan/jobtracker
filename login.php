<?php #login.controller.php

require_once './app/controller/functions.controller.php';
require_once './app/clases/User.class.php';



// define variables and set to empty values
$successMessage = $errorMessage = $name = $email = "";

$user = new User();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user->setEmail(sanitizeEmail($_POST["email"]));
    $user->setPassword(sanitizePhrase($_POST["password"]));


    echo "email: {$user->getEmail()} | pwd: {$user->getPassword()}";

    if (empty($user->getEmail()) || empty($user->getPassword())) {

        # Error message
        $errorMessage .= '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';

    } elseif (!validateEmail($user->getEmail()) || !checkPasswordLength($user->getPassword())) {

        # Error message
        $errorMessage .= '<div class="alert alert-danger" role="alert">Usuario o contraseña no válidos. <br/>Por favor, inténtalo de nuevo.</div>';

    } else {
        require_once './app/model/Connection.php';

        #Database connection
        $connection = new Connection();
        $mysqli = $connection->openConnection();

        #  Check connection
        if (!$mysqli) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $email = mysqli_real_escape_string($mysqli, $user->getEmail());

        // Check if user exists
        $sqlUsers = "SELECT * FROM users WHERE email = '$email' LIMIT 1";

        // Executes the query select
        $result = mysqli_query($mysqli, $sqlUsers);

        // Fetch the results of quety
        $resultArray = mysqli_fetch_assoc($result);

        // Check if there are any errors
        if (mysqli_num_rows($result) < 1) {
            $errorMessage .= '<div class="alert alert-danger" role="alert">Usuario o contraseña inválidos. <br/>Por favor, inténtalo de nuevo.</div>';

        } elseif ($user->getPassword() !== $resultArray['password']) {
            # Error Message
            $errorMessage .= '<div class="alert alert-danger" role="alert">Usuario o contraseña inválidos. <br/>Por favor, inténtalo de nuevo.</div>';

        } else {
            # Success Message
            $successMessage .= '<div class="alert alert-success" role="alert">Todo bien.</div>';
        }


    }


}



require_once './app/views/login.view.php';

?>