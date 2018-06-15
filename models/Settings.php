<?php namespace Initbiz\GusApi\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'initbiz_gusapi_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';
}
