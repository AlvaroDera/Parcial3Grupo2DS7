// login.php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM Usuarios WHERE nombre_usuario='$nombre_usuario'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['contraseña'])) {
        $_SESSION['usuario_id'] = $user['id'];
        header("Location: dashboard.php");
    }
}
