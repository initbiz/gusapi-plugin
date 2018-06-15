# Gus Api plugin
## Introduction
Gus Api plugin is an OctoberCMS plugin allowing to use [johnzuk/GusApi](https://github.com/johnzuk/GusApi) library. The library is based on official REGON SOAP api.

## Documentation
If you want to connect to testing version, then install plugin and you are ready to go.

If you want to connect to production, ensure you have:
* `APP_ENV` in you `.env` file set to `production`
* entered your key in backend settings.

### Example usage
```php
use Initbiz\GusApi\Classes\GusApi;

//...

$gus = new GusApi();

//With Laravel accent ;)
$initbiz = collect($gus->getByNip('8661738221'))->first();
```
