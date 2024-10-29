// log_activity.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_SESSION['usuario_id'];
    $desafio_id = $_POST['desafio_id'];
    $actividad = $_POST['actividad'];
    $duracion = $_POST['duracion'];
    $calorias_quemadas = calcular_calorias($actividad, $duracion);

    $sql = "INSERT INTO Progreso (usuario_id, desafio_id, actividad, duracion, calorias_quemadas) VALUES ('$usuario_id', '$desafio_id', '$actividad', '$duracion', '$calorias_quemadas')";
    mysqli_query($conn, $sql);

    header("Location: dashboard.php");
}
