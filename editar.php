<?php
include("conexion.php");

$id = $_GET['id'];

if ($_POST) {
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE usuarios 
            SET nombre='$nombre', cedula='$cedula', telefono='$telefono' 
            WHERE id=$id";

    $conn->query($sql);

    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM usuarios WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Editar Usuario</h2>

<form method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
    Cédula: <input type="text" name="cedula" value="<?php echo $row['cedula']; ?>"><br>
    Teléfono: <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br>
    <button type="submit">Actualizar</button>
</form>