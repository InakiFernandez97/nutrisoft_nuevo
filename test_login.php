<?php
// Archivo de prueba de conexión y login
// Accede a: https://nutrisoft.nplanet.cl/test_login.php

require_once "config.php";
require_once "modelo/conexion.php";
require_once "modelo/usuariosModelo.php";

echo "<h1>Test de Login y BD - NutriSoft</h1>";

// Test 1: Verificar conexión
echo "<h2>1. Test de Conexión a Base de Datos:</h2>";
try {
    $con = ConexionMysql::ConectarMysql();
    echo "✅ Conexión exitosa a la base de datos<br>";
    echo "Tipo de conexión: " . get_class($con) . "<br><br>";
} catch(Exception $e) {
    echo "❌ Error de conexión: " . $e->getMessage() . "<br><br>";
    die();
}

// Test 2: Verificar tabla usuarios
echo "<h2>2. Test de Tabla Usuarios:</h2>";
try {
    $sql = "SELECT COUNT(*) as total FROM usuarios";
    $query = $con->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_OBJ);
    echo "✅ Tabla 'usuarios' existe<br>";
    echo "Total de usuarios: " . $result->total . "<br><br>";
} catch(Exception $e) {
    echo "❌ Error con tabla usuarios: " . $e->getMessage() . "<br><br>";
}

// Test 3: Listar usuarios (solo correos)
echo "<h2>3. Usuarios en el Sistema:</h2>";
try {
    $sql = "SELECT Id_Usuario, Correo_Usuario, Nombre_Usuario FROM usuarios LIMIT 5";
    $query = $con->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
    
    if(count($usuarios) > 0){
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>ID</th><th>Email</th><th>Nombre</th></tr>";
        foreach($usuarios as $user){
            echo "<tr>";
            echo "<td>" . $user->Id_Usuario . "</td>";
            echo "<td>" . $user->Correo_Usuario . "</td>";
            echo "<td>" . $user->Nombre_Usuario . "</td>";
            echo "</tr>";
        }
        echo "</table><br>";
    } else {
        echo "⚠️ No hay usuarios en la base de datos<br><br>";
    }
} catch(Exception $e) {
    echo "❌ Error listando usuarios: " . $e->getMessage() . "<br><br>";
}

// Test 4: Formulario de prueba de login
echo "<h2>4. Probar Login:</h2>";

if(isset($_POST['test_login'])){
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    echo "<strong>Intentando login con:</strong><br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . str_repeat('*', strlen($password)) . "<br><br>";
    
    $resultado = usuariosModelo::login($email, $password, 1);
    
    if($resultado != 0){
        echo "✅ <strong style='color:green;'>LOGIN EXITOSO</strong><br>";
        echo "<pre>";
        print_r($resultado);
        echo "</pre>";
        
        // Simular asignación de sesión
        foreach ($resultado as $user) {
            $_SESSION['UserID'] = $user->Id_Usuario;
            $_SESSION['UserNombre'] = $user->Nombre_Usuario;
            $_SESSION['login'] = 1;
        }
        echo "Sesión iniciada. <a href='index.php'>Ir al sistema</a><br>";
    } else {
        echo "❌ <strong style='color:red;'>LOGIN FALLIDO</strong><br>";
        echo "Usuario o contraseña incorrectos<br>";
    }
    echo "<br><hr><br>";
}

?>

<form method="POST">
    <label>Email:</label><br>
    <input type="email" name="email" required style="width:300px; padding:5px;"><br><br>
    
    <label>Password:</label><br>
    <input type="password" name="password" required style="width:300px; padding:5px;"><br><br>
    
    <button type="submit" name="test_login" style="padding:10px 20px; background:#007bff; color:white; border:none; cursor:pointer;">
        Probar Login
    </button>
</form>

<br><hr>
<p><strong>Nota:</strong> Este archivo es solo para pruebas. Elimínalo después de verificar que todo funciona.</p>
<p><a href="index.php">← Volver al sistema</a> | <a href="test_session.php">Ver test de sesiones</a></p>
