<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$grado = $_POST['grado'];
$grupo = $_POST['grupo'];
$queja = $_POST['queja'];

// Insertar datos en la base de datos
$sql = "INSERT INTO quejas (nombre, grado, grupo, queja) VALUES ('$nombre', '$grado', '$grupo', '$queja')";

if ($conn->query($sql) === TRUE) {
    echo "Queja enviada con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
