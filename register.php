<?php #registrate.controller.php
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


    # Database connection
    $connection = new Connection();
    $conn = $connection->openConnection();

    #  Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br/>";

    # Instantiate User object
    $user = new User();

    # Validata form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $user->setFullName(sanitizePhrase($_POST['full-name']));
        $user->setCompany(sanitizePhrase($_POST['company']));
        $user->setEmail(sanitizeEmail($_POST['email']));
        $user->setPassword($_POST['password']);
        $user->setPassword2($_POST['password2']);
        // $user->setPassword(md5(sanitizePassword($_POST['password'])));
        // $user->setPassword2(md5(sanitizePassword($_POST['password2'])));

        // // Access the captured information
        echo "Full name: {$user->getFullName()} <br/>";
        echo "Company: {$user->getCompany()}  <br>";
        echo "Email: {$user->getEmail()} <br>";
        echo "Password: {$user->getPassword()} <br>";
        echo "Password2: {$user->getPassword2()} <br>";




        // Check if any of the required fields are empty
        if (empty($user->getFullName()) || empty($user->getCompany()) || empty($user->getEmail()) || empty($user->getPassword()) || empty($user->getPassword2())) {
            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">Todos los campos son obligatorios.</div>';
        } elseif ($user->getPassword() !== $user->getPassword2()) {
            // Set the error message
            $errorMessage = '<div class="alert alert-danger" role="alert">Las contraseñas no coinciden, intente de nuevo.</div>';
        } else {
            // Set the success message
            $successMessage = "<div class='alert alert-success' role='alert'>{$user->getFullName()}, gracias por registrarte!</div>";

            // Get the user's name
            $nombre = $user->getFullName();

            // Echo the success message
            echo "Ya Bretea este carajada: {$nombre}";
        }
    }

    require_once './app/views/register.view.php';

}






?>