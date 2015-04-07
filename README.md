# cdn-helper

Laravel helper to create URLs to assets on a CDN.

## Installation

Add `npmweb/cdn-helper` as a requirement to `composer.json`:

```javascript
{
    "require": {
        "npmweb/cdn-helper": "1.*"
    }
}
```

Update your packages with `composer update`.

Add the service provider to your Laravel service providers list:

```php
return array(
    ...
    'providers' => array(
        ...
        'NpmWeb\CdnHelper\CdnHelperServiceProvider',
    ),
);
```

Copy over the config file with `php artisan config:publish npmweb/cdn-helper`, then customize it with the base URL for your CDN.

## Usage

The following helpers will be available anywhere in your code:

- `cdn_asset( $filename, $folder = null, $whichCdn = null )` - generates a URL to the given file, in the optional folder and optional CDN
- `cdn_url( $path, $whichCdn = null )` - generates a URL to the given path, on the optional CDN

## License

This code is open-sourced under the MIT license. For more information,
see the LICENSE file.
