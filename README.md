# Evaluación 4 Corte - Lenguaje de Programación 1 (Grupo 1)

## Integrantes y Roles

| Estudiante | GitHub | Rol | Módulo |
|---|---|---|---|
| Carlos Sequera | [carloseduardosequeracastillo](https://github.com/carloseduardosequeracastillo) | DBA / Git Master | Schema DDL, conexión PDO |
| Angela Colmenares | [Angela568](https://github.com/Angela568) | Arquitecta de Persistencia | Registro de usuarios (DML) |
| Luis Enguaima | [LuisEng34](https://github.com/LuisEng34) | Oficial de Seguridad | Login, auditoría Zero Trust |
| Luis Lombana | [luislom1](https://github.com/luislom1) | Ingeniero de Interfaz / UX | Frontend HTML5/CSS3 |
| Amri Cuello | [AmriJC](https://github.com/AmriJC) | Analista de Optimización | Dashboard, merges finales |

## Estructura del Proyecto

```
/
├── Estudiante 1 (Carlos Sequera)/
│   ├── conexion.php          # Conexión PDO a MySQL
│   └── schema.sql            # DDL: CREATE DATABASE + TABLE (InnoDB, utf8mb4)
├── estudiante 2 (Angela Colmenares)/
│   └── registro.php          # Registro con prepared statements + BCRYPT
├── estudiante 3 (Luis Enguaima)/
│   ├── login.php             # Login con validación back-end y sesiones
│   └── auditoria_seguridad.md# Informe de auditoría de seguridad
├── estudiante 4 (Luis Lombana)/
│   └── index.html            # Frontend con Box Model y validación CSS
├── estudiante 5 (Amri Cuello)/
│   └── dashboard.php         # Dashboard con consultas optimizadas (WHERE, ORDER BY, LIMIT)
└── EVALUACION DE LENGUAJE DE PROGRAMACIÓN 1 ,GRUPO 1.pdf
```

## Historial de Commits

| Hash (SHA-1) | Fecha | Autor | Descripción |
|---|---|---|---|
| `36e6d515941b66267df7b32ebff0d942e446731e` | 2026-07-13 20:44:22 -04:00 | AmriJC | Evaluacion 4 corte - Modulos de autenticacion con PDO y seguridad |
| *(próximos commits de cada integrante)* | | | |

## Informe de Auditoría de Seguridad

**Estado:** APROBADO
**Firma:** Oficial de Seguridad (Luis Enguaima)

1. **Protocolo Criptográfico:** Se constata mediante revisión de código estático en `registro.php` que la directiva `PASSWORD_BCRYPT` ha sido aplicada explícitamente en la función de derivación de claves, descartando el uso de `MD5` o `SHA1`.
2. **Control de Excepciones:** Los bloques `catch (PDOException $e)` en la capa de acceso a datos han sido evaluados. No existe volcado de pila (stack trace) hacia el DOM de salida. Los descriptores de error detallados están confinados al flujo de `error_log()`.
3. **Validación de Transporte:** Se instrumentaron filtros de desinfección (`FILTER_SANITIZE_EMAIL`) y validación (`FILTER_VALIDATE_EMAIL`) como segunda barrera frente a bypass del Frontend.

## Requisitos del Sistema

- PHP 7.4+
- MySQL 5.7+ / MariaDB 10.2+
- Extensiones: `pdo_mysql`, `mbstring`
