# NutriSoft - Software Nutricional

Resumen breve
---------------
NutriSoft es una aplicación web para la gestión nutricional de pacientes: control de pacientes, menús, productos, pizarras y envíos por correo.

Índice
------
- [Descripción](#descripci%C3%B3n)
- [Requisitos](#requisitos)
- [Instalación local (Laragon)](#instalaci%C3%B3n-local-laragon)
- [Configuración](#configuraci%C3%B3n)
- [Base de datos](#base-de-datos)
- [Despliegue automático](#despliegue-autom%C3%A1tico)
- [Estructura del proyecto](#estructura-del-proyecto)
- [Seguridad y archivos sensibles](#seguridad-y-archivos-sensibles)
- [Resolución de problemas comunes](#resoluci%C3%B3n-de-problemas-comunes)
- [Contacto / Mantención](#contacto--mantenci%C3%B3n)

Descripción
-----------
Proyecto PHP (procedural/POO mixta) con front basado en AdminLTE y plugins comunes (DataTables, ChartJS, Summernote, etc.). Diseñado para correr en entornos LAMP/Windows+Laragon.

Requisitos
----------
- PHP 8.x con extensiones: `pdo`, `pdo_mysql`, `mbstring`, `openssl`, `json`.
- MySQL / MariaDB
- Servidor web Apache (o Nginx con ajustes)
- Composer (opcional para dependencias de PHPMailer si fuera necesario)
- Laragon (recomendado para desarrollo en Windows)

Instalación local (Laragon)
---------------------------
1. Clonar el repositorio en `C:/laragon/www/`.
2. Crear `config.php` a partir de `config.example.php` o copiar `.env.example` a `.env` si usas variables de entorno.
3. Importar la base de datos usando `nutricion.sql` desde la raíz del proyecto.
4. Añadir virtual host (Laragon auto virtual hosts) y acceder desde `http://nutrisoft.test/`.

Comandos rápidos (PowerShell):
```powershell
cd C:\laragon\www\nutrisoft
cp config.example.php config.php
# editar config.php según tu entorno
# importar DB desde phpMyAdmin o CLI
```

Configuración
-------------
- No subas `config.php` ni `.env` al repositorio. Usa `config.example.php` y `.env.example` para compartir la plantilla.
- Ajustes importantes en `config.php`:
  - `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`
  - `BASE_URI` (por defecto `http://nutrisoft.test/` en local)

Base de datos
-------------
El volcado SQL está en `nutricion.sql`. Importa con phpMyAdmin o CLI:
```bash
mysql -u root -p nutrisoft < nutricion.sql
```

Despliegue automático
---------------------
Este proyecto se integra con el panel de hosting mediante webhook. En GitHub (Settings → Webhooks) añade la URL de payload que te entregó el panel, por ejemplo:


Estructura del proyecto (resumen)
--------------------------------
- `index.php` - punto de entrada
- `config.php` / `config.example.php` - configuración
- `modelo/` - modelos y acceso a datos
- `controlador/` - controladores y lógica de negocio
- `vistas/` - plantillas, páginas y assets (plugins/ dist/)
- `nutricion.sql` - volcado de la base de datos

Seguridad y archivos sensibles
------------------------------
- No incluir credenciales en el repo. Archivos ignorados por defecto (ver `.gitignore`):
  - `config.php`, `.env`, logs (`error_log`, `*.log`), carpetas de IDE (`.vs/`, `.vscode/`).
- Mueve credenciales de servicios (SMTP, API keys) a `config.php` del servidor o variables de entorno.
- Revisa `controlador/mailControlador.php` y reemplaza credenciales embebidas por referencias a `DB_*` o variables de entorno en producción.

Resolución de problemas comunes
-------------------------------
- Pantalla en blanco: comprobar si otro servidor ocupa el puerto 80 (IIS). Ejecuta `curl -I http://nutrisoft.test/` y revisa `Server:` header.
- Errores de conexión BD: verificar `DB_HOST`, `DB_USER`, `DB_PASS`, y que MySQL esté corriendo.
- Objetos PHP/Warnings: activa `display_errors` en desarrollo o revisar `error_log.txt`.

Contacto / Mantención
---------------------
Para soporte interno, contacta al equipo de TI o al responsable del proyecto.

Licencia
--------
Este repositorio incluye un `LICENSE` en la raíz. Lee ese archivo para condiciones de uso y distribución.

Notas finales
------------
Mantén `config.php` fuera del control de versiones. Antes de hacer público el repositorio, asegúrate de que los archivos con credenciales (por ejemplo `controlador/mailControlador.php`) estén actualizados para leer las credenciales desde variables seguras.

### Checklist rápido para preparar el hosting

- **Crear config.php:** Copiar desde `config.example.php` y rellenar `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`, `BASE_URI`. NO subir `config.php` al repositorio público.
- **(Opcional) .env:** Si prefieres variables de entorno, copiar `.env.example` a `.env` y rellenar los valores en el servidor.
- **Carpeta uploads:** Crear `vistas/pages/uploads/` en el hosting y dar permiso de escritura al usuario del servidor web.
- **Importar base de datos:** Importar `nutricion.sql` en la base de datos del hosting (phpMyAdmin o CLI).
- **Permisos recomendados:** Archivos `644`, directorios `755` o `775` para carpetas que necesiten escritura (ej. `uploads`).
- **Mover credenciales SMTP:** No dejar usuario/clave SMTP en `controlador/mailControlador.php`; referenciar constantes de `config.php` o variables de entorno.
- **No commitear:** No subir `.env`, `config.php`, ni logs (`error_log`, `*.log`).

### Pasos concretos (panel de hosting / gestor de archivos)

1. Subir el contenido del repo al directorio público del hosting.
2. Crear `config.php` a partir de `config.example.php` y editar con las credenciales del hosting.
3. Crear la carpeta `vistas/pages/uploads/` si no existe. 
4. Ajustar permisos de `uploads` a escritura por el servidor web. 
5. Importar `nutricion.sql` mediante phpMyAdmin o la herramienta de bases de datos del panel.

### Pasos (si tienes SSH)

```bash
# copiar config.php (ejemplo) al servidor
scp config.php usuario@tu-host:/ruta/a/tu/site/config.php

# crear uploads y ajustar permisos
ssh usuario@tu-host "mkdir -p /ruta/a/tu/site/vistas/pages/uploads && chown -R www-data:www-data /ruta/a/tu/site/vistas/pages/uploads && chmod 775 /ruta/a/tu/site/vistas/pages/uploads"

# importar SQL via CLI
mysql -u dbuser -p dbname < nutricion.sql
```

### Nota final
- Asegura que `controlador/mailControlador.php` no contiene credenciales en texto plano.
