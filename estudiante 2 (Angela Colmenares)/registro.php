<?php
require '../Estudiante 1 (Carlos Sequera)/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo_raw = $_POST['correo'] ?? '';
    $clave_raw = $_POST['clave'] ?? '';

    $correo = filter_var($correo_raw, FILTER_SANITIZE_EMAIL);
    
    if (filter_var($correo, FILTER_VALIDATE_EMAIL) && !empty($clave_raw)) {
        $hash_criptografico = password_hash($clave_raw, PASSWORD_BCRYPT, ['cost' => 12]);

        $sql = "INSERT INTO sys_usuarios (correo, hash_acceso) VALUES (:correo, :hash_acceso)";
        
        try {
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
            $stmt->bindParam(':hash_acceso', $hash_criptografico, PDO::PARAM_STR);
            $stmt->execute();
            echo "Transacción DML ejecutada exitosamente.";
        } catch (PDOException $e) {
            error_log("Colisión en índice único o fallo DML.");
            echo "Error de integridad referencial o duplicidad.";
        }
    }
}
?>
