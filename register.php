<?php #registrate.controller.php

session_start();

if (isset($_SESSION['user'])) {
    # code...
    header('Location: ./index.php');
}

require_once 'app\views\register.view.php';

?>