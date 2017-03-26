<?php namespace Arteriaweb\Bardoniteszt;

use Backend;
use System\Classes\PluginBase;

/**
 * bardoniteszt Plugin Information File
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
            'name'        => 'bardoniteszt',
            'description' => 'No description provided yet...',
            'author'      => 'Arteriaweb',
            'icon'        => 'icon-exclamation-triangle'
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
            'Arteriaweb\Bardoniteszt\Components\MyComponent' => 'myComponent',
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
            'arteriaweb.bardoniteszt.some_permission' => [
                'tab' => 'bardoniteszt',
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
        // return []; // Remove this line to activate

        return [
            'bardoniteszt' => [
                'label'       => 'Bardoni Teszt',
                'url'         => Backend::url('arteriaweb/bardoniteszt/products'),
                'icon'        => 'icon-exclamation-triangle',
                // 'permissions' => ['arteriaweb.bardoniteszt.*'],
                'order'       => 500,

                'sideMenu' => [
                    'products'=> [
                        'label'       => 'Products',
                        'url'         => Backend::url('arteriaweb/catalog/products'),
                        'icon'        => 'icon-exclamation-triangle',
                    ],
                    'maincats'=> [
                        'label'       => 'Maincats',
                        'url'         => Backend::url('arteriaweb/catalog/maincats'),
                        'icon'        => 'icon-cogs',
                    ],
                ]
            ]
        ];
    }
}
