<?php #login.php

session_start();

if (isset($_SESSION['user'])) {
  # Redirect to home page if user is logged in
  header("Location: index.php");
} else {
  # Redirect to home page if user is logged in
  header("Location: login.php");
}

?>