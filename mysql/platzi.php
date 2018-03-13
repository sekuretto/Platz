<?php
$servername = "localhost";
$username = "root";
$password = "sala";
$database = "platz";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully <br>";

$sql = "SELECT * FROM kayttaja";
$result= $conn->query($sql);

if ($result->num_rows >0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["kayttajaid"]. " - Käyttäjänimi: " . $row["kayttajanimi"]. " " . $row["salasana"]. " " . $row["email"]. " " . $row["kaupunki"]. "<br>";
        
    }
} else {
    echo "0 results";
}
$conn->close();
?>
