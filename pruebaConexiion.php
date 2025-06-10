<?php
require_once __DIR__ .'/Conexion.php';
try {
    $pdo = Database::connect();
    echo "<h2 style='color:green;'>✅ Conexión exitosa a la base de datos.</h2>";

    $stmt = $pdo->query("SHOW TABLES");
    $tablas = $stmt->fetchAll(PDO::FETCH_COLUMN);

    echo "<strong>Tablas encontradas:</strong><br>";
    foreach ($tablas as $tabla) {
        echo "- $tabla<br>";
    }

} catch (PDOException $e) {
    echo "<h2 style='color:red;'>❌ Error de conexión: " . $e->getMessage() . "</h2>";
}
