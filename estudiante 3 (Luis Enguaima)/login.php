<?php
session_start();
require '../Estudiante 1 (Carlos Sequera)/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo_in = filter_var($_POST['correo'] ?? '', FILTER_SANITIZE_EMAIL);
    $clave_in = $_POST['clave'] ?? '';

    if (!filter_var($correo_in, FILTER_VALIDATE_EMAIL) || empty($clave_in)) {
        die("Excepción de validación: Estructura de payload inválida.");
    }

    $sql = "SELECT id_usuario, hash_acceso FROM sys_usuarios WHERE correo = :correo LIMIT 1";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([':correo' => $correo_in]);
    $usuario_data = $stmt->fetch();

    if ($usuario_data && password_verify($clave_in, $usuario_data['hash_acceso'])) {
        session_regenerate_id(true);
        $_SESSION['uuid'] = $usuario_data['id_usuario'];
        $_SESSION['status'] = 'auth_valid';
        header("Location: ../estudiante 5 (Amri Cuello)/dashboard.php");
        exit;
    } else {
        sleep(1);
        echo "Credenciales rechazadas.";
    }
}
?>
