# blade-variable
Declaring variables in Laravel blade files.

## Installation
Add this line to `composer.json` file (for Laravel 5.1 and Above) - 

```
require: {
    ...,
    "milon/laravel-blade": "~2.0"
}
```

Add this line to `composer.json` file (for Laravel 4.2 and Above) - 

```
require: {
    ...,
    "milon/laravel-blade": "~1.0"
}
```

Then from your terminal run this command -

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
