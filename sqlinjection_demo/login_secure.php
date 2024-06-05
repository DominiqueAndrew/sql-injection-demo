<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = new mysqli("localhost", "root", "", "sql_demo");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);

$username = $_POST['username'];
$password = $_POST['password'];

$stmt->execute();
$result = $stmt->get_result();

if ($result === FALSE) {
    die("Error in query: " . $stmt->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"]. " - Password: " . $row["password"]. "<br>";
    }
} else {
    echo "Invalid credentials!";
}

$stmt->close();
$conn->close();
?>