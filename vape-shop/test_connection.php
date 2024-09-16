<?php
include 'db_config.php'; // Esto es para incluir la configuración de la base de datos

// Comprobación simple para verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos MySQL.";
}
?>
