<?php
session_start();
require '../Estudiante 1 (Carlos Sequera)/conexion.php';

if (!isset($_SESSION['uuid'])) {
    header("Location: ../estudiante 4 (Luis Lombana)/index.html");
    exit;
}

$sql_metrics = "
    SELECT id_usuario, correo, fecha_registro 
    FROM sys_usuarios 
    WHERE id_usuario >= :base_id 
    ORDER BY fecha_registro DESC 
    LIMIT 10
";

$stmt = $conexion->prepare($sql_metrics);
$stmt->bindValue(':base_id', 1, PDO::PARAM_INT);
$stmt->execute();
$dataset = $stmt->fetchAll();

echo "<pre>";
print_r($dataset);
echo "</pre>";
?>
