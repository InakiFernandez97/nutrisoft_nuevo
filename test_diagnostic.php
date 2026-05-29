<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "Test 1: Loading config.php...\n";
try {
    require_once "config.php";
    echo "✓ config.php loaded successfully\n";
} catch(Throwable $e) {
    echo "✗ Error loading config.php: " . $e->getMessage() . "\n";
    exit;
}

echo "\nTest 2: Constants defined:\n";
echo "ROOT_PATH: " . (defined('ROOT_PATH') ? ROOT_PATH : 'NOT DEFINED') . "\n";
echo "CONTROLADOR_PATH: " . (defined('CONTROLADOR_PATH') ? CONTROLADOR_PATH : 'NOT DEFINED') . "\n";
echo "MODELO_PATH: " . (defined('MODELO_PATH') ? MODELO_PATH : 'NOT DEFINED') . "\n";
echo "VISTA_PATH: " . (defined('VISTA_PATH') ? VISTA_PATH : 'NOT DEFINED') . "\n";

echo "\nTest 3: Session status:\n";
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
echo "Session status: " . (session_status() === PHP_SESSION_ACTIVE ? 'ACTIVE' : 'NOT ACTIVE') . "\n";

echo "\nTest 4: Session variables:\n";
var_dump($_SESSION);

echo "\nTest 5: Loading PlantillaControlador...\n";
try {
    require_once "controlador/plantillaControlador.php";
    echo "✓ plantillaControlador.php loaded successfully\n";
} catch(Throwable $e) {
    echo "✗ Error loading plantillaControlador.php: " . $e->getMessage() . "\n";
    exit;
}

echo "\nTest 6: Calling PlantillaControlador::startPlantilla(0) [login view]...\n";
try {
    PlantillaControlador::startPlantilla(0);
    echo "✓ PlantillaControlador::startPlantilla(0) executed\n";
} catch(Throwable $e) {
    echo "✗ Error in PlantillaControlador::startPlantilla(0): " . $e->getMessage() . "\n";
    exit;
}

echo "\n✓ All tests passed!\n";
?>
