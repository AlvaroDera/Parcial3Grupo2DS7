// set_preferences.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("visualizacion", $_POST['preferencia'], time() + (86400 * 30), "/");
}