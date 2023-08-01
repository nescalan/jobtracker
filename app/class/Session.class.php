<?php
class Session
{
    public function __construct()
    {
        // Start the session if it hasn't been started already
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function isLoggedIn()
    {
        // Check if the 'user_id' session variable is set
        return isset($_SESSION['user_id']);
    }

    public function validateSession()
    {
        if (!$this->isLoggedIn()) {
            // Redirect the user to the login page or show an error message
            // depending on your application's requirements.
            header('Location: login.php');
            exit();
        }
    }

    public function destroy()
    {
        // Clear all session data and destroy the session
        session_unset();
        session_destroy();
    }
}
?>