<?php
// Establish database connection (replace with your own credentials)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'project';
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve user input
$name = $_POST['name'];

// Perform database query
$query = "SELECT * FROM gyms WHERE name LIKE '%$name%'";
$result = mysqli_query($connection, $query);

// Display matching records
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Display relevant information from the matching records
        echo "Name: " . $row['name'] . "<br>";
        echo "Type: " . $row['type'] . "<br>";
        echo "Location: " . $row['location'] . "<br>";
        echo "Number: " . $row['number'] . "<br>";
        echo "Note: " . $row['note'] . "<br>";
        // Additional fields can be displayed here
        echo "<br>";
    }
} else {
    echo "No matching records found.";
}

// Close the database connection
mysqli_close($connection);
?>


