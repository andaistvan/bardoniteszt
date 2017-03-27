<?php namespace Arteriaweb\Bardoniteszt\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Maincats Back-end Controller
 */
class Maincats extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arteriaweb.Bardoniteszt', 'bardoniteszt', 'maincats');
    }
}
