<?php #actividad.php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
} else {
    # Import database connection
    require_once './app/model/Connection.php';
    require_once './app/class/Activity.class.php';
    require_once './app/class/AffiliatedCompany.class.php';

    $activity = new Activity();
    $affilatedCompany = new AffiliatedCompany();

    # Database connection
    $connection = new Connection();
    $mysqli = $connection->openConnection();

    # Check connection
    if (!$mysqli) {
        die("Connection failed: " . mysqli_connect_error());
    }

    # Get affiliated compnay's name
    // $sqlCompanyName = 
    //     "SELECT  
    //     FROM affiliated_companies; "

    # Get order_status from dB
    $sqlOrderStatus =
        " SELECT COUNT(*) AS order_count
          FROM WORKORDERS
          WHERE order_status = 'Recibido'
        ";

    # Executes the query select
    $resultReceivedStatus = mysqli_query($mysqli, $sqlOrderStatus);
    $activity->setReceivedStatus(mysqli_fetch_array($resultReceivedStatus));
    $resultado = mysqli_fetch_array($resultReceivedStatus);
    // print_r($resultReceivedStatus);
    print_r($resultado);

    echo $_SESSION['user'];

    // print_r($_SESSION['user']);

    # Redirect to home page if user is logged in
    require_once './app/views/actividad.view.php';
}

# Close database connection
// mysqli_close($mysqli);
?>