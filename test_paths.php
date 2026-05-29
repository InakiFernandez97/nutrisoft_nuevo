<?php
// Test simple para verificar rutas después de cambio de dominio
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Test de Rutas - NutriSoft</h1>";
echo "<hr>";

// Cargar config
try {
    require_once "config.php";
    echo "✅ config.php cargado<br>";
    echo "ROOT_PATH: " . ROOT_PATH . "<br>";
} catch(Exception $e) {
    echo "❌ Error cargando config.php: " . $e->getMessage() . "<br>";
    exit;
}

// Test rutas de includes
$paths_to_test = [
    'controlador/plantillaControlador.php' => CONTROLADOR_PATH . 'plantillaControlador.php',
    'modelo/usuariosModelo.php' => MODELO_PATH . 'usuariosModelo.php',
    'vistas/plantilla.php' => VISTA_PATH . 'plantilla.php',
    'vistas/modulos/header.php' => VISTA_PATH . 'modulos/header.php',
    'vistas/modulos/footer.php' => VISTA_PATH . 'modulos/footer.php',
    'vistas/pages/Dashboard.php' => VISTA_PATH . 'pages/Dashboard.php',
    'controlador/mailControlador.php' => CONTROLADOR_PATH . 'mailControlador.php',
    'controlador/PHPMailer/src/PHPMailer.php' => CONTROLADOR_PATH . 'PHPMailer/src/PHPMailer.php',
];

echo "<h2>Verificando archivos:</h2>";
foreach($paths_to_test as $descripcion => $ruta_real) {
    if(file_exists($ruta_real)) {
        echo "✅ $descripcion<br>";
    } else {
        echo "❌ $descripcion - NO ENCONTRADO<br>";
        echo "  Buscó en: $ruta_real<br>";
    }
}

echo "<hr>";
echo "<h2>Rutas configuradas:</h2>";
echo "ROOT_PATH: " . ROOT_PATH . "<br>";
echo "CONTROLADOR_PATH: " . CONTROLADOR_PATH . "<br>";
echo "MODELO_PATH: " . MODELO_PATH . "<br>";
echo "VISTA_PATH: " . VISTA_PATH . "<br>";
echo "BASE_URI: " . BASE_URI . "<br>";
?>
