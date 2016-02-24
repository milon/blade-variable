[![Packagist Downloads](https://img.shields.io/packagist/dt/milon/blade-variable.svg)](https://packagist.org/packages/milon/blade-variable)
[![Stable version](https://img.shields.io/packagist/v/milon/blade-variable.svg)](https://packagist.org/packages/milon/blade-variable)
[![License](https://img.shields.io/packagist/l/milon/blade-variable.svg)](https://packagist.org/packages/milon/blade-variable)

# blade-variable

Declaring variables in Laravel blade files.

## Installation

Add this line to `composer.json` file-

```
require: {
    ...,
    "milon/laravel-blade": "~5.2"
}
```

For Laravel 5.1 try these lines instead-
```
require: {
    ...,
    "milon/laravel-blade": "~5.1"
}
```

Then from your terminal run this command-

```
composer update
```

After that add this line to `providers` array on `config/app.php` file-

```
'providers' => [
...,
Milon\BladeVariable\BladeVariableServiceProvider::class,
]
```

## Usage

You can define any variable in blade file like this-

```
@var('name', 'value')
```

Then you can use this like any other normal php variable-

```
{{ $name }}
```

## Copyright

Nuruzzaman Milon  
http://milon.im
