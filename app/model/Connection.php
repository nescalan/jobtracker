<?php #Connection.php

class Connection
{
    # Properties 
    protected $host = 'localhost'; // Host name or IP address of the database server
    protected $user = 'root'; // Username to access the database with read/write privileges
    protected $password = '4u3p7px6'; // Password for that user account
    protected $db = 'jobtracker'; // Name of the database we are connecting to

    # Create connection
    public function openConnection()
    {
        $mysqli = mysqli_connect($this->host, $this->user, $this->password, $this->db);

        if (!$mysqli) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $mysqli;
    }

    # Close connection
    public function closeConnection($mysqli)
    {
        mysqli_close($mysqli);
    }


}
?>