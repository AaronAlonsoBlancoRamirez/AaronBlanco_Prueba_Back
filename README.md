<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# AaronBlanco_Prueba_Back

## Descripción

Este es un proyecto API desarrollado en Laravel como parte de la prueba técnica de Firetensor. La API permite la gestión de productos y usuarios, incluyendo la creación, consulta, actualización y eliminación (CRUD). Además, cuenta con protección mediante autenticación con Laravel Sanctum y validaciones de entrada de datos.

## Instrucciones para correr el proyecto

1. Clona el repositorio desde GitHub:

   ```bash
   git clone https://github.com/AaronAlonsoBlancoRamirez/AaronBlanco_Prueba_Back.git

2. Dirígete al directorio del proyecto:

    cd AaronBlanco_Prueba_Back

3. Instala las dependencias con Composer:

    composer install

4. Crea un archivo .env basado en .env.example y configura la base de datos:

    cp .env.example .env

5. Genera una clave de aplicación:

    php artisan key:generate

6. Ejecuta las migraciones:

    php artisan migrate

7. Inicia el servidor local:

   php artisan serve

El proyecto debería estar disponible en http://127.0.0.1:8000.
   
Explicación de cómo implementar el principio SOLID
Este proyecto sigue algunos de los principios SOLID para garantizar un código de calidad:

Single Responsibility Principle (SRP): Cada clase tiene una única responsabilidad. Por ejemplo, los controladores de usuarios y productos gestionan exclusivamente sus respectivas funcionalidades.
Open/Closed Principle (OCP): El código está abierto a la extensión pero cerrado a la modificación, especialmente al agregar nuevas funcionalidades en controladores separados.
Interface Segregation Principle (ISP): Aunque este proyecto no utiliza interfaces explícitas, las responsabilidades están claramente separadas entre controladores y modelos.
Instrucciones sobre cómo probar los endpoints
Gestión de usuarios
GET /api/users: Devuelve todos los usuarios.
POST /api/users: Crea un nuevo usuario.
Parámetros requeridos:
name: Nombre del usuario.
email: Correo electrónico.
password: Contraseña.
Gestión de productos
GET /api/products: Devuelve todos los productos.
POST /api/products: Crea un nuevo producto.
Parámetros requeridos:
name: Nombre del producto.
price: Precio del producto.
quantity: Cantidad del producto.
Autenticación
POST /api/login: Inicia sesión y devuelve un token de autenticación.
Parámetros requeridos:
email: Correo electrónico.
password: Contraseña.

