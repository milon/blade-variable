# blade-variable

Declaring variable in blade file

## Installation

Add this line to `composer.json` file-

```
require: {
    ...,
    "milon/laravel-blade": "dev-master"
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
