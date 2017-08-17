<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, temp, humid,moisture FROM sensor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Temp : " . $row["temp"] . " Humidity :  " . $row["humid"] . " Moisture : " . $row["moisture"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
