<?php
$db_host = '127.0.0.1';
$db_name = 'sys_auth_db';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$charset";
$opciones = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conexion = new PDO($dsn, $db_user, $db_pass, $opciones);
} catch (PDOException $e) {
    error_log("Error de capa 0: " . $e->getMessage());
    exit('Fallo crítico en el enlace de persistencia.');
}
?>
