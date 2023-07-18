<?php #registrate.controller.php
require_once 'app\model\Connection.php';
require_once 'app\clases\User.class.php';


# Constants, variables and arrays
$connection = $errorMessage = $successMessage = '';

session_start();

if (isset($_SESSION['user'])) {
    # code...
    header('Location: ./index.php');
} else {
    require_once 'app\views\register.view.php';

    # Database connection
    $connection = new Connection();
    $conn = $connection->openConnection();

    #  Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br/>";


    # Validata form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $fullName = $_POST['full-name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        // Instantiate User object
        $user = new User($fullName, $company, $email, $password, $password2);

        // Access the captured information
        echo "Full name: {$user->getFullName()} <br/>";
        echo "Company:   {$user->getCompany()}  <br>";
        echo "Email:  {$user->getEmail()} <br>";
        echo "Password: {$user->getPassword()} <br>";

        # Conditional: check empty variables
        if (empty($fullName)) {
            # Error message
            $errorMessage .= '<div class="alert alert-danger" role="alert">Por favor, ingresa tu nombre completo.</div>';

        } else {
            # code...
        }

    }

}






?>