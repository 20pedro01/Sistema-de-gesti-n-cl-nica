# Sistema de Gestión Clínica Integral
**Centro de Psicología y Psiquiatría**

Este proyecto es una aplicación web (CRUD) desarrollada en PHP y MySQL para la gestión de un centro clínico. Permite administrar de manera sencilla la información de pacientes y especialistas.

## 📋 Características

*   **Gestión de pacientes**: Registro de nuevos pacientes, edición de datos personales y observaciones clínicas, y eliminación de registros.
*   **Gestión de especialistas**: Administración del equipo médico (Psicólogos y Psiquiatras).
*   **Interfaz amigable**: Diseño limpio y responsivo utilizando Bootstrap 3.
*   **Base de datos relacional**: Estructura optimizada para el almacenamiento de datos.

## 🚀 Instalación y Configuración

Sigue estos pasos para poner en marcha el proyecto en tu servidor local (como WAMP, XAMPP, etc.):

1.  **Clonar/Descargar**:
    Coloca la carpeta del proyecto `SiteCRUDBD` en el directorio de tu servidor web (por ejemplo, `c:\wamp64\www\` o `htdocs`).

2.  **Configuración de Base de Datos**:
    *   Asegúrate de que tus credenciales de MySQL sean correctas en el archivo `Db.php`.
    *   Por defecto está configurado para:
        *   Host: `localhost`
        *   Usuario: `root`
        *   Contraseña: `""` (vacía)
        *   Base de datos: `dbtest` (El script la creará/usará).

3.  **Instalación Automática de Tablas**:
    *   Abre tu navegador y ve a:
        `http://localhost/SiteCRUDBD/setup_center_db.php`
    *   Verás un mensaje confirmando que las tablas `pacientes` y `especialistas` se han creado correctamente.

4.  **¡Listo!**:
    *   Ya puedes ingresar al sistema desde:
        `http://localhost/SiteCRUDBD/index.php`

## 📁 Estructura del Proyecto

*   **index.php**: Página de inicio / Bienvenida.
*   **paginas/**: Contiene las vistas principales.
    *   `pacientes.php`: CRUD de pacientes.
    *   `especialistas.php`: CRUD de especialistas.
*   **crudPacientes.php** / **crudEspecialistas.php**: Lógica de backend para manejar la base de datos.
*   **Db.php**: Archivo de conexión a la base de datos.
*   **setup_center_db.php**: Script de instalación inicial.

## 🛠 Tecnologías Utilizadas

*   PHP 7+
*   MySQL / MariaDB
*   HTML5 / CSS3
*   Bootstrap 3.3.7
*   jQuery