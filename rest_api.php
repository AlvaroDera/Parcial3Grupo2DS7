// rest_api.php
header("Content-Type: application/json");
include 'database.php';

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $input = json_decode(file_get_contents("php://input"), true);
        $usuario_id = $input['usuario_id'];
        $actividad = $input['actividad'];
        $duracion = $input['duracion'];
        
        $sql = "INSERT INTO Progreso (usuario_id, actividad, duracion) VALUES ('$usuario_id', '$actividad', '$duracion')";
        mysqli_query($conn, $sql);
        
        echo json_encode(["status" => "success"]);
        break;
    
    case 'GET':
        $usuario_id = $_GET['usuario_id'];
        $result = mysqli_query($conn, "SELECT * FROM Progreso WHERE usuario_id='$usuario_id'");
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        echo json_encode($data);
        break;
}
