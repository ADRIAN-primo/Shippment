<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "shipment_management");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve shipment data from database
$sql = "SELECT * FROM `shipment data`";
$result = mysqli_query($conn, $sql);

// Display shipment data in web app
while ($row = mysqli_fetch_assoc($result)) {
    echo "<h2>Shipment " . $row['ShipmentID'] . "</h2>";
    echo "<p>Origin: " . $row['ORIGIN'] . "</p>";
    echo "<p>Destination: " . $row['DESTINATION'] . "</p>";
    echo "<p>Weight: " . $row['WEIGHT(kg)'] . " kg</p>";
    echo "<p>Status: " . $row['STATUS'] . "</p>";
    echo "<p>Payment Method: " . $row['PAYMENT'] . "</p>";
    echo "<hr>";
}

// Close the connection
mysqli_close($conn);
?>