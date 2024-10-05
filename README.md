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
   git clone https://github.com/leonelvalentinn/dentaclick.git
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

## Contribuir al proyecto

Para contribuir algún cambio, por favor haz un [_fork_](https://github.com/leonelvalentinn/dentaclick/fork) del repositorio y crea una [_pull request_](https://github.com/leonelvalentinn/dentaclick.git/pulls). También puedes simplemente abrir un [_issue_](https://github.com/leonelvalentinn/dentaclick.git/issues) con la etiqueta "enhancement".

Aquí tienes una guía rápida:

1. Haz un [_fork_](https://github.com/leonelvalentinn/dentaclick/fork) del Proyecto
2. Clona tu [_fork_](https://github.com/leonelvalentinn/dentaclick/fork) (`git clone <URL del fork>`)
3. Añade el repositorio original como remoto (`git remote add upstream <URL del repositorio original>`)
4. Crea tu Rama de Funcionalidad (`git switch -c feature/CaracteristicaIncreible`)
5. Realiza tus Cambios (`git commit -m 'Add: alguna CaracterísticaIncreible'`)
6. Haz Push a la Rama (`git push origin feature/CaracteristicaIncreible`)
7. Abre una [_pull request_](https://github.com/leonelvalentinn/dentaclick/pulls)

<p align="right">(<a href="#readme-top">Volver arriba</a>)</p>


<!-- MARKDOWN LINKS & IMAGES -->

[dentaclic-screenshot]: src/assets/images/Dentaclic-hero.png

[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/

[tailwindcss]: https://img.shields.io/badge/Tailwind-ffffff?style=for-the-badge&logo=tailwindcss&logoColor=38bdf8
[tailwind-url]: https://tailwindcss.com
