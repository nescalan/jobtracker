<?php #actividad.php

session_start();

if (isset($_SESSION['user'])) {
    # Redirect to home page if user is logged in
    require_once './app/views/actividad.view.php';
} else {

    header("Location: login.php");
}

# Close database connection
// mysqli_close($mysqli);
?>