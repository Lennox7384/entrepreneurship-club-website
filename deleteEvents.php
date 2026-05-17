<?php

require_once(__DIR__ . "/db_config.php");

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the DELETE statement.  Use with extreme caution!
$sql = "DELETE FROM events";
if ($conn->query($sql) === TRUE) {
    echo "All events deleted successfully";
} else {
    echo "Error deleting events: " . $conn->error;
}

$conn->close();

?>
