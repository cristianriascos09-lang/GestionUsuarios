<?php
$host = " mysql-cristian1995.alwaysdata.net";
$user = "cristian1995";
$pass = "3187304580.Cris";
$db = "cristian1995_gestiónusuarios";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>