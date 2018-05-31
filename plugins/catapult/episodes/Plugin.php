<?php namespace Catapult\Episodes;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
          'Catapult\Episodes\Components\EpisodesList' => 'EpisodesList'
        ];
    }

    public function registerSettings()
    {
    }
}
