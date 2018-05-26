<?php namespace Catapult\About;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
          'Catapult\About\Components\PeopleList' => 'PeopleList'
        ];
    }

    public function registerSettings()
    {
    }
}
