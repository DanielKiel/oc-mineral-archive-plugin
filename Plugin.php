<?php namespace Dionyseos\MineralArchive;

use Backend;
use System\Classes\PluginBase;

/**
 * MineralArchive Plugin Information File
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
            'name'        => 'MineralArchive',
            'description' => 'No description provided yet...',
            'author'      => 'Dionyseos',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Dionyseos\MineralArchive\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dionyseos.mineralarchive.some_permission' => [
                'tab' => 'MineralArchive',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'mineralarchive' => [
                'label'       => 'MineralArchive',
                'url'         => Backend::url('dionyseos/mineralarchive/minerals'),
                'icon'        => 'icon-leaf',
                'permissions' => ['dionyseos.mineralarchive.*'],
                'order'       => 500,
            ],
        ];
    }
}
