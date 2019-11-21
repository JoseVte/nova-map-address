## Nova Map Address Field

A Nova field to place a marker on map to get coordinates then it reverse geocoding the coordinates to get a street address

## Installation

You can install the package in to a Laravel app that uses Nova via composer:

```bash
composer require josrom/nova-map-address
```

## Configuration
Publish the package config file:
```bash
php artisan vendor:publish --provider="Josrom\MapAddress\FieldServiceProvider"
```

This is the contents of the file which will be published at [config/map-address.php](config/map-address.php).

Add the following keys to your `.env` and `.env.example`:

```
MAP_ADDRESS_API_KEY=

Optional: Set map and address language
MAP_ADDRESS_LANGUAGE=es
```

_If you need a Google Maps API key, you can create an app and enable Places API and create credentials to get your API key https://console.developers.google.com._

## Usage:
Add the below to Nova/{Model}.php resource:

```php

use Josrom\MapAddress\MapAddress;

[
    MapAddress::make('address'),

    // You can set the initial map location. By default (Spain)
     MapAddress::make('address')
        ->initLocation(38.261842, -0.6868031),
        
    // You can set the location from the model
    MapAddress::make('address')
        ->setLocation($this->latitude, $this->longitude),
        
    // You can select the name of lat/lng fields. By default is lat/lng
    MapAddress::make('address')
        ->setLatitudeField('latitude')
        ->setLongitudeField('longitude'),
    
    // You can select what is the first result set in address field
    MapAddress::make('address')
        ->setGoogleResultType('street_address'),
    
    // You can also set the map zoom level. By default (4)
     MapAddress::make('address')
        ->initLocation(38.261842, -0.6868031)
        ->zoom(12),
]
```

![Package screenshot](/doc/map.png)

## Support:

* Jose Vicente Orts: vince@square1.io

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
