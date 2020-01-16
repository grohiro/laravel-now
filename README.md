# Laravel-Now

## Install

```sh
$ composer config repositories.laravel-now vcs https://github.com/grohiro/laravel-now
$ composer require grohiro/laravel-now dev-master
```

## Usage

Standalone Server

```sh
$ LARAVEL_NOW="1999-7-31 23:59:59" php artisan serve
```

Command

```sh
$ LARAVEL_NOW=1999-12-31 php artisan app:command
$ LARAVEL_NOW=yesterday php artisan app:daily-job
```

Tinker

```sh
$ LARAVEL_NOW="1999-7-31 23:59:59" php artisan tinker
Psy Shell v0.9.12 (PHP 7.2.9 — cli) by Justin Hileman
>>> \Carbon\Carbon::now()
=> Carbon\Carbon @933465599 {#3004
     date: 1999-07-31 23:59:59.0 UTC (+00:00),
   }
>>>
```
