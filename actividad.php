<?php #actividad.php

session_start();

if (isset($_SESSION['user'])) {
    # Redirect to home page if user is logged in
    header("Location: login.php");
} else {



    require_once './app/views/actividad.view.php';
}

# Close database connection
mysqli_close($mysqli);
?>