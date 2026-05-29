<?php
// Copy this file to config.php and adjust values for your environment.

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__ . '/');
}

$httpHost = $_SERVER['HTTP_HOST'] ?? '';
$isLocalEnvironment = (
    PHP_SAPI === 'cli' ||
    preg_match('/(^localhost$|^127\.0\.0\.1$|\.test(?::\d+)?$)/i', $httpHost)
);

if (!defined('APP_ENV')) {
    define('APP_ENV', $isLocalEnvironment ? 'local' : 'production');
}

if ($isLocalEnvironment) {
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
}

if (!defined('CONTROLADOR_PATH')) {
    define('CONTROLADOR_PATH', ROOT_PATH . 'controlador/');
}

if (!defined('MODELO_PATH')) {
    define('MODELO_PATH', ROOT_PATH . 'modelo/');
}

if (!defined('VISTA_PATH')) {
    define('VISTA_PATH', ROOT_PATH . 'vistas/');
}

if (!defined('BASE_URI')) {
    $defaultBaseUri = $isLocalEnvironment
        ? 'http://nutrisoft.test/'
        : 'https://nutrisoft.newplanet.cl/';

    $baseUri = getenv('APP_BASE_URI');
    define('BASE_URI', rtrim($baseUri !== false && $baseUri !== '' ? $baseUri : $defaultBaseUri, '/') . '/');
}

if (!defined('DB_HOST')) {
    define('DB_HOST', $isLocalEnvironment ? '127.0.0.1' : 'localhost');
}

if (!defined('DB_PORT')) {
    define('DB_PORT', '3306');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', $isLocalEnvironment ? 'nutrisoft' : 'your_database');
}

if (!defined('DB_USER')) {
    define('DB_USER', $isLocalEnvironment ? 'root' : 'your_user');
}

if (!defined('DB_PASS')) {
    define('DB_PASS', $isLocalEnvironment ? '' : 'your_password');
}

// SMTP / Mail settings (copy these into config.php with real credentials)
if (!defined('SMTP_HOST')) {
    define('SMTP_HOST', $isLocalEnvironment ? 'smtp.example.test' : 'smtp.example.com');
}
if (!defined('SMTP_PORT')) {
    define('SMTP_PORT', $isLocalEnvironment ? 1025 : 465);
}
if (!defined('SMTP_USER')) {
    define('SMTP_USER', $isLocalEnvironment ? '' : 'your_smtp_user');
}
if (!defined('SMTP_PASS')) {
    define('SMTP_PASS', $isLocalEnvironment ? '' : 'your_smtp_password');
}
if (!defined('SMTP_FROM')) {
    define('SMTP_FROM', $isLocalEnvironment ? 'no-reply@nutrisoft.test' : 'no-reply@yourdomain.com');
}
if (!defined('SMTP_FROM_NAME')) {
    define('SMTP_FROM_NAME', $isLocalEnvironment ? 'NutriSoft Dev' : 'NutriSoft');
}

date_default_timezone_set('America/Santiago');

if (function_exists('apache_setenv')) {
    apache_setenv('no-gzip', '1');
}

if (ob_get_level() == 0) {
    ob_start();
}