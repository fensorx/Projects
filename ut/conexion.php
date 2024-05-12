<?php
$servername = "localhost"; // Cambia esto si tu servidor de base de datos está en otro lugar
$username = "root"; // Usuario de la base de datos
$password = "123456cd"; // Contraseña de la base de datos
$dbname = "ut_database"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
