<?php
// db/connessione.php

$host = "localhost";
$user = "root";
$password = "";
$database = "portfolio";

// Crea connessione
$conn = mysqli_connect($host, $user, $password, $database);

// Verifica connessione
if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}
?>
