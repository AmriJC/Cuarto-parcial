# Informe de Auditoría de Seguridad

**Estado:** APROBADO  
**Firma:** Oficial de Seguridad (Estudiante 3)

1. **Protocolo Criptográfico:** Se constata mediante revisión de código estático en `registro.php` que la directiva `PASSWORD_BCRYPT` ha sido aplicada explícitamente en la función de derivación de claves, descartando el uso de `MD5` o `SHA1`.
2. **Control de Excepciones:** Los bloques `catch (PDOException $e)` en la capa de acceso a datos han sido evaluados. No existe volcado de pila (stack trace) hacia el DOM de salida. Los descriptores de error detallados están confinados al flujo de `error_log()`.
3. **Validación de Transporte:** Se instrumentaron filtros de desinfección (`FILTER_SANITIZE_EMAIL`) y validación (`FILTER_VALIDATE_EMAIL`) como segunda barrera frente a bypass del Frontend.
