# Artesano Studio

Artesano Studio es una aplicación web desarrollada como proyecto final de 2º DAW. El proyecto consiste en una web tipo *one page* para presentar la identidad, servicios, trabajos, equipo y contacto de un estudio creativo/audiovisual.

La aplicación combina una parte pública, visible para cualquier usuario, con un panel privado de administración desde el que se pueden gestionar algunos contenidos dinámicos.

## Funcionalidades principales

- Web pública organizada en secciones:
  - Home
  - Servicios
  - El estudio
  - Trabajos
  - Equipo
  - Contacto

- Panel de administración protegido mediante autenticación.
- Gestión de equipos desde base de datos.
- Gestión de trabajos audiovisuales mediante enlaces embebidos.
- Formulario de contacto con validación.
- Almacenamiento de mensajes de contacto.
- Filtros y paginación en la sección Equipo.
- Carrusel de imágenes en la sección El estudio.
- Despliegue preparado para Laravel Cloud.

## Tecnologías utilizadas

- Laravel
- PHP
- Blade
- MySQL
- Tailwind CSS
- JavaScript
- Vite
- Laravel Breeze
- Git / GitHub

## Estructura general

La parte pública de la web está planteada como una página única con navegación por secciones.  
El panel privado permite gestionar los contenidos principales sin modificar directamente el código.

La base de datos incluye tablas para usuarios, categorías, equipos, trabajos y mensajes de contacto.

## Consideraciones

Este repositorio forma parte de un proyecto académico.  
No se incluyen credenciales, claves privadas ni variables sensibles en el código fuente.

Para ejecutar el proyecto en un entorno local es necesario configurar el archivo `.env`, instalar las dependencias y ejecutar las migraciones correspondientes.

## Estado del proyecto

El proyecto cuenta con una base funcional completa y desplegable.  
Quedan abiertas posibles mejoras visuales y funcionales, como ajustes responsive, modo oscuro, mejora de la paginación mediante AJAX o gestión de imágenes desde el panel de administración.

## Autor

Alejandro Santamaría Salcedo  
Proyecto final — 2º DAW  
2025/26
