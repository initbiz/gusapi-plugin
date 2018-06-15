<?php namespace Initbiz\GusApi;

use Backend;
use System\Classes\PluginBase;

/**
 * gusapi Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'GusApi',
            'description' => 'Gus Api plugin for October CMS',
            'author'      => 'Initbiz',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerSettings()
    {
        return [
            'gusapi' => [
                'label'       => 'initbiz.gusapi::lang.settings.menu_gusapi_label',
                'description' => 'initbiz.gusapi::lang.settings.menu_gusapi_description',
                'category'    => 'initbiz.gusapi::lang.settings.menu_category',
                'icon'        => 'icon-cubes',
                'class'       => 'Initbiz\GusApi\Models\Settings',
                'order'       => 100
            ]
        ];
    }
}
