// create_challenge.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $duracion = $_POST['duracion'];
    $objetivos = $_POST['objetivos'];
    $tipo = 'usuario';

    $sql = "INSERT INTO Desafíos (nombre, descripcion, duracion, objetivos, tipo) VALUES ('$nombre', '$descripcion', '$duracion', '$objetivos', '$tipo')";
    mysqli_query($conn, $sql);

    header("Location: dashboard.php");
}
