# Bienes Raíces

## Descripcion
Bienes Raíces es un proyecto desarrollado en PHP y MySQL, diseñado para gestionar propiedades inmobiliarias. La arquitectura del proyecto sigue el patrón MVC (Modelo-Vista-Controlador) y emplea ActiveRecord para la interacción con la base de datos, facilitando una implementación eficiente y clara.

El proyecto utiliza SASS y CSS para el diseño y la estilización, mientras que Gulp se encarga de la automatización de tareas como la compilación de SASS y la minificación de archivos. El manejo de dependencias y paquetes se gestiona mediante Composer, asegurando un entorno de desarrollo modular y escalable.

La Programación Orientada a Objetos (POO) es el enfoque clave en la estructura del código, promoviendo la reutilización y mantenibilidad.

## Funcionalidades

- `Gestión de Propiedades:` Permite la creación, edición y eliminación de propiedades inmobiliarias en la plataforma. Cada propiedad incluye detalles como descripción, precio, ubicación y características relevantes, brindando a los usuarios una visión clara de cada inmueble disponible.

- `Autenticación de Usuarios:` Sistema de autenticación que garantiza la seguridad de la aplicación. Los usuarios pueden registrarse y acceder a sus cuentas mediante una combinación de email y contraseña, con almacenamiento seguro de credenciales. 

- `Gestión de Usuarios:` Administración de usuarios del sistema, permitiendo la creación, edición y eliminación de cuentas de usuario.

- `Panel de Administración:` Interfaz administrativa que facilita la gestión centralizada de propiedades y usuarios. Incluye una navegación intuitiva para acceder a diferentes secciones.

- `Visualización de Propiedades:` Cada propiedad cuenta con una página de detalles donde se muestra toda la información relevante, así como una galería de imágenes para una mejor presentación visual.

- `Automatización de Tareas:` Utilización de Gulp para automatizar la compilación de estilos SASS y optimización de recursos, mejorando el rendimiento de la aplicación y facilitando el flujo de trabajo en el desarrollo. 

- `Gestión de Vendedores:` Administración de perfiles de vendedores, permitiendo a los administradores agregar, editar y eliminar la información de los vendedores que figuran en la plataforma. Cada vendedor tiene un perfil asignado para facilitar la conexión con los posibles compradores.

- `Formulario de Contacto con Vendedores:` Los usuarios pueden contactar directamente a un vendedor a través de un formulario de contacto. Al enviar el formulario, se genera un correo electrónico que notifica al vendedor sobre el interés del cliente, facilitando el proceso de comunicación entre ambas partes.

## Instalación
Para iniciar con el proyecto bienesRaíces, existen dos métodos principales de instalación que puedes seguir según tu preferencia.
### Opción 1: Instalación con XAMPP
1. Descargar e instalar XAMPP:
  - Ve a la página oficial de XAMPP y descarga la versión compatible con tu sistema operativo.  
  - Instala y ejecuta XAMPP, asegurándote de activar Apache y MySQL desde el panel de control.
2. Configurar el Proyecto:
  - Clona el repositorio de bienesRaíces en el directorio htdocs de XAMPP. Por defecto, esto estará en C:\xampp\htdocs\bienesRaíces.
  - Abre el archivo de configuración para la conexión a la base de datos en tu proyecto (generalmente config.php o en una clase de configuración) y asegúrate de que las credenciales coincidan:
    - Host: localhost
    - Usuario: root
    - Contraseña: (dejar en blanco por defecto en XAMPP)

3. Configurar la Base de Datos:
    - Inicia sesión en phpMyAdmin (generalmente disponible en http://localhost/phpmyadmin).
    - Crea una base de datos para el proyecto llamada bienesRaíces.
    - Importa el archivo SQL incluido en el proyecto para generar las tablas y datos iniciales.

4. Iniciar el Servidor:
    - Accede al proyecto en el navegador desde http://localhost/bienesRaíces.

### Opción 2: Instalación Manual con Apache y MySQL Workbench
 
  1. Instalar Apache y MySQL:
    - Descarga e instala Apache desde la web oficial de Apache.
    - Descarga e instala MySQL Server desde la web oficial de MySQL.
    - Configura Apache para que apunte al directorio de tu proyecto. Edita el archivo httpd.conf de Apache y cambia la ruta del DocumentRoot al directorio donde se clonará el repositorio bienesRaíces.
 
 2. Instalar y Configurar MySQL Workbench:
    - Descarga e instala MySQL Workbench desde la web oficial de MySQL Workbench.
    - Inicia sesión en MySQL Workbench y crea una nueva conexión usando las credenciales configuradas en tu instalación de MySQL Server.
    - Crea una base de datos llamada bienesRaíces.
    - Importa el archivo SQL incluido en el proyecto para generar las tablas y datos iniciales.
 
 3. Configurar el Proyecto:
    - Clona el repositorio bienesRaíces en tu carpeta de documentos o en un directorio accesible para Apache.
    - Asegúrate de que las credenciales de conexión en el archivo de configuración del proyecto estén correctas para tu base de datos:
      - Host: localhost
      - Usuario: (el usuario que configuraste)
      - Contraseña: (la contraseña configurada en MySQL)
     
4. Iniciar el Servidor Apache:
   - Inicia Apache, y abre el proyecto desde http://localhost/bienesRaíces en el navegador. 

## Licencia

Bienes Raíces es [MIT licensed](./LICENSE).

## Contacto

**Nombre:** Manuel Tamayo Montero.

**Correo:** manueltamayo9765@gmail.com




