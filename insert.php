<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "stage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$conn->query('INSERT INTO stagiaire (nom, prenom) VALUES ("X" , "Y")');

$conn->close();
?>


