<?php
// Display all PHP errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection settings
$servername = "db"; // This should match the service name in docker-compose.yml
$username = "root";
$password = "root";
$dbname = "sql_demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_input = $_POST['username'];
$pass_input = $_POST['password'];

echo "<div class='container'>";
echo "<h2>Login Attempt</h2>";
echo "Username: " . htmlspecialchars($user_input) . "<br>";
echo "Password: " . htmlspecialchars($pass_input) . "<br>";

$sql = "SELECT * FROM users WHERE username = '$user_input' AND password = '$pass_input'";
echo "SQL Query: " . $sql . "<br>";

$result = $conn->query($sql);

if ($result === FALSE) {
    die("Error in query: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<table class='table table-striped mt-3'><thead><tr><th>Username</th><th>Password</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["username"]) . "</td><td>" . htmlspecialchars($row["password"]) . "</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<div class='alert alert-danger' role='alert'>Invalid credentials!</div>";
}

echo "</div>";

$conn->close();
?>