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
    # You can set the toggle switch color by color code.
        return [
            new ToggleSwitchField::make('toggle')->color('#3AB95A'),
        ];
    }
```

## Screenshots

<img src="screenshots/img.png" width="150"><br>
<img src="screenshots/img_1.png" width="400"><br>
<img src="screenshots/img_2.png" width="400"><br>
<img src="screenshots/off.png" width="100"><br>
<img src="screenshots/on.png" width="100"><br>
<img src="screenshots/dark-off.png" width="100"><br>
<img src="screenshots/dark-on.png" width="100"><br>
<img src="screenshots/index.png" width="100"><br>
<img src="screenshots/dark-index.png" width="100"><br>
<img src="screenshots/detail-on.png" width="100"><br>
<img src="screenshots/detail-off.png" width="100"><br>
<img src="screenshots/dark-detail-off.png" width="100"><br>
<img src="screenshots/dark-detail-on.jpg" width="100"><br>

## Support:
naif@naif.io

https://naif.io

Bug Tracker:

https://github.com/naifalshaye/chatgpt-nova4/issues

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
