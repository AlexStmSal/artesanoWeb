# Artesano Studio

Artesano Studio es una aplicación web full stack desarrollada para presentar y gestionar el contenido de un estudio creativo y audiovisual.

La aplicación combina una web pública de tipo *one page* con un panel privado de administración, permitiendo gestionar contenido dinámico almacenado en una base de datos MySQL.

[Ver aplicación](https://artesanostudio.laravel.cloud/)

## Funcionalidades

### Web pública

- Navegación *one page* organizada en:
  - Inicio
  - Servicios
  - El estudio
  - Trabajos
  - Equipo
  - Contacto
- Visualización de trabajos audiovisuales mediante contenido embebido.
- Listado de equipamiento almacenado en base de datos.
- Filtros y paginación para la consulta de equipos.
- Carrusel interactivo de imágenes del estudio.
- Formulario de contacto con validación y almacenamiento de mensajes.

### Panel de administración

- Autenticación mediante Laravel Breeze.
- Gestión de equipos.
- Gestión de trabajos audiovisuales.
- Consulta y eliminación de mensajes recibidos mediante el formulario de contacto.
- Panel protegido mediante middleware de autenticación.

## Tecnologías

### Backend

- PHP
- Laravel
- Laravel Breeze

### Frontend

- Blade
- JavaScript
- Tailwind CSS

### Datos

- MySQL

### Herramientas y despliegue

- Vite
- Git / GitHub
- Laravel Cloud

## Arquitectura y estructura

La parte pública está desarrollada como una aplicación *one page*, utilizando navegación mediante secciones.

Laravel gestiona la lógica de la aplicación, las peticiones y la comunicación con la base de datos, mientras que Blade se utiliza para la generación de las vistas.

La base de datos contiene información relativa a:

- Usuarios
- Categorías
- Equipos
- Trabajos
- Mensajes de contacto

El panel privado permite gestionar los principales contenidos dinámicos de la aplicación sin necesidad de modificar directamente el código.

## Ejecución local

Para ejecutar el proyecto en local es necesario disponer de PHP, Composer, Node.js y una base de datos MySQL.

Clona el repositorio e instala las dependencias:

```bash
git clone https://github.com/AlexStmSal/artesanoWeb.git
cd artesanoWeb

composer install
npm install
```

Crea el archivo de configuración del entorno y genera la clave de la aplicación:

```bash
cp .env.example .env
php artisan key:generate
```

Configura en el archivo `.env` la conexión a la base de datos MySQL y crea previamente la base de datos correspondiente.

Después, ejecuta las migraciones y los seeders:

```bash
php artisan migrate --seed
```

Por último, inicia Vite y el servidor de desarrollo de Laravel:

```bash
npm run dev
php artisan serve
```

La aplicación estará disponible por defecto en:

```text
http://127.0.0.1:8000
```

## Seguridad

El repositorio no contiene credenciales, claves privadas ni variables sensibles.

La configuración específica de cada entorno debe realizarse mediante el archivo `.env`.

## Estado del proyecto

El proyecto se encuentra funcional y desplegado en Laravel Cloud.

Como posibles evoluciones futuras se contempla la ampliación del panel de administración y la incorporación de nuevas funcionalidades en la gestión dinámica del contenido.

## Contexto

Proyecto desarrollado como trabajo final del ciclo de Técnico Superior en Desarrollo de Aplicaciones Web (DAW), curso 2025/26.

## Autor

**Alejandro Santamaría Salcedo**

[GitHub](https://github.com/AlexStmSal)
