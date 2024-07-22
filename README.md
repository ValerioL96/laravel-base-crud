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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


<p align="center">
<a href="https://getbootstrap.com" target="_blank"><img src="https://miro.medium.com/v2/resize:fit:400/1*onZhQJU7A3ab6V1sHfMRkQ.jpeg" height="150"></a>
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" height="150"></a>
<a href="https://laravel.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1200px-Sass_Logo_Color.svg.png" height="150"></a>

</p>


# Template for a Laravel 10.0 + SCSS + Boostrap 5.x
Template to generate a new standard and simple project using Laravel 10.x, Bootstrap 5.x and SCSS (SASS with SCSS Syntax).

## Steps to build another template just like this one:
- Execute these commands on your terminal, within your project:
- Remove POSTCSS from our application `npm remove postcss`
- Execute `npm i`
- Install SASS `npm i --save-dev sass`
- Update both css file and folder to scss:
    - Rename `resources/css` into `resources/scss`
    - Rename `app.css` into `app.scss`
- Edit `vite.config.js` file:

            export default defineConfig({
                plugins: [
                    laravel({
                        input: [
                        'resources/scss/app.scss',
                        'resources/js/app.js',
                    ],
                    refresh: true
                }),
                ],

                resolve: {
                    alias: {
                            '~resources' : '/resources/'
  
                    }
                }
            });
- Add `import '~resources/scss/app.scss'` to `resources/app/js`
- Add `@vite('resources/js/app.js')` to the pages that want to implement it (layouts included, eventually)
- Add to `resources/app/js` this block of code to allow the correct renderization of our images

        import.meta.glob([
            '../img/**'
        ])
- Add `package-lock.json` to `.gitignore` file
- Install and configure Bootstrap:
    - Install both bootstrap and popperjs packages `npm i --save bootstrap @popperjs/core`
    - Add `const path = require('path')` at the beginning of our `vite.config.js` file
    - Add `'~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')` to our aliases by the end of our `vite.config.js` file
    - Add bootstrap js via import `import * as bootstrap from 'bootstrap';` to our `resources/app.js`
    - Add boostrap scss via @import `@import "~bootstrap/scss/bootstrap";` to our `resources/app.scss`


## Steps to use this project correctly:

- Open this repository and click on Use this template ---> Create a new repository
- Clone the repository wherever you want to develop, e.g. VS Code, VSCodium, ecc.
- Open the cloned folder with a terminal
- Copy and paste the .env.example file and rename it into .env without removing the env.example file
- Run composer install to install all our composer packages
- Run npm i to install all our npm packages
- Run php artisan key:generate to generate our custom application key
- Run on two separeted terminals:
    - run npm run dev to build iteratively our front-end packages and code
    - run php artisan serve to build iteratively our back-end packages and code
- Start changing the world with your oustanding code!
