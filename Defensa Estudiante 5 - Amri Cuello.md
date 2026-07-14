# Defensa Oral - Estudiante 5: Amri Cuello (Analista de Optimización)

**Duración estimada:** 1:45 min

---

Buenos días profesor y compañeros.

Mi nombre es Amri Cuello y soy el Estudiante 5, Analista de Optimización. Mi responsabilidad principal fue desarrollar el Dashboard y coordinar la integración final del proyecto.

El Dashboard está en el archivo `dashboard.php`. Este módulo muestra los usuarios registrados en el sistema. Para evitar problemas de memoria, usé una consulta SELECT con las cláusulas WHERE, ORDER BY y LIMIT. WHERE filtra los datos a partir de un ID específico, ORDER BY los ordena por fecha de registro de forma descendente, y LIMIT 10 restringe la cantidad de resultados. Así evitamos que el servidor se sature con consultas pesadas.

Para la conexión usé PDO con sentencias preparadas, igual que mis compañeros, manteniendo la seguridad en todo el proyecto.

También me encargué de coordinar la unión final del código. Cuando cada compañero subió sus cambios, revisé que no hubiera conflictos. Había diferencias en las rutas de los archivos y en los nombres de las carpetas, así que las corregí para que todo funcionara en conjunto. Finalmente verifiqué que el login, el registro y el dashboard estuvieran comunicados correctamente.

En Git me aseguré de mantener el historial limpio, con commits descriptivos y de que todos los integrantes tuvieran acceso al repositorio para trabajar en sus módulos.

Eso es todo. Gracias por su atención.
