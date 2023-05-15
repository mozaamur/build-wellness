<?php
// Assuming you're using MySQL database

// Retrieve the record ID from the form submission
$recordID = $_POST['name'];

// Establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the delete query
$sql = "DELETE FROM coaches WHERE name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $recordID);
$stmt->execute();

// Check if the deletion was successful
if ($stmt->affected_rows > 0) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record.";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
