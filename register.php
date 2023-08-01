<?php #register.php

session_start();

require_once './app/model/Connection.php';

# Constants, variables and arrays
$connection = $errorMessage = $successMessage = '';


if (isset($_SESSION['user'])) {
    # code...
    header('Location: ./index.php');
} else {
    require_once './app/controller/functions.controller.php';
    require_once './app/class/User.class.php';
    require_once './app/class/AffiliatedCompany.class.php';

    # Database connection
    $connection = new Connection();
    $mysqli = $connection->openConnection();

    #  Check connection
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }

    # Instantiate User object and Affiliated Co. Object
    $user = new User();
    $affilatedCompany = new AffiliatedCompany();

    # Validata form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $user->setFullName(sanitizePhrase($_POST['full-name']));
        $affilatedCompany->setCompanyName(sanitizePhrase($_POST['company']));
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $user->setPassword2($_POST['password2']);

        // Check if any of the required fields are empty
        if (empty($user->getFullName()) || empty($affilatedCompany->getCompanyName()) || empty($user->getEmail()) || empty($user->getPassword()) || empty($user->getPassword2())) {

            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';

        } elseif (!checkNameLength($user->getFullName())) {

            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">El nombre debe tener al menos 3 caracteres.</div>';

        } elseif (!checkCompanyLength($affilatedCompany->getCompanyName())) {

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

            // Encript the password with password_hash algorithm
            $user->setPassword(password_hash(sanitizePassword($_POST['password']), PASSWORD_DEFAULT));
            $user->setPassword2(password_hash(sanitizePassword($_POST['password2']), PASSWORD_DEFAULT));

            $company = mysqli_real_escape_string($mysqli, $affilatedCompany->getCompanyName());
            $email = mysqli_real_escape_string($mysqli, $user->getEmail());

            // Check if company exist in the database table 'affiliated_companies'
            $sqlCompany = "SELECT * FROM affiliated_companies WHERE company_name = '$company' LIMIT 1";
            $resultCompany = mysqli_query($mysqli, $sqlCompany);

            if (!$resultCompany) {
                die("Error executing the query: " . mysqli_error($mysqli));
            }

            // Check if resultCompany 
            if (mysqli_num_rows($resultCompany) > 0) {
                $errorMessage .= '<div class="alert alert-danger" role="alert">La empresa ya está registrada.</div>';
            }

            // Check if the user exists in the database table 'users'
            $sqlUser = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
            $resultUser = mysqli_query($mysqli, $sqlUser);

            // Check resultUser
            if (!$resultUser) {
                die("Error executing the query: " . mysqli_error($mysqli));
            }

            $resultUserArray = mysqli_fetch_assoc($resultUser);

            if (mysqli_num_rows($resultUser) > 0) {
                $errorMessage .= '<div class="alert alert-danger" role="alert">El nombre de usuario ya existe.</div>';
            }

            // Check if there are any errors
            if (mysqli_num_rows($resultUser) < 1 && mysqli_num_rows($resultCompany) < 1) {

                // The company doest not exists: Inster it into 'companies' table
                $sqlCompanyInsert = "INSERT INTO affiliated_companies (company_name) VALUES (
                    '" . mysqli_real_escape_string($mysqli, $affilatedCompany->getCompanyName()) . "'
                )";

                // Executes Insert
                mysqli_query($mysqli, $sqlCompanyInsert);
                $affilatedCompanyID = mysqli_insert_id($mysqli);

                // The user does not exist: Insert user into users table
                $sqlUserInsert = "INSERT INTO users (fullname, email, affiliated_company_id, user_password) VALUES (
                    '" . mysqli_real_escape_string($mysqli, $user->getFullName()) . "',
                    '" . mysqli_real_escape_string($mysqli, $user->getEmail()) . "',
                    '" . $affilatedCompanyID . "',
                    '" . mysqli_real_escape_string($mysqli, $user->getPassword()) . "'
                )";

                // Clean the form variables
                $user->setFullName('');
                $affilatedCompany->setCompanyName('');
                $user->setEmail('');

                // Set the success message
                $successMessage = "<div class='alert alert-success' role='alert'>Tu cuenta ha sido creada. <br/> Inicia sesión y comenzar a usar nuestro servicio.</div>";
            }
        }
    }

    // Close connection
    mysqli_close($mysqli);

    require_once './app/views/register.view.php';

}

?>