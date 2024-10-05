<a id="readme-top"></a>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/leonelvalentinn/dentaclick">
    <img src="src/assets/logos/logo-dentaclic-white.png" alt="Logo" width="500" height="100">
  </a>

  <p></p>
</div>

<!-- GETTING STARTED -->
## Para empezar


### Prerequisitos

* Node.js [Descargar Node.js](https://nodejs.org/en/download/package-manager/current)
* Laragon [Descargar Laragon](https://laragon.org/download/)
* MySQL Workbench [Descargar MySQL Workbench](https://dev.mysql.com/downloads/workbench/)
* Composer [Descargar Composer](https://getcomposer.org/download/)

### Instalación

1. Clona el repositorio
   ```sh
   git clone https://github.com/leonelvalentinn/testDev-backend.git
   ```
2. Instala los paquetes de Composer
   ```sh
   composer install
   ```
3. Abre Laragon, abre el administrador de BD y ejecuta:
   ```sh
   CREATE DATABASE testdevdb;
   USE testdevdb;
   ```
4. Ejecuta las migraciones con la semilla
   ```sh
   php artisan migrate --seed
   ```
5. Si no hay key en el .env ejecutar
   ```sh
    php artisan key:generate
   ```
5. Ejecuta el proyecto
   ```sh
   php artisan serve --port=8000
   ```

<p align="right">(<a href="#readme-top">Volver arriba</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->
