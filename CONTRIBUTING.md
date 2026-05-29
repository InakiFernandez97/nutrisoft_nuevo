# Contributing to NutriSoft

Gracias por contribuir. Estas son las pautas mínimas para colaborar en el proyecto interno.

1. Fork / Clona el repositorio privado de la empresa.
2. Crea una rama con nombre descriptivo: `feature/descripcion` o `fix/descripcion`.
3. Mantén commits pequeños y con mensajes claros.
4. Antes de abrir un Pull Request:
   - Ejecuta linters y pruebas locales (si existen).
   - Asegúrate de no subir credenciales: `config.php` y `.env` están en `.gitignore`.
5. Abre un Pull Request describiendo los cambios y el impacto en producción.

Revisión y aprobación:
- Asignar al menos una persona del equipo para revisar cambios críticos.
- Para cambios en infraestructura o deploys en producción, notificar al administrador del servidor.

Código y formato:
- Mantener estilo consistente con PHP y evitar variables globales innecesarias.
- Extraer credenciales a `config.php` o variables de entorno.

Gracias por ayudar a mantener el proyecto estable.