<?php
namespace Catapult\Episodes\Components;

use Catapult\Episodes\Models\Episode;
use Cms\Classes\ComponentBase;

class EpisodesList extends ComponentBase {

    public function componentDetails() {
        return [
          'name' => 'Episodes List',
          'description' => 'Creates grid of episodes'
        ];
    }

    public function onRun() {
        $this->episodes = Episode::all();
    }

    public function onRender()
    {
        $maxItems = $this->property('maxItems');
        if($maxItems) {
            $this->episodes = Episode::take($maxItems)->get();
        }
    }

    public function defineProperties()
    {
        return [
          'maxItems' => [
            'description' => 'Maximum episodes displayed',
            'title'       => '',
            'default'     => null,
            'type'        => 'integer'
          ]
        ];
    }

    public $episodes;
}
