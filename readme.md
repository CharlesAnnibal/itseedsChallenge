<h2>ItSeeds Challenge</h2>

<p>Developer: Charles Annibal - Rio de Janeiro - Brazil</p>
<h2>Laravel version: 5.5<h2>
<h2>Instructions<h2>
<br>

<p>You need set the database configs in <b>.env</b> file </p>
<p>You need execute the command "composer update" to load the dependencies of project.</p>

<h4>Execute with the Laravel development server</h4>
<p>To execute the project with a Laravel development server you need go to the project folder and execute the command "php artisan serve".
But the url will be like 127.0.0.1:8000</p>

<h4>Execute in a shared host or http server like apache or a WAMP</h4>
<p>To execute the project in a shared host or in a http local server you need put the project folder one level under <b>htdocs</b> folder and copy content from itseedsChallenge/<b>public</b> folder and paste into <b>htdocs</b> folder.<p>
<p>Is necessary change the file index.php onto htdocs folder:</p>
<br>
<p>Set "require __DIR__.'/../vendor/autoload.php';" to "require __DIR__.'/../itseeds/vendor/autoload.php';"</p>
<br>
<p>and "require __DIR__.'/../vendor/bootstrap/app.php';" to "require __DIR__.'/../itseeds/bootstrap/app.php';"</p>

<h4>Migrations and seeds</h4>
<p>To run the migrations execute the command php artisan migrate</p>
<p>To run the seeds execute the command php artisan db:seed --class=ProductTableSeeder</p>

<h4>Access the API</h4>
<p>To access the product API you need an app like postman https://www.getpostman.com/</p>

<p>Set the url to 127.0.0.1/api/product to access the API created with Laravel</p>
<p>You cannot access the url by browser</p>

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
