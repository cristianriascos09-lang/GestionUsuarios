<?php
$host = "mysql-cristian1995.alwaysdata.net";
$user = "cristian1995";
$pass = "clase1234";
$db = "cristian1995_gestionusuarios";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>