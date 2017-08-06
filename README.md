Seamless Laravel 5 / Kint Integration
============
This package add d() and s() function for help you debigging with beautifull trace of code. 
If you want find a dd() of laravel and you don't know the location of it you can use this package.

![Screenshot1](https://github.com/Mehrdad-Dadkhah/laravel-kint/blob/laravel-5/images/sample-kint1.png)
![Screenshot2](https://github.com/Mehrdad-Dadkhah/laravel-kint/blob/laravel-5/images/sample-kint2.png)

[![Laravel](https://img.shields.io/badge/Laravel-5.0-orange.svg?style=flat-square)](http://laravel.com)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

I love Kint, but it's a little hard to get it to work perfectly within Laravel. This plugin solves that, and adds some new features as well.

Kint is just a pretty replacement for **[var_dump()](http://php.net/manual/en/function.var-dump.php)**, **[print_r()](http://php.net/manual/en/function.print-r.php)** and **[debug_backtrace()](http://php.net/manual/en/function.debug-backtrace.php)**.

[Laravel 5 Documentation](https://github.com/rtconner/laravel-kint/tree/laravel-5)
[Laravel 4 Documentation](https://github.com/rtconner/laravel-kint/tree/laravel-4)

Laravel 5 branch update to use last version of Kint(v2) by [Mehrdad Dadkhah](https://github.com/Mehrdad-Dadkhah/laravel-kint).

### Installation

Install with composer

    composer require rtconner/laravel-kint "~2.0"

Then add this to `config/app.php`

```php
'providers' => [
	'Conner\Kint\KintServiceProvider',
];
```

Optionally setup the [config/kint.php](config/kint.php) file

    php artisan vendor:publish

### Usage

Use Kint as you would normally.

```php
dd($var); // debug dump and die

d($var); // debug dump

s($var); // simple print
```

There is an also an added feature to allow you to easily dump variables from within **blade templates**.
Notice no semi-colon at the end, and must be on their own line of code.

```
@d($var)

@dd($var) //if require laravel-kint/init_helpers.php in public/index.php it will be work

@s($var)
```

### Configure

To enable configuration first create the `config/kint.php` file in your app.

    php artisan vendor:publish

[See config/kint.php](config/kint.php) for configuration options.

See [Kint documentation](https://github.com/kint-php/kint) for details on configuration options.


### How Do I Override Laravel's dd() method?

Please require init_helpers.php in laravel public/index.php before require bootstrap/autoload.php.
Your public/index.php should be like:

```
require '/var/www/html/vendor/rtconner/laravel-kint/init_helpers.php'; // path to init_helpers.php of laravel kint package

require __DIR__.'/../bootstrap/autoload.php';
```

or

define dd function before require bootstrap/autoload.php and use [Kint function](https://github.com/kint-php/kint)

#### Credits

 - Robert Conner - http://smartersoftware.net

Copyright 2015 Robert Conner, You may use this code under The MIT License (MIT)