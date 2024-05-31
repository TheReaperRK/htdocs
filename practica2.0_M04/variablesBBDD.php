<?php

$dbhost = "localhost";
$dbuser = "Carlos";
$dbpass = "12345";
$dbname = "mercatPracticaP3";

// Creem la conexió
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Comprobem la conexió
if ($conn->connect_error) {
    die("Conexión errónea: " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS total FROM productes";
$result = $conn->query($sql);

    // Obtenir el resultat
    $row = $result->fetch_assoc();
    $items = $row['total'];
?>