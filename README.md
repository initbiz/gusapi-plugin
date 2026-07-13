# GusApi - Use GUS API to get information from REGON in your project.

![GusApi banner](https://raw.githubusercontent.com/initbiz/gusapi-plugin/master/docs/gus-api.png)

This is a repo of OctoberCMS plugin by [InIT.biz](https://init.biz).

## Introduction

Our Gus Api plugin give you acces to the johnzuk/GusApi library from within October.

The library is based on the official REGON SOAP API.

## Installation

If you want to connect to the testing version, then install the plugin and you are ready to go.

If you want to connect to production, ensure you have:

-   `APP_ENV` in you `.env` file set to `production`
-   entered your key in backend settings.

### Example usage

```php
    use Initbiz\GusApi\Classes\GusApi;

    //...

    $gus = new GusApi();

    //With Laravel accent ;)
    $initbiz = collect($gus->getByNip('8661738221'))->first();
```
