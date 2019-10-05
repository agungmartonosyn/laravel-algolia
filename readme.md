<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sample Laravel Algolia Search
- Laravel 6.0
- Algolia client 2.2

## Usage

- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer update`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Run `php artisan tinker` and `factory(App\User::class, 100)->create();`
- Register in <a href="https://algolia.com" target="_blank"> `algolia.com`</a>
- Add `ALGOLIA_APP_ID=YourApplicationID` `ALGOLIA_SECRET=YourAdminAPIKey` in `.env`
- open terminal and run `php artisan scout:import "App\User"`
- Login using `email : admin@admin.com` and `password : password`
