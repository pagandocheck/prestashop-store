# Prestashop-store v1.0.0

# Guía de Instalación Tienda Prestashop

## Características
La tienda de ejemplo con Prestashop contiene una plantilla con algunos productos añadidos en donde se puede visualizar de qué manera se puede realizar la configuración de una tienda online. Su contenido abarca desde la instalación de un paquete de herramientas y servicios para desarrolladores cómo lo es MAMP, pasando por una serie de configuraciones necesarias para la correcta ejecución de la tienda, hasta el despliegue de la misma, así como una base de datos precargada con la información de los productos y la plantilla de estilos de una tienda Pagando.

### Requisitos para una instalación local.
- Tener **PHP 7.4** instalado, como mínimo, en caso de no cumplir con este requerimiento, nosotros sugerimos su actualización a esta versión a través de brew; un instalador de paquetes para macOS que puedes encontrar [aquí](https://brew.sh/index_es).
- **MAMP**.- Un servidor para alojar la página web, puedes encontrarlo [aquí](https://www.mamp.info/en/mac/), pero también puede utilizar otro servidor de su preferencia.

## Instalación

### 1. Configurar MAMP

Para la correcta configuración debe ingresar en el menú Preferencias y luego cambiar a la pestaña de puertos, e ingresar estos valores, o haz clic en el botón **8888 & 3306**

<img width="523" alt="mamp-ports" src="https://user-images.githubusercontent.com/88348069/129621869-3e8847f9-daa2-4eb6-bb70-3ef65d01e8cd.png">

El siguiente paso es configurar la carpeta raíz del documento. Esta será la carpeta donde creará y almacenará sus sitios web. De forma predeterminada, MAMP usa la carpeta / Aplicaciones / MAMP / htdocs, pero puede cambiarla a una ubicación más accesible.

Para terminar con la configuración de MAMP solo hay que presionar el botón **start** del servidor. Al hacerlo se abrirá la página de inicio de MAMP (http://localhost/MAMP/?language=English)

### 2. Clonar el repositorio

Para que se pueda acceder a la tienda, la carpeta del proyecto que se descargó, **prestashop-store**, deberá ser ubicada dentro de MAMP, normalmente se encuentra ubicado en **Applications/MAMP**, es necesario clonar el proyecto dentro de la carpeta **htdocs**.

```
git clone https://github.com/pagandocheck/prestashop-store.git
```
### 3. Cargar dump de la base de datos con los productos de ejemplo

Para importar la base de datos, en el menú superior de la página de inicio de MAMP seleccionar **Tools** y después **phpMyAdmin**.

En **phpMyAdmin** hacer clic en la pestaña **importar**.

<img width="1260" alt="Captura de Pantalla 2021-08-11 a la(s) 22 04 42" src="https://user-images.githubusercontent.com/88348069/129136792-b3c1d270-d2c6-428d-b15e-b3e235576979.png">

Aquí verá un formulario como este, donde podrá cargar el archivo **database / prestashop.sql** de nuestro proyecto, después dar clic en **aceptar**.

<img width="569" alt="Captura de Pantalla 2021-08-11 a la(s) 22 07 40" src="https://user-images.githubusercontent.com/88348069/129136908-c491d3ab-5262-4c63-9b60-22da7a3d8b03.png">

Si se importó de manera satisfactoria podremos ver las tablas de la base de datos.

### 4. Acceder a la página.

En el navegador ir a http://localhost:8888/prestashop/en/ para visualizar la tienda con los productos cargados en la base de datos. Debería verse de la siguiente forma: 

![landing-page](https://user-images.githubusercontent.com/88348069/129619118-94ca7d5c-911c-4cfd-b8c5-a1ab8a6ea7d1.png)


Y listo, ya tienes una tienda alojada localmente en tu equipo, con productos de ejemplo.

### 5. Acceder al panel de administración.

Ingrese en la siguiente liga: http://localhost:8888/prestashop/admin651ib9qe0 para tener acceso al panel de administración. Las contraseñas por default son:

**email**: plugins@pagandocheck.com

**password**: admin@123

<img width="1266" alt="Captura de Pantalla 2021-08-16 a la(s) 13 33 48" src="https://user-images.githubusercontent.com/88348069/129619553-e12ec341-bbc3-499d-8905-85a250ee6945.png">
