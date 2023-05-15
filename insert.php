<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
// Assuming you have already established a database connection

// Retrieve the form data using $_POST
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

// Prepare the SQL statement
$sql = "INSERT INTO friends (name, age,email) VALUES ('$name', '$age','$email')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




//display the table
$sql2 = "SELECT * FROM friends";
$result = $conn->query($sql2);

// Check if any rows are returned
if ($result->num_rows > 0) {
    // Start building the HTML table
    echo "<table>";
    echo "<tr><th>Name</th><th>Age</th>th>Email</th></tr>";

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();

?>
