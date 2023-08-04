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

    # Loged user
    $logedUser = $_SESSION['user'];

    # Get affiliated compnay's name
    $sqlCompanyName =
        "SELECT u.fullname, ac.company_name
         FROM users u
         INNER JOIN affiliated_companies ac ON u.affiliated_company_id = ac.id
         WHERE u.email = '$logedUser'";

    # Executes the sqlCompanyName query
    $resultCompanyName = mysqli_query($mysqli, $sqlCompanyName);
    $resultadoEmpresa = mysqli_fetch_array($resultCompanyName);
    $_SESSION['company'] = $resultadoEmpresa['company_name'];

    # Get order_status from dB
    $sqlOrderStatus =
        " SELECT COUNT(*) 
          FROM workorders
          WHERE 'order_status' = 'recived'
        ";

    # Executes the query select
    $resultReceivedStatus = mysqli_query($mysqli, $sqlOrderStatus);
    $activity->setReceivedStatus(mysqli_fetch_array($resultReceivedStatus));
    $resultadoStatus = mysqli_fetch_array($resultReceivedStatus);


    # Print the content of resultReceivedStatus
    print_r($resultReceivedStatus);

    // echo $_SESSION['user'];

    // print_r($_SESSION['user']);

    # Redirect to home page if user is logged in
    require_once './app/views/actividad.view.php';
}

# Close database connection
// mysqli_close($mysqli);
?>