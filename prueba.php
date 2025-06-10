<?php
$mysqli = new mysqli("localhost", "root", "", "runnercar");

if ($mysqli->connect_error) {
    die("Falló la conexión: " . $mysqli->connect_error);
} else {
    echo "✅ Conexión exitosa con MySQLi";
}
?>