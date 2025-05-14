# Portal de Reportes

## Descripción
La aplicación está desarrollada con Laravel Blade + Breeze y proporciona un panel con reportes de Power BI integrados.

## Requisitos previos
- PHP >= 8.1
- Composer
- Node.js y npm
- MySQL o SQLite

## Pasos de instalación y ejecución

### 1. Clonar el repositorio
```bash
git clone https://github.com/daniel-bor/diveco-portal.git portal
cd portal
```

### 2. Instalar dependencias
```bash
composer install
npm install
```

### 3. Configuración del entorno
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Compilar activos
```bash
npm run dev
```

### 5. Crear la base de datos y ejecutar migraciones


#### Opción 1: Configuración con SQLite (Por defecto)

1. Editar el archivo `.env`:
```
DB_CONNECTION=sqlite
```

2. Ejecutar migraciones:
```bash
php artisan migrate --seed
```

3. Confirmar creacion del archivo .sqlite en /database/database.sqlite

#### Opción 2: Configuración con MySQL

1. Crear una base de datos en MySQL.

2. Configurar el archivo `.env`:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_base_datos
DB_USERNAME=root
DB_PASSWORD=
```

3. Ejecutar migraciones:
```bash
php artisan migrate --seed
```

## Rutas principales de la aplicación

- **/** - Inicio
- **/dashboard** - Panel principal de la aplicación
- **/login** - Inicio de sesión
- **/register** - Registro de usuario
- **/profile** - Perfil de usuario
- **/reporte** - Visualización del reporte Power BI

## Estructura del proyecto

El sistema está estructurado como una aplicación Laravel estándar con las siguientes características:

- **Autenticación**: Implementada con Laravel Breeze
- **Reportes**: Integración con Power BI a través de un iframe
- **Perfil de usuario**: Gestión de información de usuario
- **Interfaz**: Frontend responsive con Tailwind CSS
