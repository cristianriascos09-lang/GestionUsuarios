<?php
include("conexion.php");

if ($_POST) {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO usuarios (nombre, cedula, telefono) 
            VALUES ('$nombre', '$cedula', '$telefono')";

    $conn->query($sql);

    header("Location: index.php");
}
?>

<h2>Crear Usuario</h2>

<form method="POST">
    Nombre: <input type="text" name="nombre"><br>
    Cédula: <input type="text" name="cedula"><br>
    Teléfono: <input type="text" name="telefono"><br>
    <button type="submit">Guardar</button>
</form>