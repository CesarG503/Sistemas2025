## Ejecutar el proyecto

```bash
docker-compose up -d --build
```

El proyecto se encuentra en: http://localhost:8081/MVC/public/

## Crear la base de datos

Acceder a phpMyAdmin: http://localhost:8082/

Ejecutar el siguiente SQL:

```sql
CREATE DATABASE IF NOT EXISTS visitas
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE visitas;

CREATE TABLE IF NOT EXISTS registro_visitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_fecha (fecha_registro DESC)
) ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_unicode_ci;
```

## Indicaciones

Las indicaciones completas se encuentran en: http://localhost:8081/MVC/public/visitas