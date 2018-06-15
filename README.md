# Gus APi plugin
## Introduction
GusApi plugin is a OctoberCMS plugin allow to get data from GUS.

It is a OctoberCMS's wrapper of [johnzuk/GusApi](https://github.com/johnzuk/GusApi).

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
