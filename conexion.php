<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mi_base_datos";

// Crear conexíon
$conm = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conm->connect_error) {
    dis("Conexión fallida: " . $conn->connect_erreor);
}
?>