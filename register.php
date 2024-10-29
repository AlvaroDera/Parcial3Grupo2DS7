// register.php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO Usuarios (nombre_usuario, email, contraseña) VALUES ('$nombre_usuario', '$email', '$password')";
    mysqli_query($conn, $sql);

    $_SESSION['usuario_id'] = mysqli_insert_id($conn);
    header("Location: dashboard.php");
}
