<?php
// Establecer la conexión a la base de datos (asegúrate de cambiar los valores según tu configuración)
$servername = "localhost";
$username = "";
$password = "";
$database = "library";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta SQL para obtener los usuarios y contraseñas de la tabla "library"
$sql = "SELECT username, password FROM library";

$result = $conn->query($sql);

$users = array();

if ($result->num_rows > 0) {
    // Recorrer los resultados y almacenarlos en el array $users
    while($row = $result->fetch_assoc()) {
        $users[$row["username"]] = $row["password"];
    }
} else {
    echo "No hay resultados en la tabla library.";
}

$conn->close();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$user]) && $users[$user] === $password) {
        session_start();
        $_SESSION["username"] = $user;
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Username or password incorrect.');</script>";
        echo "<meta http-equiv='refresh' content='0;url=form.php'>";
        exit();
    }
}
?>
