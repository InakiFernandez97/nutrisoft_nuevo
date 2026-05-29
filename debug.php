<?php
// Archivo de diagnóstico de errores
// Accede a: https://nutrisoft.newplanet.cl/debug.php

// Activar reporte de errores completo
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo "<h1>Diagnóstico de NutriSoft</h1>";
echo "<hr>";

// Test 1: PHP funciona
echo "<h2>✓ PHP está funcionando</h2>";
echo "Versión de PHP: " . phpversion() . "<br>";
echo "Fecha actual: " . date('Y-m-d H:i:s') . "<br><br>";

// Test 2: Verificar archivos principales
echo "<h2>Test de Archivos:</h2>";
$archivos = [
    'config.php',
    'index.php',
    '.htaccess',
    'controlador/plantillaControlador.php',
    'modelo/conexion.php'
];

foreach($archivos as $archivo){
    if(file_exists($archivo)){
        echo "✅ $archivo - EXISTE<br>";
    } else {
        echo "❌ $archivo - NO EXISTE<br>";
    }
}
echo "<br>";

// Test 3: Intentar cargar config.php
echo "<h2>Test de config.php:</h2>";
if(file_exists('config.php')){
    try {
        require_once 'config.php';
        echo "✅ config.php cargado correctamente<br>";
        if(defined('BASE_URI')){
            echo "BASE_URI: " . BASE_URI . "<br>";
        }
        if(defined('ROOT_PATH')){
            echo "ROOT_PATH: " . ROOT_PATH . "<br>";
        }
    } catch(Exception $e){
        echo "❌ Error cargando config.php: " . $e->getMessage() . "<br>";
    }
} else {
    echo "❌ config.php no existe<br>";
}
echo "<br>";

// Test 4: Test de conexión a BD
echo "<h2>Test de Conexión a Base de Datos:</h2>";
try {
    if(file_exists('modelo/conexion.php')){
        require_once 'modelo/conexion.php';
        echo "✅ conexion.php cargado<br>";
        
        $con = ConexionMysql::ConectarMysql();
        echo "✅ Conexión a base de datos EXITOSA<br>";
        echo "Tipo: " . get_class($con) . "<br>";
    } else {
        echo "❌ modelo/conexion.php no existe<br>";
    }
} catch(Exception $e){
    echo "❌ Error de conexión: " . $e->getMessage() . "<br>";
}
echo "<br>";

// Test 5: Permisos
echo "<h2>Test de Permisos:</h2>";
echo "Usuario PHP: " . get_current_user() . "<br>";
echo "Directorio actual: " . getcwd() . "<br>";
echo "Permiso de escritura: " . (is_writable('.') ? '✅ SI' : '❌ NO') . "<br>";
echo "<br>";

// Test 6: Extensiones PHP necesarias
echo "<h2>Extensiones PHP:</h2>";
$extensiones = ['pdo', 'pdo_mysql', 'mbstring', 'openssl', 'json'];
foreach($extensiones as $ext){
    if(extension_loaded($ext)){
        echo "✅ $ext - Instalada<br>";
    } else {
        echo "❌ $ext - NO instalada<br>";
    }
}
echo "<br>";

// Test 7: Variables de entorno
echo "<h2>Información del Servidor:</h2>";
echo "SERVER_SOFTWARE: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'No disponible') . "<br>";
echo "DOCUMENT_ROOT: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'No disponible') . "<br>";
echo "SCRIPT_FILENAME: " . ($_SERVER['SCRIPT_FILENAME'] ?? 'No disponible') . "<br>";

echo "<br><hr>";
echo "<p><strong>Si todo está en verde (✅), el problema está en index.php o .htaccess</strong></p>";
echo "<p><a href='index.php'>Probar index.php</a> | <a href='info.php'>Ver phpinfo()</a></p>";
?>