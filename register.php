<?php #register.php
require_once './app/model/Connection.php';

# Constants, variables and arrays
$connection = $errorMessage = $successMessage = '';

session_start();

if (isset($_SESSION['user'])) {
    # code...
    header('Location: ./index.php');
} else {
    require_once './app/controller/functions.controller.php';
    require_once './app/clases/User.class.php';
    require_once './app/clases/AffilatedCompany.class.php';

    # Database connection
    $connection = new Connection();
    $mysqli = $connection->openConnection();

    #  Check connection
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }

    # Instantiate User object and Affiliated Co. Object
    $user = new User();
    // $affilatedCompany = new AffilatedCompany();

    # Validata form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $user->setFullName(sanitizePhrase($_POST['full-name']));
        $affilatedCompany->setCompanyName(sanitizePhrase($_POST['company']));
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setPassword2($_POST['password2']);

        // Check if any of the required fields are empty
        if (empty($user->getFullName()) || empty($uaffilatedCompanyser->getCompanyName()) || empty($user->getEmail()) || empty($user->getPassword()) || empty($user->getPassword2())) {

            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';

        } elseif (!checkNameLength($user->getFullName())) {

            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">El nombre debe tener al menos 3 caracteres.</div>';

        } elseif (!checkCompanyLength($uaffilatedCompanyser->getCompanyName())) {

            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">La Empresa debe tener al menos 3 caracteres.</div>';

        } elseif (!validateEmail($user->getEmail())) {

            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">El correo no es válido.</div>';

        } elseif ($user->getPassword() !== $user->getPassword2()) {

            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">Las contraseñas no coinciden, intente de nuevo.</div>';

        } elseif (!checkPasswordLength($user->getPassword())) {

            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">La contraseña debe tener al menos 8 caracteres.</div>';

        } else {

            // Encript the password with md5 algorithm
            $user->setPassword(password_hash(sanitizePassword($_POST['password']), PASSWORD_DEFAULT));
            $user->setPassword2(password_hash(sanitizePassword($_POST['password2']), PASSWORD_DEFAULT));

            $email = mysqli_real_escape_string($mysqli, $user->getEmail());

            // Check if the user exists in the database table 'users'
            $sqlUsers = "SELECT * FROM users WHERE email = '$email' LIMIT 1 ";

            // Executes the query select
            $result = mysqli_query($mysqli, $sqlUsers);

            // Fetch the results of the query
            $resultArray = mysqli_fetch_assoc($result);

            // Check if there are any errors
            if (mysqli_num_rows($result) > 0) {
                $errorMessage .= '<div class="alert alert-danger" role="alert">El nombre de usuario ya existe.</div>';
            } else {
                // The user does not exist: Insert user into 'users' table
                $sqlUserInsert = "INSERT INTO users (fullname, email, password) VALUES (
                    '" . mysqli_real_escape_string($mysqli, $user->getFullName()) . "',
                    '" . mysqli_real_escape_string($mysqli, $user->getEmail()) . "',
                    '" . mysqli_real_escape_string($mysqli, $user->getPassword()) . "'
                );";

                mysqli_query($mysqli, $sqlUserInsert);

                // Clean the form variables
                $user->setFullName('');
                $uaffilatedCompanyser->getCompanyName('');
                $user->setEmail('');

                // Set the success message
                $fullName = ucwords($user->getFullName());


                $successMessage = "<div class='alert alert-success' role='alert'>Tu cuenta ha sido creada. <br/> Inicia sesión y comenzar a usar nuestro servicio.</div>";

                // Get the user's name
                $nombre = $user->getFullName();

            }

            // Free the memory associated with the result variable
            mysqli_free_result($result);

        }
    }

    // Close connection
    $connection->closeConnection($mysqli);

    require_once './app/views/register.view.php';

}

?>