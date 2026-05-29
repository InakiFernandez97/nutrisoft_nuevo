<?php
// Archivo de prueba de sesión para debugging
// Accede a: https://nutrisoft.nplanet.cl/test_session.php

session_start();

echo "<h1>Test de Sesión - NutriSoft</h1>";
echo "<h2>Información de PHP:</h2>";
echo "Versión PHP: " . phpversion() . "<br>";
echo "Session Status: " . session_status() . " (1=disabled, 2=active)<br>";
echo "Session ID: " . session_id() . "<br>";
echo "Session Name: " . session_name() . "<br><br>";

echo "<h2>Variables de Sesión:</h2>";
if(!empty($_SESSION)){
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
} else {
    echo "No hay variables de sesión activas<br>";
}

echo "<h2>Configuración de Sesión:</h2>";
echo "session.save_path: " . ini_get('session.save_path') . "<br>";
echo "session.cookie_httponly: " . ini_get('session.cookie_httponly') . "<br>";
echo "session.cookie_secure: " . ini_get('session.cookie_secure') . "<br>";
echo "session.use_only_cookies: " . ini_get('session.use_only_cookies') . "<br>";

echo "<h2>Prueba de Escritura de Sesión:</h2>";
if(!isset($_SESSION['test_counter'])){
    $_SESSION['test_counter'] = 1;
    echo "Primera visita - Contador iniciado en 1<br>";
} else {
    $_SESSION['test_counter']++;
    echo "Visita número: " . $_SESSION['test_counter'] . "<br>";
}

echo "<br><a href='test_session.php'>Recargar para probar persistencia</a>";
echo " | <a href='test_session.php?reset=1'>Reiniciar contador</a>";

if(isset($_GET['reset'])){
    session_destroy();
    echo "<br><br><strong>Sesión destruida. <a href='test_session.php'>Click aquí para reiniciar</a></strong>";
}
?>
