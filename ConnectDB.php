<?php
$servername = "vmmysqlintha.coast.ebuero.de";
$username = "sugarcrm_hr";
$password = "gicaDee9";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*echo "Connected successfully";*/
?>