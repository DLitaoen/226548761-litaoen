<?php
    // Initialization and declaration of variables
    $servername = "localhost:3306";
    $username = "root";
    $password = "Deuter0n0my318";
    $databasename = "event_calendar";

    // Connect to MySQL database
    $conn = new mysqli($servername, $username, $password, $databasename);

    // Catch connection errors
    if ($conn -> connect_error) {
        die ("MySQL database connection failed: " . $conn -> connect_error);
    }
?>