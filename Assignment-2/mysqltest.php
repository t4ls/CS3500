<?php
	$servername = "yakko.cs.wmich.edu:3306";
	$username = "todo";
	$password = "monkey";
	$dbname = "t4ls_todo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "username: " . $row["username"]. " - email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>