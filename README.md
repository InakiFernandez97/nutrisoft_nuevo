# NutriSoft - Software Nutricional

Resumen: aplicación web para gestión nutricional, pacientes, menús y ventas desarrollada en PHP (estructura MVC ligera) y preparada para correr en Laragon/Apache.

Índice
1. [Descripción](#descripci%C3%B3n)
2. [Requisitos](#requisitos)
3. [Instalación local (Laragon)](#instalaci%C3%B3n-local-laragon)
4. [Configuración](#configuraci%C3%B3n)
5. [Despliegue / Integración continua](#despliegue--integraci%C3%B3n-continua)
6. [Estructura principal de carpetas](#estructura-principal-de-carpetas)
7. [Seguridad y buenas prácticas](#seguridad-y-buenas-pr%C3%A1cticas)
8. [Comandos útiles](#comandos-%C3%BAtiles)
9. [Contacto / Soporte interno](#contacto--soporte-interno)

## Descripción

NutriSoft es un sistema para la gestión de pacientes, menús, ingredientes, historial y ventas. Está montado con un patrón MVC simple: controladores en `controlador/`, modelos en `modelo/` y vistas en `vistas/`.

## Requisitos

- PHP 8.0+ (se probó con PHP 8.3 en Laragon)
- Extensiones PHP: `pdo`, `pdo_mysql`, `mbstring`, `openssl`, `json`.
- MySQL/MariaDB
- Servidor web: Apache (Laragon), o Nginx con configuración equivalente

## Instalación local (Laragon)

1. Copiar el proyecto en `C:/laragon/www/nutrisoft` (ya está en esa ruta para desarrollo).
2. Asegúrate de que Laragon tenga activado Apache y que el host `nutrisoft.test` resuelva a `127.0.0.1` (Laragon añade entradas en `hosts` con "laragon magic").
3. Crear el archivo de configuración local: copia `config.example.php` a `config.php` y ajusta valores.
4. (Opcional) Copiar `.env.example` a `.env` y completar credenciales si tu entorno usa `.env`.

Ejemplo para crear `config.php`:

```bash
cp config.example.php config.php
# editar config.php según entorno local
```

## Configuración

- No subir `config.php` ni `.env` al repositorio. Hay un `config.example.php` y `.env.example` incluidos.
- Datos sensibles (DB credentials, SMTP) deben definirse en `config.php` local o variables de entorno en el servidor.
- Archivos que están en `.gitignore`: `.env`, `config.php`, `error_log*`, `.vs/`, `.vscode/`, etc.

En `controlador/mailControlador.php` las credenciales SMTP se han movido a `config.php`/variables de entorno. Añade en `config.php` o en las variables del servidor las claves:

```
SMTP_HOST
SMTP_PORT
SMTP_USER
SMTP_PASS
SMTP_FROM
SMTP_FROM_NAME
```

## Despliegue / Integración continua

- Se integra con el panel del hosting mediante un webhook. En GitHub poner en `Settings -> Webhooks` la URL del panel de despliegue:

```
https://ferozo.host/deploy/git/4e116989183163d2b802972434298eed
```

Recomendaciones para el webhook en GitHub:
- Content type: `application/x-www-form-urlencoded`
- Events: `Just the push event`
- SSL verification: enabled

En el servidor de producción crear un `config.php` (no en el repo) con las credenciales reales y ajustar `BASE_URI` a la URL pública.

## Estructura principal de carpetas

- `index.php` - entrada principal
- `config.php` / `config.example.php` - configuración del proyecto
- `controlador/` - controladores
- `modelo/` - modelos (base de datos)
- `vistas/` - vistas y plantillas
- `ajax/` - endpoints AJAX
- `Nutrisoft/` - recursos adicionales y tests

Archivos adicionales de interés:
- `.htaccess` - reglas de reescritura y protección
- `.env.example` - ejemplo de variables de entorno
- `.gitignore` - reglas de exclusión (no subir archivos sensibles ni temporales)

## Seguridad y buenas prácticas

- Nunca publicar credenciales: usa `config.example.php` y variables de entorno. Mantén `config.php` fuera del repo.
- Reemplazar credenciales hardcodeadas (ej. en `mailControlador.php`) por `DB_*` o variables de entorno.
- Revisar los logs antes de subir al repo y agregarlos a `.gitignore`.
- Para repositorios públicos, usar `LICENSE` de la empresa o dejarlo privado.

## Comandos útiles

Inicializar repo y primer push (ejecutar solo una vez desde la raíz del proyecto):

```bash
git init
git add .
git commit -m "Initial commit"
git remote add origin https://github.com/<usuario>/<repo>.git
git branch -M main
git push -u origin main
```

Crear `config.php` desde el ejemplo:

```bash
cp config.example.php config.php
# luego editar config.php con credenciales locales
```

Probar PHP y rutas internas (desde PowerShell usando el PHP de Laragon):

```powershell
& "C:\laragon\bin\php\php-8.3.30-Win32-vs16-x64\php.exe" -l config.example.php
```

## Contacto / Soporte interno

- Responsable: Equipo de Desarrollo / Persona a cargo en la empresa.
- Antes de publicar cambios que afecten a credenciales o envío de correos, notificar al administrador del servidor.

---

Si quieres, puedo:

- Añadir una sección `How to contribute` para colaboradores internos.
- Generar un `CONTRIBUTING.md` y `CODE_OF_CONDUCT` básicos.
- Automatizar la validación de `config.php` y variables obligatorias en `deploy`.

Dime qué prefieres y lo preparo.
