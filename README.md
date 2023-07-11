### Toggle Switch Field for Nova 4


### Requirements
- PHP 8.0 or higher
- Nova 4

## Installation

You can install the package into a Laravel app that uses Nova via composer:

```bash
composer require naif/toggle-switch-field
```

## Usage

Add the field to Nova Resource

```
  public function tools()
    {
        return [
            new ToggleSwitchField::make('toggle')->color('#3AB95A'),
        ];
    }
```

## Screenshots

<img src="screenshots/dark-off.png" width="100">

<img src="screenshots/dark-on.png" width="100">

<img src="screenshots/off.png" width="100">

<img src="screenshots/on.png" width="100">

## Support:
naif@naif.io

https://naif.io

Bug Tracker:

https://github.com/naifalshaye/chatgpt-nova4/issues

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
