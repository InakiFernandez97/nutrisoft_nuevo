<?php
// Versión simplificada de index.php para debug
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<!DOCTYPE html><html><head><title>Test Simple</title></head><body>";
echo "<h1>Test de Index.php Simplificado</h1>";

try {
    echo "<p>1. Iniciando sesión...</p>";
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    echo "<p>✅ Sesión iniciada</p>";
    
    echo "<p>2. Cargando config.php...</p>";
    require_once "config.php";
    echo "<p>✅ config.php cargado</p>";
    
    echo "<p>3. Cargando controlador...</p>";
    require_once "controlador/plantillaControlador.php";
    echo "<p>✅ Controlador cargado</p>";
    
    echo "<p>4. Todo funcionó correctamente</p>";
    echo "<p><strong>El problema no es de PHP, revisa el .htaccess</strong></p>";
    
} catch(Exception $e) {
    echo "<p>❌ Error: " . $e->getMessage() . "</p>";
    echo "<p>Archivo: " . $e->getFile() . "</p>";
    echo "<p>Línea: " . $e->getLine() . "</p>";
}

echo "</body></html>";
?>
